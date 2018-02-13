<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/13 0013
 * Time: 19:55
 */

namespace common\lib\helpers;


class Crontab
{
    /**
     * 保存起来避免被php作为垃圾回收
     * @var null
     */
    static $file_lock = null;

    /**
     * 确保任务没有并发执行
     */
    public static function isRunning() {
        global $argv;

        $ident = [];
        foreach ($argv as $idx => $value) {
            $ident[] = $idx . '=' . urlencode($value);
        }
        $ident = md5(implode('&', $ident));

        $lockDir = \Yii::getAlias('@app/runtime/crontab/');

        @mkdir($lockDir, 0755, true);

        self::$file_lock = fopen($lockDir . $ident, 'w+');

        $wouldBlock = 0;
        flock(self::$file_lock, LOCK_EX | LOCK_NB, $wouldBlock);

        return $wouldBlock;
    }
}