<?php

namespace App\Http\Controllers;
use App\Repository\IProductRepository;
use Illuminate\Http\Request;
use App\Models\Product;

class ItemController extends Controller
{
    public $product;
    public function __construct(IProductRepository $product)
    {
        $this->product=$product;
    }

    public function index(){
         $product=$this->product->getAllProducts();

       return view('product.index')->with('products',$product);
    }
    public function getData(Request $request){
        if ($request->ajax()) {
             //$datas = Product::all();
             $product=$this->product->getAllProducts();
             return datatables()->of($product)->toJson();
         }        
         return view('product.show');
     }
    
    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
         $request->validate([
            'title'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);
        $data=$request->all();
        $this->product->createProduct($data);
        return redirect('/products');
    }
    public function edit($id){
        $product=$this->product->editProduct($id);
        return view('product.edit')->with('products',$product);
    }
    public function update($id, Request $request){
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);
        $data=$request->all();
        $this->product->updateProduct($id,$data);
        return redirect('/products');
    }
    
    public function destroy($id)
    {
        $product=$this->product->deleteProduct($id);
        return redirect('/products');
    }

}
