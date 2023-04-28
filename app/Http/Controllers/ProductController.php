<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Session\Session;

class ProductController extends Controller
{
    /**
     * Show all product postings
     */

    public function index(){
        return view('products.products', [
            'products' => Product::latest()->filter(request(['search']))->paginate(6)
        ]);
    }

    /**
     * Show all product postings
     * @param Job
     */
    public function show(Product $product){
        return view('products.product', [
            'product' => $product
        ]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $formContents = $request->validate([
            'name' => 'required',
            // 'company' => 'required|unique:products'
            'description' => 'required',
            'price' => 'required',
            'unit' => 'required'
        ]);

        if($request->hasFile('image')){
            $formContents['image'] = $request->file('image')->store('images','public');
        }
        
        Product::create($formContents);

        return redirect('/')->with('message','New product posted successfully!');
    }

    public function edit(Product $product){
        return view('products.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product){
        $formContents = $request->validate([
            'name' => 'required',
            // 'company' => 'required|unique:products'
            'description' => 'required',
            'price' => 'required',
            'unit' => 'required'
        ]);

        if($request->hasFile('image')){
            $formContents['image'] = $request->file('image')->store('images','public');
                if(File::exists('storage/'.$product->image)){
                    File::delete('storage/'.$product->image);
                }
        }
        
        $product->update($formContents);

        return redirect('/')->with('message','Updated product successfully!');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('/')->with('message','Deleted product successfully!');
    }
}
