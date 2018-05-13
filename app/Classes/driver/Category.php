<?php

namespace App\Classes\driver;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Classes\date\Custom_date;

class Category
{
    private $name;
    private $parent_name;

    function __construct($name = null, $parent_name = null)
    {
        $this->name = $name;
        $this->parent_name = $parent_name;
    }

    public function count_category()
    {
        try {
            $count = DB::table('category')->count();
            return (array('status' => '350', 'count_category' => $count));
        } catch (Exception $e) {
            return (array('status' => '400'));
        }
    }

    public function check_category()
    {
        try {
            $check = DB::table('category')->where('name', $this->name)->orwhere('parent_name', $this->parent_name)->get();
            if ($check->isEmpty()) {
                return (array('status' => '350'));
            } else {
                return (array('status' => '300'));
            }

        } catch (Exception $e) {
            return (array('status' => '400'));
        }

    }
    public function select_all()
    {
        try {
            $select = DB::table('category')->get();
            if (empty($select)){
                return (array('status' => '300'));
            }else{
                return (array('status' => '350', 'category' => $select));
            }
        } catch (Exception $e) {
            return (array('status' => '400'));
        }

    }

    public function get_jstree_category()
    {
        try {
            $fa_category = DB::table('category')->get();
            if ($fa_category->isEmpty()) {
                return (array('status' => '300'));
            } else {
                $jstree = [];
                foreach($fa_category as $one_category){
                    array_push($jstree,array('id'=> $one_category->id, 'parent'=> ($one_category->parent_name != null)?$one_category->parent_name:'#', 'text'=> $one_category->name));
                }
                return (array('status' => '350', 'data' => $jstree));
            }
        } catch (Exception $e) {
            return (array('status' => '400'));
        }
    }

    public function select_category_id($id)
    {
        $check = $this->check_category_id($id);
        if ($check['status'] == '300') {
            try {
                $select = DB::table('category')->where('id', $id)->get();
                $select = $select[0];
                return (array('status' => '350', 'category' => $select));
            } catch (Exception $e) {
                return (array('status' => '400'));

            }

        } elseif ($check['status'] == '350') {
            return (array('status' => '300'));
        }


    }

    public function check_category_id($id)
    {
        try {
            $check = DB::table('category')->where('id', $id)->get();
            if ($check->isEmpty()) {
                return (array('status' => '350'));
            } else {
                return (array('status' => '300'));

            }

        } catch (Exception $e) {
            return (array('status' => '400'));
        }
    }

    public function delete_category($name, $id)
    {
        try {
            $del = DB::table('category')->where('name', $name)->where('id', $id)->delete();
            if ($del == 1) {
                return (array('status' => '350'));
            } else {
                return (array('status' => '300'));
            }
        } catch (Exception $e) {
            return (array('status' => '400'));
        }
    }

    public function insert_category()
    {

        try {
            if ($this->parent_name == 'parent'){
                DB::table('category')->insert(
                    ['name' => $this->name, 'parent_name' => null]
                );
            }else{
                $this->parent_name = (int)$this->parent_name;
                DB::table('category')->insert(
                    ['name' => $this->name, 'parent_name' => $this->parent_name]
                );
            }
            return (array('status' => '350', 'category_name' => $this->name));

        } catch (Exception $e) {
            return (array('status' => '400'));
        }


//        DB::table('category')->insert(
//            ['name' => $this->name, 'parent_name' => $this->parent_name]
//        );
//        return (array('status' => '350', 'category_name' => $this->name));
    }
}