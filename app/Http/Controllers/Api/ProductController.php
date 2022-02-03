<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Api\Father;

class ProductController extends Controller
{

    use Father;
    public function index(){

        $products = Product::all();
       return $this->returnData('تم الحصول علي البيانات بنجاح','المنتجات',$products);

    }

    public function productById(Request $request){

        $products = Product::find($request->id);
        if(!$products){

            return $this->returnDataError('لا يوجد هذا المنتج');
        }
        else{

            return  $this->returnData('تم الحصول علي المنتج','product',$products);


        }
    }

    public function destroy($id){

        $data = Product::find($id);

        if($data){

            return $this->returnData('تم حذف المنتج','product_id',$data->delete());
        }
        else{

            return $this->returnDataError('404 not found');
        }
    }

}
