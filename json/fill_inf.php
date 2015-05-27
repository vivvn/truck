<?php
//设置页面内容是html编码格式是utf-8
header("Content-Type: text/plain;charset=utf-8");
//header("Content-Type: application/json;charset=utf-8");
//header("Content-Type: text/xml;charset=utf-8");
//header("Content-Type: text/html;charset=utf-8");
//header("Content-Type: application/javascript;charset=utf-8");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    post_form();
}
function post_form(){
            $city = $_POST["city"];
            $userName = $_POST["userName"];
			$num_id = $_POST["num_id"];
            $phone = $_POST["phone"];			
            $check_code = $_POST["reviewCode"];
            $file1 = $_FILES["file1"];
            $file2 = $_FILES["file2"];
            $result = array(
                "city"=>$city,
                "phone"=>$phone,
                "num_id"=>$num_id,
                "check_code"=>$check_code,
                "username"=>$userName,
                "file1"=>$file1,
                "file2"=>$file2
            );
            $array = array("res"=>0,"msg"=>"上传成功","result"=>$result);
            echo json_encode($array);
}

?>
