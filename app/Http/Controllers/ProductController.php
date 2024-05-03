<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use App\Models\subcategory;
use App\Models\brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = product::all();
        return view('backend.product.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        $subcategories = subcategory::all();
        $brands = brand::all();
        return view('backend.product.create', compact('categories', 'subcategories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
            'description' => 'required|string|max:400',
            'image' => 'required|image|mimes:png,jpg',
            'category_id' => 'required|numeric',
            'subcategory_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',

        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $img_name = now()->format('y-m-d-his') . rand(1000, 9999) . '.' . $img->getClientOriginalExtension();
            $img_path = 'upload/';
            $img->move($img_path, $img_name);
            $data['image'] = $img_path . $img_name;
        }
        product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = product::findOrFail($id);
        $data = $request->all();
        $product->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();
        return back();
    }
}
