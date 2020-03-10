<?php

namespace ESMS\ESMS;

use GuzzleHttp\Client;

class ESMS
{
    public function sendSMS($phone, $content, $apiKey, $secretKey, $isUnicode, $brandName = [], $smsType)
    {
        $baseUrl = 'http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?';
        $client = new Client([
            'base_uri' => $baseUrl . 'Phone=' . $phone . '&Content='
                . $content . '&ApiKey=' . $apiKey . '&SecretKey=' . $secretKey
                . '&IsUnicode=' . $isUnicode . '&Brandname=' . $brandName . '&SmsType=' . $smsType,

            'timeout'  => 2.0,
        ]);
        return $client->request('GET');
    }
}
