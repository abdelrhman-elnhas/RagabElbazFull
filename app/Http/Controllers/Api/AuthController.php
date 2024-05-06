<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        try {
            $data = $request->validate([
                'phone'         => 'required',
                'password'      => 'required',
            ]);
            $credentials = [
                'phone' => $request->phone,
                'password' => $request->password,
            ];
            if (auth()->attempt($credentials)) {
                $user = User::where('phone', $request->phone)->first();
                if ($user->api_token == null) {
                    User::where('id', $user->id)->update([
                        'api_token' => Hash::make(rand(100000, 99999999))
                    ]);
                    $user = User::where('phone', $request->phone)->first();
                }
                return response()->json([
                    'message' => 'success',
                    'data' => $user
                ]);
            } else {
                return response()->json([
                    'message' => 'error',
                    'data' => 'user not found'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function registerUser(Request $request){
        try {
            $validation = $request->validate([
                'name'    => 'required',
                'email'   => 'nullable',
                'password'=> 'required',
                'phone'   => 'nullable',
            ]);
            $data = new User();
            $data->name = $validation['name'];
            $data->email = $validation['email'];
            $data->password = Hash::make($validation['password']);
            $data->phone = $validation['phone'];
            $data->save();
            return response()->json([
                'message' => 'success',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function registerWorker(Request $request){
        try {
            $validation = $request->validate([
                'name'    => 'required',
                'email'   => 'nullable',
                'password'=> 'required',
                'tax'=> 'required',
                'category_id'=> 'nullable',
                'phone'   => 'nullable',
            ]);
            $data = new User();
            $data->name = $validation['name'];
            $data->email = $validation['email'];
            $data->password = Hash::make($validation['password']);
            $data->phone = $validation['phone'];
            $data->save();
            $worker = new Worker();
            $worker->user_id = $data->id;
            $worker->company = $validation['name'];
            $worker->category_id = $validation['category_id'];
            $worker->tax = $validation['tax'];
            $worker->save();
            return response()->json([
                'message' => 'success',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function delete(Request $request){
        try {
            $validation = $request->validate([
                'user_id'    => 'required',
            ]);
            $data = User::find($request->user_id);
            $data->delete();
            return response()->json([
                'message' => 'success',
                'data' => 'user deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function logout(Request $request){
        try {
            $data = $request->validate([
                'api_token' => 'required',
            ]);
            $token = $request->api_token;
            $user = User::where('api_token', $token)->first();
            $user->api_token = null;
            $user->save();
            return response()->json([
                'message' => 'success',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function profileWorker(){
        try {
            $data = User::with(['worker.reviews.user.addresses','worker.reviews.rate'])->find(auth()->guard('api')->id());
            return response()->json([
                'message' => 'success',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function profileUser(){
        try {
            $data = User::with(['reviews.request','reviews.rate','addresses'])->find(auth()->guard('api')->id());
            return response()->json([
                'message' => 'success',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function update(Request $request){
        try {
            $validation = $request->validate([
                'name'          => 'nullable',
                'email'         => 'nullable',
                'photo'         => 'nullable',
                'phone'         => 'nullable',
                'gov'           => 'nullable',
            ]);
            $user = User::find(auth()->guard('api')->id());
            if ($request->phone) {
                $m = User::where('phone', $request->phone)->first();
                if ($m) {
                    return response()->json([
                        'message' => 'error',
                        'data' => 'phone found'
                    ]);
                } else {
                    $user->phone = $request->phone;
                }
            }
            if ($request->name) {
                $user->name = $request->name;
            }
            if ($request->gov) {
                $user->gov = $request->gov;
            }
            if ($request->email) {
                $m = User::where('email', $request->email)->first();
                if ($m) {
                    return response()->json([
                        'message' => 'error',
                        'data' => 'email found'
                    ]);
                } else {
                    $user->email = $request->email;
                }
            }
            $file = $request->file('photo');
            if (isset($file)) {
                $mainpath = date("Y-m-d") . '/';
                $fileNameWithExtension = $file->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $imageName = $fileName . '_' . time() . '.' . $extension;
                $path = $file->move(public_path('storage/users/' . $mainpath), $imageName);
                $user->photo = url('') . '/storage/users/' . $mainpath . $imageName;
            }
            $user->save();
            return response()->json([
                'message' => 'success',
                'data' => $user
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
}
