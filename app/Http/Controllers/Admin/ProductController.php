<?php

namespace App\Http\Controllers\Admin;

use App\Classes\driver\product;
use app\Classes\Search\admin\SearchProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\pagination\pagination;
use App\Classes\ImageUploading\ImageUploading;

class ProductController extends Controller
{
    public function get($page_num)
    {
        $limit = 10;
        $obj_pagination = new pagination("product", $page_num, $limit);
        $product = $obj_pagination->paginate('id');
        $counter_product = $page_num * $limit - $limit;
        if ($product['status'] == '350') {
            return view('admin.product', ['counter_product' => $counter_product, 'product' => $product['data'], 'page_now' => $page_num, 'all_page' => $product['count'], 'active' => 'product']);
        } elseif ($product['status'] == '300') {
            return view('admin.product', ['counter_product' => $counter_product, 'product' => false, 'page_now' => $page_num, 'all_page' => '', 'active' => 'product']);

        } else {
            //error baraye safhe moshke fani
        }
    }

    public function post(Request $request)
    {
        if ($request->ajax()) {
            $status = $request->input('status');
            if ($status == 'delete') {
                $data_title = $request->input('title');
                $data_id = $request->input('id');
                $product = new  Product();
                $img = $product->select_product_id($data_id);
                $del = $product->delete_product($data_title, $data_id);
                if ($del['status'] == '350') {
                    $del_img = new ImageUploading();
                    $del_img = $del_img->delete_Image($img['product']->img);
                    if ($del_img['status'] == '350') {
                        return response()->json(array('status' => true,
                            'msg' => "محصول مورد نظر با`   موفقیت حذف شد."));
                    } else {
                        return response()->json(array('status' => false,
                            'msg' => "تصویر محصول برای حذف یافت نشد لصفا به واحد فنی اطلاع دهید."));
                    }
                } elseif ($del['status'] == '300') {
                    return response()->json(array('status' => false,
                        'msg' => "سیستم قادر به حذف این محصول نیست لصفا به واحد فنی اطلاع دهید."));
                } else {
                    return response()->json(array('status' => false, 'msg' => 'خطایی در سیستم رخ داده است لطفا هر چه سریعتر این موضوع را به بخش فنی گزارش دهید.'));
                }
            } elseif ($status == 'search') {
                $item = $request->input('item');
                $manage = new SearchProduct();
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
