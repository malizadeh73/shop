<?php

namespace App\Http\Controllers\Admin;

use app\Classes\pagination\pagination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\ImageUploading\ImageUploading;
use App\Classes\driver\Product;
use App\Classes\driver\Category;

class ProductNewController extends Controller
{
    public function get(){
        $manage_category = new  Category();
        $res = $manage_category->get_jstree_category();
        if ($res['status'] == '400') {
            //moshkele fani
        } elseif ($res['status'] == '350') {
            $x = json_encode($res['data']);
            return view('admin.product_new', ['active' => 'product-new', 'list_jstree_category' => $x]);
        }else{
            return view('admin.product_new', ['active' => 'product-new', 'list_fa_category' => false]);
        }
    }

    public function post(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            if (empty($data['name']) or empty($data['code']) or empty($data['price']) or empty($data['off']) or empty($data['content'])) {
                return response()->json(array('status'=>false,'msg'=>'لصفا فیلد های مربوطه را پر کنید.'));
            }elseif (empty($data['category'])){
                return response()->json(array('status'=>false,'msg'=>'دسته محصول انتخاب نشده است.'));
            } else {
                $product = new product($data['name'], $data['code'], $data['price'],$data['off'],$data['content'],$data['category']);
                $status = $product->check_product();
                if ($status['status'] == '350') {
                    if (empty($data['file'])) {
                        $img = null;
                        $product = $product->insert_product($img);
                        if ($product['status'] == '350'){
                            return response()->json(array('status'=>true,
                                'msg'=>"محصول مورد نظر با عنوان «".$product['name_product']."» ودر تاريخ «".$product['publish_date']."» ثبت گرديد."));
                        }
                        else{
                            return response()->json(array('status'=>false,'msg'=>'خطایی در سیستم رخ داده است لطفا هر چه سریعتر این موضوع را به بخش فنی گزارش دهید'));
                        }
                    } else {
                        $img = new ImageUploading($data['file'], 'media/product', true);
                        $img = $img->setImage();
                        if($img['status'] == true){
                            $product = $product->insert_product($img['name_file']);
                            if ($product['status'] == '350'){
                                return response()->json(array('status'=>true,
                                    'msg'=>"محصول مورد نظر با عنوان «".$product['name_product']."» ودر تاريخ «".$product['publish_date']."» ثبت گرديد."));
                            }
                            else{
                                return response()->json(array('status'=>false,'msg'=>'خطایی در سیستم رخ داده است لطفا هر چه سریعتر این موضوع را به بخش فنی گزارش دهید'));
                            }
                        }else{
                            return response()->json(array('status'=>false,'msg'=>'فرمت تصویر محصول با فرمت قراردادی سازگار نیست.'));
                        }

                    }

                } elseif ($status['status'] == '300') {
                    return response()->json(array('status'=>false,'msg'=>'این محصول قبلا ثبت شده است.'));
                } else {
                    return response()->json(array('status'=>false,'msg'=>'خطایی در سیستم رخ داده است لطفا هر چه سریعتر این موضوع را به بخش فنی گزارش دهید.'));
                }
            }
        }
    }
}
