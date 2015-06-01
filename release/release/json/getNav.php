<?php
//设置页面内容是html编码格式是utf-8
header("Content-Type: text/plain;charset=utf-8");
//header("Content-Type: application/json;charset=utf-8");
//header("Content-Type: text/xml;charset=utf-8");
//header("Content-Type: text/html;charset=utf-8");
//header("Content-Type: application/javascript;charset=utf-8");


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    getNav();
}

function getNav(){
            $roleId = $_GET["role"];
            $role = array(
                // {role:"xxx", status:["xxxx","yyy","zzz"]},
                array("role"=>"客户","status"=>array("待用户提交贷款资料")),
                array("role"=>"文员","status"=>array("待提交至银行","待审贷款资料")),
                array("role"=>"征信员","status"=>array("待征信","待征信结果")),
                array("role"=>"家访员","status"=>array("待家访预约")),
                array("role"=>"财务部","status"=>array("待付款")),
                array("role"=>"保险","status"=>array("保险")),
                array("role"=>"银行","status"=>array("待银行确认函"))
            );
            $role_array = array();
            foreach ($role as $value) {
                if ($value["role"] == $roleId) {
                    array_push($role_array,$value);
                    break;
                }
            };
            array_push($role_array,array("role"=>"快速筛选","status"=>array("文员","征信员","家访员")));
            $array = array("res"=>0,"data"=>$role_array);
            echo json_encode($array);
}

?>
