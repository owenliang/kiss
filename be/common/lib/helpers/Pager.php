<?php
/**
 * Created by PhpStorm.
 * User: smzdm
 * Date: 2018/2/7
 * Time: 下午1:45
 */

namespace common\lib\helpers;


class Pager
{
    public static function calc($page, $size, $count, $total) {
        $data = [];
        if ($page > 1) {
            $data['prev_page'] = $page - 1;
        }

        $current = ($page - 1) * $size + $count;
        if ($current < $total) {
            $data['next_page'] = $page + 1;
        }
        return $data;
    }
}