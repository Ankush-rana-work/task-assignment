<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Set the default values for pagination if not provided
            $perPage = $request->has('per_page') ? (int) $request->per_page : 10;
            $page = $request->has('page') ? (int) $request->page : 1;

            // Start with the base query
            $query = Product::query();

            // Apply search by name if the 'name' parameter is provided
            if ($request->has('name') && !empty($request->name)) {
                $query->where('name', 'like', '%' . $request->name . '%');
            }

            // Apply pagination: fetch data based on perPage and page parameters
            $products = $query->paginate($perPage, ['*'], 'page', $page);

            // Return the products as a JSON response
            return response()->json($products, 200);
        } catch (Exception $e) {
            // Handle the exception and return a custom error response
            return response()->json([
                'error' => 'An error occurred while fetching products.',
                'message' => $e->getMessage(),
            ], 500); // HTTP status code 500 for internal server error
        }
    }

    /**
     * Method delete
     *
     * @param $id $id [explicite description]
     *
     * @return void
     */
    public function delete(Request $request, $id)
    {
        try {
            // Find the product by ID
            $product = Product::find($id);

            // If the product does not exist, return a 404 response
            if (!$product) {
                return response()->json([
                    'error' => 'Product not found.',
                ], 404);
            }

            // Perform the soft delete
            $product->delete();

            return response()->json([
                'message' => 'Product successfully deleted.',
            ], 200);
        } catch (Exception $e) {
            // Handle the exception and return a custom error response
            return response()->json([
                'error' => 'An error occurred while deleting the product.',
                'message' => $e->getMessage(),
            ], 500); // 500 Internal Server Error
        }
    }
}
