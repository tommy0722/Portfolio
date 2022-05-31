<?php
session_start();
date_default_timezone_set("Asia/Taipei");

class DB{
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=myweb",$user='root',$pw='';
    // protected $dsn="mysql:host=localhost;charset=utf8;dbname=s1100414";
    // public  $table,$user='s1100414',$pw='s1100414';
    function __construct($table)
    {
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->user,$this->pw);
    }
    function find($id){
        $sql="SELECT * FROM $this->table WHERE ";
        if(is_array($id)){
            foreach ($id as $k => $v) {
                $tmp[]="`$k`='$v'";
            }
            $sql.= implode(" AND ",$tmp);
        }else{
            $sql.="`id`='$id'";
        }
        // echo $sql;
        // echo "<br>";
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    function all(...$arg){
        $sql="SELECT * FROM $this->table ";
        switch (count($arg)) {
            case 1:
                if(is_array($arg[0])){
                    foreach ($arg[0] as $k => $v) {
                        $tmp[]="`$k`='$v'";
                    }
                    $sql.=" WHERE ". implode(" AND ",$tmp);
                }else{
                    $sql.=$arg[0];
                }
                break;
            
            case 2:
                foreach ($arg[0] as $k => $v) {
                    $tmp[]="`$k`='$v'";
                }
                $sql.=" WHERE ". implode(" AND ",$tmp)." ". $arg[1];
                break;
        }
        // echo $sql;
        // echo "<br>";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function math($math,$col,...$arg){
        $sql="SELECT $math($col) FROM $this->table ";
        switch (count($arg)) {
            case 1:
                if(is_array($arg[0])){
                    foreach ($arg[0] as $k => $v) {
                        $tmp[]="`$k`='$v'";
                    }
                    $sql.=" WHERE ". implode(" AND ",$tmp);
                }else{
                    $sql.=$arg[0];
                }
                break;
            
            case 2:
                foreach ($arg[0] as $k => $v) {
                    $tmp[]="`$k`='$v'";
                }
                $sql.=" WHERE ". implode(" AND ",$tmp)." ". $arg[1];
                break;
        }
        // echo $sql;
        // echo "<br>";
        return $this->pdo->query($sql)->fetchColumn();
    }
    function save($array){
        if(isset($array['id'])){
            foreach ($array as $k => $v) {
                $tmp[]="`$k`='$v'";
            }
            $sql="UPDATE $this->table SET ". implode(",",$tmp)." WHERE `id`='{$array['id']}'";
        }else{
            $col=implode("`,`",array_keys($array));
            $v=implode("','",$array);
            $sql="INSERT INTO $this->table (`$col`) VALUES ('$v')";
        }
        // echo $sql;
        // echo "<br>";
        return $this->pdo->exec($sql);
    }
    function del($id){
        $sql="DELETE FROM $this->table WHERE ";
        if(is_array($id)){
            foreach ($id as $k => $v) {
                $tmp[]="`$k`='$v'";
            }
            $sql.= implode(" AND ",$tmp);
        }else{
            $sql.="`id`='$id'";
        }
        // echo $sql;
        // echo "<br>";
        return $this->pdo->exec($sql);
    }

}


function dd($id){
    echo "<pre>";
    print_r($id);
    echo "</pre>";
}

function to($url){
    header("location:".$url);
}

$Admin=new DB('admin');
$Pro=new DB('pro');
$Abme=new DB('abme');
$Footer=new DB('footer');


?>