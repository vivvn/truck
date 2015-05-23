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
            $a = 1;
            if(file_exists($_FILES["file1"]["tmp_name"])){
                    $file1 = $_FILES["file1"];
                    $file2 = $_FILES["file2"];
                    $file3 = $_FILES["file3"];
                    $file4 = $_FILES["file4"];
                    $file5 = $_FILES["file5"];
                    $file6 = $_FILES["file6"];
                    $file7 = $_FILES["file7"];
                    $file8 = $_FILES["file8"];
                    $file9 = $_FILES["file9"];
                    $result = array(
                        "file1"=>$file1,
                        "file2"=>$file2,
                        "file3"=>$file3,
                        "file4"=>$file4,
                        "file5"=>$file5,
                        "file6"=>$file6,
                        "file7"=>$file7,
                        "file8"=>$file8,
                        "file9"=>$file9,
                    );
                    $array = array("res"=>0,"msg"=>"上传成功","result"=>$result);
                    echo json_encode($array);
                }else{
                    $file10 = $_FILES["file10"];
                    $file11 = $_FILES["file11"];
                    $file12 = $_FILES["file12"];
                    $file13 = $_FILES["file13"];
                    $file14 = $_FILES["file14"];
                    $file15 = $_FILES["file15"];
                    $file16 = $_FILES["file16"];
                    $file17 = $_FILES["file17"];
                    $file18 = $_FILES["file18"];
                    $file19 = $_FILES["file19"];
                    $file20 = $_FILES["file20"];
                    $file21 = $_FILES["file21"];
                    $result1 = array(
                        "file10"=>$file10,
                        "file11"=>$file11,
                        "file12"=>$file12,
                        "file13"=>$file13,
                        "file14"=>$file14,
                        "file15"=>$file15,
                        "file16"=>$file16,
                        "file17"=>$file17,
                        "file18"=>$file18,
                        "file19"=>$file19,
                        "file20"=>$file20,
                        "file21"=>$file21
                    );
                    $array1 = array("res"=>0,"msg"=>"上传成功","result"=>$result1);
                    echo json_encode($array1);
                }
}

?>
