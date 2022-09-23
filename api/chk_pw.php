<?php include_once "../base.php";
// session_start();
$acc=$_POST['acc'];
$pw=$_POST['pw'];

$chk=$Admin->math('count','*',['acc'=>$acc,'pw'=>$pw]);

//echo ($chk>0)?1:0;

if($acc=='admin' && $chk>0){
    $_SESSION['admin']=$acc;
    echo 1;
}elseif($chk>0){
    $_SESSION['login']=$acc;
    echo 1;
}else{
    echo 0;
}

?>