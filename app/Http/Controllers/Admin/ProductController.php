<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Model\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(ProductRequest $request)
    {
        $id = $request->id;
        $name = $request->name;

        $products = DB::table('product')
            ->where('name', 'like', '%' . $name . '%')
            ->where('deleted', false)
            ->orderByDesc('product_id')
            ->get();

        if ($id != '') {
            $products = $products->where('product_id', '=', $id);
        }

        $data = ['products' => $products];

        return view('admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.product.add_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('admin.product')->with('notification', 'Add product successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $data = ['product' => $product];

        return view('admin.product.add_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(ProductRequest $request, $id)
    {
        Product::all()->where('product_id', $id)
            ->first()
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
            ]);

        return redirect()->route('admin.product')->with('notification', 'Edit product successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        Product::all()->where('product_id', $id)
            ->first()
            ->update([
                'deleted' => true,
            ]);

        return redirect()->route('admin.product')->with('notification', 'Product deleted');
    }
}
