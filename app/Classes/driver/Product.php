<?php

namespace App\Classes\driver;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Classes\date\Custom_date;

class product
{
    private $name;
    private $code;
    private $price;
    private $off;
    private $content;
    private $category;

    function __construct($name = null, $code = null, $price = null, $off = null, $content = null,$category = null)
    {
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->off = $off;
        $this->content = $content;
        $this->category = $category;
    }

    public function count_product()
    {
        try {
            $count = DB::table('product')->count();
            return (array('status' => '350', 'count_product' => $count));
        } catch (Exception $e) {
            return (array('status' => '400'));
        }
    }

    public function check_product()
    {
        try {
            $check = DB::table('product')->where('name', $this->name)
                ->orwhere('code', $this->code)->get();
            if ($check->isEmpty()) {
                return (array('status' => '350'));
            } else {
                return (array('status' => '300'));

            }

        } catch (Exception $e) {
            return (array('status' => '400'));
        }

    }

    public function check_update_product($id)
    {
        try {
            $check = DB::table('product')->whereNotIn('id', [$id])->get();
            if ($check->isEmpty()) {
                return (array('status' => '350'));
            } else {
                foreach ($check as $item) {
                    if ($item->code == $this->code or $item->price == $this->price or $item->name == $this->name or $item->off == $this->off or $item->content == $this->content) {
                        return (array('status' => '300'));
                    } else {
                        return (array('status' => '350'));
                    }
                }


            }

        } catch (Exception $e) {
            return (array('status' => '400'));
        }

    }

    public function check_product_id($id)
    {
        try {
            $check = DB::table('product')->where('id', $id)->get();
            if ($check->isEmpty()) {
                return (array('status' => '350'));
            } else {
                return (array('status' => '300'));

            }

        } catch (Exception $e) {
            return (array('status' => '400'));
        }
    }

    public function insert_product($img)
    {
        try {
            $today_time = new Custom_date();
            DB::table('product')->insert(
                ['name' => $this->name, 'code' => $this->code,
                    'price' => $this->price,'off' => $this->off,'content' => $this->content, 'publish_date' => $today_time->today_time(), 'score' => 0, 'sell_count' => 0, 'img' => $img,'category_id' => $this->category]
            );
            return (array('status' => '350', 'publish_date' => $today_time->today_time(), 'name_product' => $this->name));

        } catch (Exception $e) {
            return (array('status' => '400'));
        }

    }

    public function select_product()
    {
        $check = $this->check_product();
        if ($check['status'] == '300') {
            try {
                $select = DB::table('product')->where('name', $this->name)->get();
                $select = $select[0];
                if ($select->img != null) {
                    $select->img = "media/product/" . $select->img;
                }
                return (array('status' => '350', 'product' => $select));
            } catch (Exception $e) {
                return (array('status' => '400'));

            }
        } elseif ($check['status'] == '350') {
            return (array('status' => '300'));
        }

    }

    public function select_product_id($id)
    {
        $check = $this->check_product_id($id);
        if ($check['status'] == '300') {
            try {
                $select = DB::table('product')->where('id', $id)->get();
                $select = $select[0];
                if ($select->img != null) {
                    $select->img = "media/product/" . $select->img;
                }
                return (array('status' => '350', 'product' => $select));
            } catch (Exception $e) {
                return (array('status' => '400'));

            }

        } elseif ($check['status'] == '350') {
            return (array('status' => '300'));
        }


    }

    public function get_all_limit($number)
    {
        try {
            $select = DB::table('product')->limit($number)->get();

            foreach ($select as $one_select) {
                if ($one_select->img != null) {
                    $one_select->img = "media/product/" . $one_select->img;
                }
            }
            return (array('status' => '350', 'product' => $select));
        } catch (Exception $e) {
            return (array('status' => '400'));

        }
    }

    public function update_product($id, $img)
    {
        if ($img == null) {
            try {
                DB::table('product')
                    ->where('id', $id)
                    ->update(['name' => $this->name, 'code' => $this->code, 'price' => $this->price, 'off' => $this->off, 'content' => $this->content]);
                return (array('status' => '350'));

            } catch (Exception $e) {
                return (array('status' => '400'));
            }
        } else {
            try {
                DB::table('product')
                    ->where('id', $id)
                    ->update(['name' => $this->name, 'code' => $this->code, 'price' => $this->price, 'off' => $this->off, 'content' => $this->content, 'img' => $img]);
                return (array('status' => '350'));

            } catch (Exception $e) {
                return (array('status' => '400'));
            }

        }
    }

    public function delete_product($name, $id)
    {
        try {
            $del = DB::table('product')->where('name', $name)->where('id', $id)->delete();
            if ($del == 1) {
                return (array('status' => '350'));
            } else {
                return (array('status' => '300'));
            }
        } catch (Exception $e) {
            return (array('status' => '400'));
        }
    }

}