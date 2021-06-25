<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $respository;

    public function __construct(Product $product){
        $this->repository = $product;
    }
    public function index(){
        $products = $this->repository->latest()->paginate(1);
        
        return view('admin.pages.products.index',[
            'products' => $products,

        ]);
    }
    public function create(){
        return view('admin.pages.products.create');
    }
    public function store(StoreUpdateProduct $request){
        $data = $request->all();
        $this->repository->create($data);
       
       return redirect()->route('products.index');

    }

    public function show($id){
        $product = $this->repository->where('id', $id)->first();

        if(!$product){
            return redirect()->back();
        }

        return view('admin.pages.products.show', [
            'product' => $product
        ]);
    }
    public function delete($id){
        $product = $this->repository->where('id', $id)->first();

        if(!$product){
            return redirect()->back();
        }

        $product->delete();

        return redirect()->route('products.index');

    }
    public function search(Request $request){
        $filters = $request->except('_token');
        $products = $this->repository->search($request->filter);
        return view('admin.pages.products.index', [
            'products' => $products,
            'filters' => $filters,
        ]);
        
    }
    public function edit($id){
        
        
        $product = $this->repository->where('id', $id)->first();
        
        if (!$product){
            return redirect()->back();
        }
        return view('admin.pages.products.edit', [
            'product' => $product
        ]);
        
        
    }
    public function update(StoreUpdateProduct $request, $id){
        $product = $this->repository->where('id', $id)->first();
        if (!$product){
            return redirect()->back();
        }
        
        $product->update($request->all());

        return redirect()->route('products.index');
        
        
        
    }

}
