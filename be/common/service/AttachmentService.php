<?php
/**
 * Created by PhpStorm.
 * User: smzdm
 * Date: 2018/2/7
 * Time: 下午4:24
 */

namespace common\service;


class AttachmentService
{
    static $validExt = [
        'jpg' => true,
        'jpeg' => true,
        'jpe' => true,
        'gif' => true,
        'png' => true,
        'bmp' => true,
    ];

    private static function path($filename) {
        return  '/upload/' . substr($filename, 0, 2) . '/' . substr($filename, 2, 2) . '/' ;
    }

    public static function upload() {
        reset($_FILES);
        $file = current($_FILES);

        if ($file['error'] || !is_uploaded_file($file['tmp_name'])) {
            goto FAIL;
        }

        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        if (empty($ext) || !isset(self::$validExt[$ext])) {
            goto FAIL;
        }

        $content = file_get_contents($file['tmp_name']);

        $filename = md5($content) . '.' . $ext;

        $path = self::path($filename);

        $dir = \Yii::getAlias("@app/web")  . $path;

        @mkdir($dir, 0777, true);

        $dest = $dir . $filename;

        if (!move_uploaded_file($file['tmp_name'], $dest)) {
            goto FAIL;
        }

        return $path . $filename;

        FAIL:
        return false;
    }
}