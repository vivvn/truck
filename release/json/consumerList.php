<?php
//设置页面内容是html编码格式是utf-8
header("Content-Type: text/plain;charset=utf-8");
//header("Content-Type: application/json;charset=utf-8");
//header("Content-Type: text/xml;charset=utf-8");
//header("Content-Type: text/html;charset=utf-8");
//header("Content-Type: application/javascript;charset=utf-8");


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    getList();
}

function getList(){
            $roleId = $_GET["role"];
            $days = $_GET["days"];
            $status = $_GET["status"];
            $list = array(
                // userId:999,
                // userName:"陈小宝",
                // sex:0,
                // phone:13688888888,
                // idNum:329294897562948290,
                // email:"czb@163.com",
                // status:"待征信"
                array("orderId"=>1,"userId"=>999,"userName"=>"王小宝","sex"=>0,"phone"=>13688888888,"idNum"=>329294897562948290,
                    "email"=>"czb@163.com","status"=>"待征信","role"=>"征信员","days"=>1),
                array("orderId"=>1,"userId"=>999,"userName"=>"伟小宝","sex"=>0,"phone"=>13688888888,"idNum"=>329294897562948290,
                    "email"=>"czb@163.com","status"=>"待征信","role"=>"征信员","days"=>3),
                array("orderId"=>1,"userId"=>999,"userName"=>"周小宝","sex"=>0,"phone"=>13688888888,"idNum"=>329294897562948290,
                    "email"=>"czb@163.com","status"=>"待征信","role"=>"征信员","days"=>5),
                array("orderId"=>1,"userId"=>999,"userName"=>"吴小宝","sex"=>0,"phone"=>13688888888,"idNum"=>329294897562948290,
                    "email"=>"czb@163.com","status"=>"文员","role"=>"文员","days"=>1),
                array("orderId"=>1,"userId"=>999,"userName"=>"王小宝","sex"=>0,"phone"=>13688888888,"idNum"=>329294897562948290,
                    "email"=>"czb@163.com","status"=>"文员","role"=>"文员","days"=>3),
                array("orderId"=>1,"userId"=>999,"userName"=>"伟小宝","sex"=>0,"phone"=>13688888888,"idNum"=>329294897562948290,
                    "email"=>"czb@163.com","status"=>"家访员","role"=>"家访员","days"=>1),
                array("orderId"=>1,"userId"=>999,"userName"=>"周小宝","sex"=>0,"phone"=>13688888888,"idNum"=>329294897562948290,
                    "email"=>"czb@163.com","status"=>"财务部","role"=>"财务部","days"=>1),
                array("orderId"=>1,"userId"=>999,"userName"=>"吴小宝","sex"=>0,"phone"=>13688888888,"idNum"=>329294897562948290,
                    "email"=>"czb@163.com","status"=>"保险","role"=>"保险","days"=>1),
                array("orderId"=>1,"userId"=>999,"userName"=>"吴小宝","sex"=>0,"phone"=>13688888888,"idNum"=>329294897562948290,
                    "email"=>"czb@163.com","status"=>"银行","role"=>"银行","days"=>1),
                array("orderId"=>1,"userId"=>999,"userName"=>"吴小宝","sex"=>0,"phone"=>13688888888,"idNum"=>329294897562948290,
                    "email"=>"czb@163.com","status"=>"客户","role"=>"客户","days"=>1),
            );
            $role_array = isArg($roleId, "role", $list);
            $role_array1 = isArg($days, "days", $role_array);
            $role_array2 = isArg($status, "status", $role_array1);
            $array = array("res"=>0,"data"=>$role_array2);
            echo json_encode($array);
};

function isArg($getArg, $arg, $list){
        $role_array = array();
        if($getArg == ""){
            $role_array = $list;
        }else{
            foreach ($list as $value) {
                if ($value[$arg] == $getArg) {
                    array_push($role_array,$value);
                }
            }
        }
        return $role_array;
};
?>
