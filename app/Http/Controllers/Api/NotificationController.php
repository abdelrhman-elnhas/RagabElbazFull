<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        try {
            $data = Notification::where('user_id',auth()->guard('api')->id())->latest()->paginate(10);
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
                'notification_id'    => 'required',
            ]);
            $data = Notification::findOrFail($request->notification_id);
            $data->delete();
            return response()->json([
                'message' => 'success',
                'data' => 'تم حذف الاشعار بنجاح'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function deleteAll(){
        try {
            $data = Notification::where('user_id',auth()->guard('api')->id())->latest()->get();
            foreach ($data as $d) {
                $d->delete();
            }
            return response()->json([
                'message' => 'success',
                'data' => 'تم حذف الاشعارات بنجاح'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
}
