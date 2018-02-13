<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/13 0013
 * Time: 19:45
 */

namespace common\service;

use common\models\Temp;

class TempService
{
    const GC_PERIOD = 300; // 清理5分钟前的打点记录

    public static function capture() {
        $temp = file_get_contents('/sys/class/thermal/thermal_zone0/temp');
        $temp = trim($temp);

        if (!empty($temp)) {
            Temp::saveTemp($temp);
        }
    }

    public static function gc() {
        $olderThan = date('Y-m-d H:i:s', time() - self::GC_PERIOD);
        Temp::gcTemp($olderThan);
    }
}