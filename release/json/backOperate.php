<?php
//设置页面内容是html编码格式是utf-8
header("Content-Type: text/plain;charset=utf-8");
//header("Content-Type: application/json;charset=utf-8");
//header("Content-Type: text/xml;charset=utf-8");
//header("Content-Type: text/html;charset=utf-8");
//header("Content-Type: application/javascript;charset=utf-8");


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    getOperate();
}else if($_SERVER["REQUEST_METHOD"] == "POST"){
    resposeStatus();
}

function getOperate(){
            $roleId = $_GET["orderId"];
            $baseInfo = array(
                "orderId"=>1,
                "userId"=>99,
                "userName"=>"吴小宝",
                "phone"=>13688888888,
                "information1"=>"客户资料1",
                "information2"=>"客户资料2",
                "information3"=> "客户资料2",
            );
            $loanInfo = array(
                "companyName"=> "公司1",
                "licence"=> "营业执照",
                "delegate"=> "法人代表",
                "cInformation1"=> "公司资料1",
                "cInformation2"=> "公司资料2"
            );
            $flow = array(
                array("status"=>"待征信","msg"=>"","uby"=>"Mark","utime"=>"2015.04.06"),
                array("status"=>"待征信结果","msg"=>"","uby"=>"Jacob","utime"=>"2015.04.07"),
                array("status"=>"待用户提交贷款资料","msg"=>"","uby"=>"Larry","utime"=>"2015.04.08"),
            );
            $attach = array(
                array("att_id"=>1, "url"=>"imgs/car1.jpg", "utime"=>"2015.04.06", "title"=>"身份证", "appr"=>0, "userId"=>99,"aby"=>"Mark"),
                array("att_id"=>2, "url"=>"imgs/car4.jpg", "utime"=>"2015.04.07", "title"=>"营业执照", "appr"=>1,"userId"=>99, "aby"=>"Mark"),
                array("att_id"=>3, "url"=>"imgs/car3.jpg", "utime"=>"2015.04.08", "title"=>"公司法人代表", "appr"=>0, "userId"=>99,"aby"=>"Mark"),
            );
            $array = array("baseInfo"=>$baseInfo,"loanInfo"=>$loanInfo,"flow"=>$flow,"attach"=>$attach);
            echo json_encode($array);
}
function resposeStatus(){
         $orderId = $_POST["orderId"];
         $array = array(
              "res"=>0,
              "msg"=>"更新状态成功"
        );
         echo json_encode($array);
}
?>

