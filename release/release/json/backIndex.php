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
            $cust = array(
                    array("role"=>"客户","days"=>1,"qty"=>3),
                    array("role"=>"文员","days"=>1,"qty"=>3),
                    array("role"=>"征信员","days"=>1,"qty"=>3),
                    array("role"=>"家访员","days"=>1,"qty"=>3),
                    array("role"=>"财务部","days"=>1,"qty"=>3),
                    array("role"=>"保险","days"=>1,"qty"=>3),
                    array("role"=>"银行","days"=>1,"qty"=>3),

                    array("role"=>"客户","days"=>3,"qty"=>3),
                    array("role"=>"文员","days"=>3,"qty"=>3),
                    array("role"=>"征信员","days"=>3,"qty"=>3),
                    array("role"=>"家访员","days"=>3,"qty"=>3),
                    array("role"=>"财务部","days"=>3,"qty"=>3),
                    array("role"=>"保险","days"=>3,"qty"=>3),
                    array("role"=>"银行","days"=>3,"qty"=>3),

                    array("role"=>"客户","days"=>5,"qty"=>3),
                    array("role"=>"文员","days"=>5,"qty"=>3),
                    array("role"=>"征信员","days"=>5,"qty"=>3),
                    array("role"=>"家访员","days"=>5,"qty"=>3),
                    array("role"=>"财务部","days"=>5,"qty"=>3),
                    array("role"=>"保险","days"=>5,"qty"=>3),
                    array("role"=>"银行","days"=>5,"qty"=>3),

                    array("role"=>"客户","days"=>6,"qty"=>3),
                    array("role"=>"文员","days"=>6,"qty"=>3),
                    array("role"=>"征信员","days"=>6,"qty"=>3),
                    array("role"=>"家访员","days"=>6,"qty"=>3),
                    array("role"=>"财务部","days"=>6,"qty"=>3),
                    array("role"=>"保险","days"=>6,"qty"=>3),
                    array("role"=>"银行","days"=>6,"qty"=>3),
            );
            $array = array("res"=>0,"data"=>$cust);
            echo json_encode($array);
}

?>
