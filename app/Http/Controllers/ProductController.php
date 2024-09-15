<?php

namespace App\Http\Controllers;
use  App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
    return view('product.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data= $request->validate([
        'name' => 'required',
        'price' => 'required|decimal:0,3',
        'description' => 'required',
        'qty'=>'required',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max
        :2048',
        ]);
        $imageName = time().'.'.request()->image->extension();
        request()->image->move(public_path('images'), $imageName);


        $data['image']=$imageName;
        Product::create($data);
        return redirect()->route('product.index');

        

        
            
    }

    /**
     * Display the specified resource.
     */
    public function show( Product $request )
    {
        $products = Product::all();
    return view('product.show',['products'=>$products]);
    }

    public function __construct()
    {
        $this->middleware('auth')->only('show');
    }
    
    public function edit(Product $product)
    {
        
    return view('product.edit',['product'=>$product]);

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
       $data= $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'qty'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max
            :2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
           $data['image']=$imageName;

           $product->update($data);

           return redirect()->route('product.index') ->with('success','Product Updated succesffully');

            }

    
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('success','Product Deleted Successfully');

    } 
}
