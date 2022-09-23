<?php include_once "base.php"; ?>

<style>
    .name{
        color: lightsteelblue;
    }
</style>
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<body>


<p class="t cent botli">基本資料</p>
    <form action="api/manage.php" method="post" enctype="multipart/form-data">
        <table>
        <?php $rows = $Abme->all();
            foreach ($rows as $row) { ?>
            <tr>
                <td class="name">姓名</td>
                <td><input type="text" name="name[]" value='<?= $row['name'] ?>'></td>
            </tr>
            <tr>
                <td class="name">學歷</td>
                <td><input type="text" name="stu[]" value='<?= $row['stu'] ?>'></td>
            </tr>
            <tr>
                <td class="name">工作經歷</td>
                <td><input type="text" name="work[]" value='<?= $row['work'] ?>'></td>
            </tr>
            <tr>
                <td class="name">生日</td>
                <td><input type="text" name="bir[]" value='<?= $row['bir'] ?>'></td>
            </tr>
            <tr>
                <td class="name">電話</td>
                <td><input type="text" name="tel[]" value='<?= $row['tel'] ?>'></td>
            </tr>
            <tr>
                <td class="name">居住地</td>
                <td><input type="text" name="local[]" value='<?= $row['local'] ?>'></td>
            </tr>
            <tr>
                <td class="name">年紀</td>
                <td style="background-color: lightblue;"><?= birthday($row['bir'])?></td>
            </tr>
            <tr>
                <td class="name">email</td>
                <td><input type="text" name="email[]" value='<?= $row['email'] ?>'></td>
            </tr>
            <input type="hidden" name="id[]" value="<?=$row['id']?>">
<?php }?>


</table>
<div><input type="submit" value="修改"><input type="reset" value="重置">


            

            <input type="hidden" name="table" value="abme">

        </div>
    </form>
</div>
</body>