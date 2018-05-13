<?php

namespace App\Http\Controllers\Admin;

use App\Classes\driver\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\pagination\pagination;

class CategoryController extends Controller
{
    public function get($page_num)
    {
        $limit = 10;
        $obj_pagination = new pagination("category", $page_num, $limit);
        $category = $obj_pagination->paginate('id');
        $counter_category = $page_num * $limit - $limit;
        if ($category['status'] == '350') {
            return view('admin.category', ['counter_category' => $counter_category, 'category' => $category['data'], 'page_now' => $page_num, 'all_page' => $category['count'], 'active' => 'category']);
        } elseif ($category['status'] == '300') {
            return view('admin.category', ['counter_category' => $counter_category, 'category' => false, 'page_now' => $page_num, 'all_page' => '', 'active' => 'category']);

        } else {
            //error baraye safhe moshke fani
        }
    }
    
    
    public function post(Request $request)
    {
        if ($request->ajax()) {
            $status = $request->input('status');
            if ($status == 'delete') {
                $data_name = $request->input('name');
                $data_id = $request->input('id');
                $category = new  category();
                $img = $category->select_category_id($data_id);
                $del = $category->delete_category($data_name, $data_id);
                if ($del['status'] == '350') {
                    return response()->json(array('status' => true,
                        'msg' => "دسته بندی مورد نظر با موفقیت حذف شد."));
                } elseif ($del['status'] == '300') {
                    return response()->json(array('status' => false,
                        'msg' => "سیستم قادر به حذف این دسته بندی نیست لصفا به واحد فنی اطلاع دهید."));
                } else {
                    return response()->json(array('status' => false, 'msg' => 'خطایی در سیستم رخ داده است لطفا هر چه سریعتر این موضوع را به بخش فنی گزارش دهید.'));
                }
            } elseif ($status == 'search') {
                $item = $request->input('item');
                $manage = new Searchcategory();
                $search = $manage->search($item);
                if ($search['status'] == '350') {
                    return response()->json(array('status' => true,
                        'data' => $search['search']));
                } else if ($search['status'] == '300') {
                    return response()->json(array('status' => false));
                } else {
                    return response()->json(array('status' => false, 'msg' => 'خطایی در سیستم رخ داده است لطفا هر چه سریعتر این موضوع را به بخش فنی گزارش دهید.'));
                }
            }
        }
    }
}
