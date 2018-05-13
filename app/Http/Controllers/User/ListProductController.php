<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\driver\Category;
use App\Classes\pagination\pagination;

class ListProductController extends Controller
{
    public function get($page_num){
        $limit = 20;
        $obj_pagination = new pagination("product", $page_num, $limit);
        $product = $obj_pagination->paginate('id');
        $counter_product = $page_num * $limit - $limit;
        $manage_category = new  Category();
        $res = $manage_category->get_jstree_category();
        $jstree_data = json_encode($res['data']);
        if ($res['status'] == '400' and $product['status']) {
            //moshkele fani
        } elseif ($res['status'] == '350' and $product['status']) {
            return view('user.list-product', ['active' => 'list-product', 'list_jstree_category' => $jstree_data,'counter_product' => $counter_product, 'product' => $product['data'], 'page_now' => $page_num, 'all_page' => $product['count']]);
        }else{
            return view('user.list-product', ['active' => 'list-product', 'list_fa_category' => false,'counter_product' => $counter_product, 'product' => false, 'page_now' => $page_num, 'all_page' => '']);
        }
    }
}
