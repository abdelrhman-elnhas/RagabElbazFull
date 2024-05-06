<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Worker;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        try {
            $data = Category::latest()->get();
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
            $data = Category::with(['devices','workers'])->findOrFail($id);
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
    public function nearby(){
        try {
            $data = Worker::latest()->paginate(10);
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
