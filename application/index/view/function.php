<?php


function http_request($rqUri,$method='GET',$data='')
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://".$rqUri); //定义请求地址
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method); //定义请求类型
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);//定义是否直接输出返回流
    if(!empty($data)){
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //定义提交的数据
    }
    $res = curl_exec($ch);
    curl_close($ch);//关闭
    return $res;
}


//通过服务名称匹配活跃的服务
function getService($service,$serviceName){
    $address=[];
    foreach ($service as $key=>$v){
        foreach ($v['Checks'] as $k=>$c){
            //判断是否是活跃的,并且名称是想要查询的服务
            if($c['ServiceName']==$serviceName && $c['Status']=='passing'){
                $address[]=$v['Service']['Address'].':'.$v['Service']['Port'];
            }
        }
    }
    return $address;
}