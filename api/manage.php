<?php include_once '../base.php';

$db=new DB($_POST['table']);
unset($_POST['table']);
foreach($_POST['id'] as $index => $id){
  $db->find($id);
  if(isset($_POST['del']) && in_array($id,$_POST['del'])){
    $db->del($id);
  }else{
    $data=[];
    foreach(array_keys($_POST) as $key){
      if($key != 'del')$data[$key]=$_POST[$key][$index];
    }
    if($_FILES){
      $file=$_FILES['img'];
      move_uploaded_file($file['tmp_name'],'../hw/'.$file['name']);
      $data['img']=$file['name'];
    }
    if(isset($_POST['sh'])){
      $data['sh']=in_array($id,$_POST['sh'])?1:0;
    }
    if(!$data['id'])unset($data['id']);

    $db->save($data);
    // dd($db->save($data));
  }
}
to($_SERVER["HTTP_REFERER"]);
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
