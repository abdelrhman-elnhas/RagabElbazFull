<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function statistics(){
        try {
            $accepted = ModelsRequest::with('user')->where(['worker_id'=>auth()->guard('api')->worker->id,'status'=>'opening'])->count();
            $refused  = ModelsRequest::with('user')->where(['worker_id'=>auth()->guard('api')->worker->id,'status'=>'rejected'])->count();
            $pending  = ModelsRequest::with('user')->where(['worker_id'=>auth()->guard('api')->worker->id,'status'=>'pending'])->count();
            $closed   = ModelsRequest::with('user')->where(['worker_id'=>auth()->guard('api')->worker->id,'status'=>'closed'])->count();
            return response()->json([
                'message' => 'success',
                'accepted requests' => $accepted,
                'refused requests' => $refused,
                'pending requests' => $pending,
                'closed requests' => $closed,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }
    public function search(){
        try {
            $data = 'test';
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
