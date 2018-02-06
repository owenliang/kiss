<?php
namespace common\lib\helpers;

final class HttpRequest {
    /**
     * HTTP调用
     * @param $url
     * @param array $getData
     * @param array $postData
     * @param string $returnType
     * @param int $timeout
     * @return mixed
     */
    public static function curlRequest($url, $getData = [], $postData = [], $returnType = 'JSON', $timeout = 1500) {
        if (!empty($getData)) {
            $url .= '?' . http_build_query($getData);
        }

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, $timeout);
        curl_setopt($ch, CURLOPT_TIMEOUT_MS, $timeout);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        if (!empty($postData)) {
            $isForm = false;
            if (is_array($postData)) {
                $postData = http_build_query($postData);
                $isForm = true;
            }
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
            if (!$isForm) {
                curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/octet-stream']);
            }
        }

        $result = curl_exec($ch);
        curl_close($ch);

        $returnType = strtoupper($returnType);
        if ($returnType == 'JSON') {
            $result = json_decode($result, true);
        }
        return $result;
    }
}