<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function responseJson($status, $message, $data){
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }
    public function addProduct(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'regular_price'=>'required|numeric',
            'sale_price'=>'required|numeric',
            'size'=>'required',
            'color'=>'required',
            'category'=>'required'
        ]);
        if($validator->fails()){
            return $this->responseJson(422, 'validation error', $validator->errors());
        }
        $input = $validator->validated();
        if($request->hasFile('thumbnail')){
            $file = $request ->file('thumbnail');
            $filename = rand(1,1000).'_'.$file->getClientOriginalName();
            $file->move(public_path('upload'), 'zando'.$filename);
            $input['thumbnail'] = url('upload/zando'.$filename);
        }

        $insert = Product::create($input);
        if($insert){
            return $this->responseJson(201, 'Product added successfully', $insert);
        }else{
            return $this->responseJson(500, 'Product added failed', $insert);
        }
    }

    public function getAllProduct(){
        $product = Product::query()->orderBy('id', 'desc')->get();
        if($product){
            return $this->responseJson(202, 'Get all product successfully', $product);
        }else{
            return $this->responseJson(500, 'Error', $product);
        }
    }
    public function getOneProduct($id){
        $product = Product::query()->find($id); //or we can use this ---- where('id', $id)->get();
        if($product){
            return $this->responseJson(202, 'Get one product successfully', $product);
        }else{
            return $this->responseJson(500, 'Error', $product);
        }
    }

    public function updateProduct(Request $request, $id){
        // check
        $product = Product::findOrFail($id); 
        $validator = Validator::make($request->all(),[ // check id if true input data again
            'name'=>'required',
            'regular_price'=>'required|numeric',
            'sale_price'=>'required|numeric',
            'size'=>'required',
            'color'=>'required',
            'category'=>'required'
        ]);

        if($validator->fails()){
            return $this->responseJson(422, 'validation failed', $validator->errors());
        }
        $input = $validator->validated();
        if($request -> hasFile('thumbnail')){
            $file = $request -> file('thumbnail');
            $filename = rand(1,1000).'_'.$file->getClientOriginalName();
            $file->move(public_path('upload'), 'zando'.$filename);
            $input['thumbnail'] = url('upload/zando'.$filename);
        }else{
            $input['thumbnail'] = $product->thumbnail;
        }
        $update = Product::query()->where('id', $id)->update($input);
        if($update){
            return $this->responseJson(202, 'Update product successfully', $update);
        }else{
            return $this->responseJson(500, 'Update product failed', $update);
        }
    }

    public function deleteProduct($id){
        $delete=Product::query()->where('id',$id)->delete();
        if($delete){
            return $this->responseJson(202,'Delete Product Success',$delete);
        }else{
            return $this->responseJson(404,'Not Found Product',null);
        }
    }


    public function getLimit($limit){
        $limitProduct = Product::query()
        ->orderBy('id', 'DESC')
        ->limit($limit)
        ->get();
        if($limitProduct){
            return $this->responseJson(202,'Get Product Limit Success',$limitProduct);
        }else{
            return $this->responseJson(404,'Not Found Product',null);
        }
    }

    public function getByCategory($cate){
        $productsByCate=Product::query()->where('category',$cate)->get();
        if($productsByCate){
            return $this->responseJson(202,'Get Product Limit Success',$productsByCate);
        }else{
            return $this->responseJson(404,'Not Found Product',null);
        }
    }
    
    public function searchByName($search){
        $productsSearch=Product::query()->where('name','LIKE',"%{$search}%")->get();
        if($productsSearch){
            return $this->responseJson(202,'Get Product Limit Success',$productsSearch);
        }else{
            return $this->responseJson(404,'Not Found Product',null);
        } 
    }
}
