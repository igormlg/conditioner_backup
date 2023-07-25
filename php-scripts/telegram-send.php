<?php
$nonsequential = array(1=>"foo", 2=>"bar", 3=>"baz", 4=>"blong");
// $nonsequential = $_POST;
// echo '123';
// $nonsequential = json_encode($_POST);
// print_r($nonsequential);

// $nonsequential = $_POST;
$nonsequential = json_encode($nonsequential);
// echo($nonsequential);
echo $nonsequential;

?>


