<div class="cent"><?=(isset($_GET['id']))?'更新':'新增'?>管理者帳號</div>
<hr>
<!-- <form action="/s1100414/api/manage.php" method="post" enctype="multipart/form-data"> -->
<form action="/api/manage.php" method="post" enctype="multipart/form-data">
<table>
  <tr>
    <td>帳號：</td>
    <td><input type="text" name="acc[]"></td>
  </tr>
  <tr>
    <td>密碼：</td>
    <td><input type="text" name="pw[]"></td>
  </tr>
  <tr>
    <td>確認密碼：</td>
    <td><input type="text"></td>
  </tr>
    <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
    <td><input type="hidden" name="id[]" value="<?=$_GET['id']??''?>">
    <input type="hidden" name="table" value="admin"></td>
  </tr>
</table>
</form>