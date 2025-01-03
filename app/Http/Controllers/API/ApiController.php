<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    public function all(Request $request)
    {   
        $id = $request->input('id');
        $limit = $request->input('limit', 10);
        $name = $request->input('name');
        $slug = $request->input('slug');
        $type = $request->input('type');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        // Get product by ID
        if ($id) {
            $product = Product::with('galleries')->find($id);

            if ($product) {
                return ResponseFormatter::success($product, 'Data produk berhasil diambil');
            } else {
                return ResponseFormatter::error(null, 'Data produk tidak ada', 404);
            }
        }

        // Get product by slug
        if ($slug) {
            $product = Product::with('galleries')->where('slug', $slug)->first();

            if ($product) {
                return ResponseFormatter::success($product, 'Data produk berhasil diambil');
            } else {
                return ResponseFormatter::error(null, 'Data produk tidak ada', 404);
            }
        }

        // Get products with filters
        $product = Product::with('galleries');

        if ($name) {
            $product->where('name', 'like', '%' . $name . '%');
        }

        if ($type) {
            $product->where('type', 'like', '%' . $type . '%');
        }

        if ($price_from) {
            $product->where('price', '>=', $price_from);
        }

        if ($price_to) {
            $product->where('price', '<=', $price_to);
        }

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data list produk berhasil diambil'
        );
    }
}
