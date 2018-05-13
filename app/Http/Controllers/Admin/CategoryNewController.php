<?php

namespace App\Http\Controllers\Admin;

use App\Classes\driver\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryNewController extends Controller
{
    public function get(){
        $manage_category = new  Category();
        $all_category = $manage_category->select_all(true);
        if ($all_category['status'] == '400') {
            //moshkele fani
        } elseif ($all_category['status'] == '350') {
            return view('admin.category_new', ['active' => 'category-new', 'list_category' => $all_category]);
        }else{
            return view('admin.category_new', ['active' => 'category-new', 'list_category' => false]);
        }
    }

    public function post(Request $request)
    {
        if ($request->ajax()) {
            $data_name = $request->input('name');
            $data_parent_id = $request->input('parent_id');
            if (empty($data_name) or empty($data_parent_id)) {
                return response()->json(array('status'=>false,'msg'=>'لصفا فیلد های مربوطه را پر کنید.'));
            } else {
                $category = new Category($data_name, $data_parent_id);
                $status = $category->check_category();
                if ($status['status'] == '350') {
                    $category_ = $category->insert_category();
                    if ($category_['status'] == '350'){
                        return response()->json(array('status'=>true,
                            'msg'=>"دسته مورد نظر با عنوان «".$category_['category_name']."»  ثبت گرديد."));
                    }
                    else{
                        return response()->json(array('status'=>false,'msg'=>'خطایی در سیستم رخ داده است لطفا هر چه سریعتر این موضوع را به بخش فنی گزارش دهید'));
                    }
                } elseif ($status['status'] == '300') {
                    return response()->json(array('status'=>false,'msg'=>'این دسته قبلا ثبت شده است.'));
                } else {
                    return response()->json(array('status'=>false,'msg'=>'خطایی در سیستم رخ داده است لطفا هر چه سریعتر این موضوع را به بخش فنی گزارش دهید.'));
                }


            }

        }

    }
}
