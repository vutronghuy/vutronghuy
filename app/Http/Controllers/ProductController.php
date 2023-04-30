<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

use function Termwind\render;

class ProductController extends Controller
{   
    // public function product1()
    // {
    //     return view('product1');
    // }
    
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {

        $products = Product::latest()->paginate(5);
        return view('products.index', compact('products'))->with('i',(request()->input('page', 1)-1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));

        // return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg.gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $product = Product::create($input);
        // $category = Category::findOrFail($request->category_id);
        // $category->products()->save($product);
        $product->name = $input['name'];
        $product->description = $input['description'];
        $product->price = $input['price'];
        $product->category_id = $input['category_id'];
        $product->image = $input['image'];
        $product->save();

        return redirect()->route('menu')->with('ok','Product created successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit',compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        $product->update($input);
        return redirect()->route('index')->with('ok','Product updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('index')->with('ok','Product deleted successfully!!');
    }

    public function menu(Request $request)
    {
        $query = Product::query();

        if ($request->has('category_id')) {
            $category_id = $request->input('category_id');
            if (!empty($category_id)) {
                $query->where('category_id', $category_id);
            }
        }

        if ($request->has('price_range')) {
            $price_range = $request->input('price_range');
            if (!empty($price_range)) {
                $range = explode('-', $price_range);
                $query->whereBetween('price', $range);
            }
        }

        $sort_by = $request->input('sort_by');

        switch ($sort_by) {
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $products = $query->paginate(6);
        $categories = Category::all();

        return view('frontend.menu', compact('products', 'categories'));
    }



}

