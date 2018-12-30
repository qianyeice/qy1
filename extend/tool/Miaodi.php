<?php
namespace tool;

use think\Controller;
use think\Session;

class Miaodi extends Controller
{
    //秒嘀配置
    const URL = "https://api.miaodiyun.com/20150822/industrySMS/sendSMS";
    const TOKEN= "36eaefc79ab248cebe156618e8e41e1c";
    const SID= "4ad942fff56e46e0a9727eb9f80c24f1";
    const MUBAN1='628735018';
    /**
     * 发送POST请求
     * auth: Lee E-mail: encircles@163.com
     * @param $url
     * @param null $data
     * @return mixed
     */
    public static function https_request($url, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        if (!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

    /**
     * auth: Lee E-mail: encircles@163.com
     * @param $to 可以是字符串 ‘,’号相隔
     * @param $content
     * @param $param 根据content占位符个数传参
     * @return int
     */
    public static function sendSMS($phone,$cody)
    {
        $url=self::URL;
        $token=self::TOKEN;
        $sid=self::SID;
        $muban=self::MUBAN1;
        $time=date("YmdHis",time());
        $sig=md5($sid.$token.$time);
        $json =self::https_request($url,"accountSid=$sid&smsContent=【笼联社区】亲，你好！您的验证码为".$cody."，请不要给别人哦!!&to=$phone&timestamp=$time&sig=$sig");
        $arr = json_decode($json, true);
        return $arr;
    }
}