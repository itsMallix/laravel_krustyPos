<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        // $product = Product::paginate(10);
        return response()->json([
            'status' => 'success',
            'data' => $product
        ], 200);
    }
}
