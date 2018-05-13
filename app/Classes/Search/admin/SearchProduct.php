<?php
/**
 * Created by PhpStorm.
 * User: Mahdi
 * Date: 26/02/2018
 * Time: 05:19 PM
 */

namespace app\Classes\Search\admin;


use Illuminate\Support\Facades\DB;

class SearchProduct
{
    public function search($item){
        try {
            $search = DB::table('product')->where('name','LIKE','%'.$item.'%')->orwhere('publish_date','LIKE','%'.$item.'%')->orderBy('id', 'desc')->get();
            if ($search->isEmpty()) {
                return (array('status' => '300'));
            } else {
                return (array('status' => '350','search'=> $search));
            }
        } catch (Exception $e) {
            return (array('status' => '400'));
        }
    }
}