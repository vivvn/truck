<?php
//设置页面内容是html编码格式是utf-8
header("Content-Type: text/plain;charset=utf-8");
//header("Content-Type: application/json;charset=utf-8");
//header("Content-Type: text/xml;charset=utf-8");
//header("Content-Type: text/html;charset=utf-8");
//header("Content-Type: application/javascript;charset=utf-8");


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    search();
}
function search(){
    //     data { "res":0, "data":[
    // {orderId:999, status:"xxxx"},
    // {orderId:999, status:"xxxx"},
    // {orderId:999, status:"xxxx"},
    // ]}
            $data = array(
                    array("orderId"=>111,"status"=>"您提交的基本信息，我们将用于查询您的个人征信情况，过程大约要1个工作日，请您耐心等候。"),
                    array("orderId"=>111,"status"=>"您的征信结果良好，您可以办理贷款。"),
                    array("orderId"=>111,"status"=>"请您准备好贷款所需要的材料，上传所需要材料的照片，并且预约我们工作人员上门收取材料的时间。后台审核通过后会通知您，并上门收取材料。"),
                    array("orderId"=>111,"status"=>"未开始"),
                    array("orderId"=>111,"status"=>"未开始"),
                    array("orderId"=>111,"status"=>"未开始"),
                    array("orderId"=>111,"status"=>"未开始"),
                    array("orderId"=>111,"status"=>"未开始"),
            );
            $array = array("res"=>0,"data"=>$data,"num"=>2);
            echo json_encode($array);
}

?>
