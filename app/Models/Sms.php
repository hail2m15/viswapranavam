<?php

/*
 * Project by teamCandlelight
 * Developed by Nandu R Nair(8157066844) * 
 */

namespace Models;

/**
 * Description of Sms
 *
 * @author Nandu
 */
use Helpers\SimpleCurl as cURL;

class Sms {

    private $key = '5a6ee8244a675876a212d0bed7ca18';
    private $request = array(
        'senderId' => 'ALSNTS',
        'routeId' => '1',
        'smsContentType' => 'english',
        'signature' => ''
    );

    public static function balance() {
        $data = array(
            'AUTH_KEY' => '5a6ee8244a675876a212d0bed7ca18'
        );
        $res = cURL::get('http://mysms.sms7.biz/rest/services/sendSMS/getClientRouteBalance', $data);
        $res = json_decode($res);
        $res = $res[0]->routeBalance;
        return $res;
    }

    public function sentOne($number, $message) {
        $data = $this->request;
        $data['smsContent'] = $message;
        $data['mobileNumbers'] = $number;
        $data = json_encode($data);
        $res = cURL::post('http://sms.teamcandlelight.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=' . $this->key, $data);
        //echo $data;
        //echo $res;
        return json_decode($res);
    }

    public function sentMany($numbers, $message, $joined = false) {
        if (!$joined) {
            foreach ($numbers as $n) {
                $n = substr(trim($n), -10);
            }
            $numbers = join(',', $numbers);
        }
        $data = $this->request;
        $data['smsContent'] = $message;
        $data['mobileNumbers'] = $numbers;
        $data = json_encode($data);
        //echo $data;
        $res = cURL::post('http://sms.teamcandlelight.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=' . $this->key, $data);
        //echo $res;
        return json_decode($res);
    }

}
