<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Problem;
use App\Models\Rating;
use App\Models\Request as ModelsRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(){
        try {
            $data = ModelsRequest::with('user')->where('worker_id',auth()->guard('api')->worker->id)->latest()->get();
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
    public function index2($status){
        try {
            $data = ModelsRequest::with('user')->where(['worker_id'=>auth()->guard('api')->worker->id,'status'=>$status])->latest()->get();
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
    public function index3(){
        try {
            $data = ModelsRequest::with('user')->where('user_id',auth()->guard('api')->id())->latest()->get();
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
    public function show($id){
        try {
            $data = ModelsRequest::with('user')->findOrFail($id);
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
    public function accept(Request $request){
        try {
            $validation = $request->validate([
                'request_id'    => 'required',
            ]);
            $data = ModelsRequest::find($validation['request_id']);
            $data->status = 'opening';
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
    public function refuse(Request $request){
        try {
            $validation = $request->validate([
                'request_id'    => 'required',
            ]);
            $data = ModelsRequest::find($validation['request_id']);
            $data->status = 'rejected';
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
    public function close(Request $request){
        try {
            $validation = $request->validate([
                'request_id'    => 'required',
            ]);
            $data = ModelsRequest::find($validation['request_id']);
            $data->status = 'closed';
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
    public function status(Request $request){
        try {
            $validation = $request->validate([
                'request_id'    => 'required',
                'status'    => 'required', //'pending','rejected','closed','waiting_for_worker','opening'
            ]);
            $data = ModelsRequest::find($validation['request_id']);
            $data->status = $validation['status'];
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
    public function review(Request $request){
        try {
            $validation = $request->validate([
                'request_id'    => 'required',
                'rating'        => 'required',
                'review'        => 'required',
            ]);
            $data = ModelsRequest::findOrFail($validation['request_id']);
            $review = new Review();
            $review->user_id = auth()->guard('api')->id();
            $review->request_id = $validation['request_id'];
            $review->content = $validation['review'];
            $review->save();
            $rating = new Rating();
            $rating->user_id = auth()->guard('api')->id();
            $rating->star = $validation['rating'];
            $rating->model_id = $review->id;
            $rating->model = 'Review';
            $rating->save();
            return response()->json([
                'message' => 'success',
                'data' => 'review added successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function addProblem(Request $request){
        try {
            $validation = $request->validate([
                'request_id'    => 'required',
                'img'           => 'nullable',
                'description'   => 'nullable',
            ]);
            $data = ModelsRequest::findOrFail($validation['request_id']);
            $problem = new Problem();
            $problem->user_id = auth()->guard('api')->id();
            $problem->request_id = $validation['request_id'];
            $problem->description = $validation['description'];
            $file = $request->file('img');
            if (isset($file)) {
                $mainpath = date("Y-m-d") . '/';
                $fileNameWithExtension = $file->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $imageName = $fileName . '_' . time() . '.' . $extension;
                $path = $file->move(public_path('storage/problems/' . $mainpath), $imageName);
                $problem->img = url('') . '/storage/problems/' . $mainpath . $imageName;
            }
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
}
