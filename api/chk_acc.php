<?php include_once "../base.php";
$acc=$_POST['acc'];
// echo $acc;
$chk=$Admin->math('count','*',['acc'=>$acc]);
// echo $chk;
if($chk>0){
    echo 1;
}else{
    echo 0;
}

?>