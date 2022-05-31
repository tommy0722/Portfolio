<?php
include_once "../base.php";
if (!empty($_POST)) {
    if ($_POST['acc'] == 'admin'  && $_POST['pw'] == '1234') {
        $_SESSION['admin']=$_POST['acc'];
        echo $_SESSION['admin'];
        to("../back.php");
    } else {
        echo "<script>";
        echo "alert('帳號或密碼錯誤')";
        echo "</script>";
    }
}


?>
<style>
    form,
    table,
    tr,
    td {
        text-align: center;
        margin: auto;
    }

    td input {
        background-color: lightblue;
    }
</style>

<body style=" background-image: url('../assets/img/loginback.png');background-size: 20% 100%;">

    <div>

        <!-- <div style="height:32px; display:block;"></div> -->
        <!--正中央-->
        <div style="margin: auto;">
            <form method="post" action="?do=login" class="form">
                <table>
                    <tr>
                        <td colspan="2"> 管理員登入區</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>帳號</td>
                        <td><input name="acc" autofocus="" type="text"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>密碼</td>
                        <td><input name="pw" type="password"></p>
                        </td>
                    </tr>
                </table>

                <p class="container">
                    <input value="送出" type="submit">
                    <input type="reset" value="清除">
                </p>
            </form>

        </div>
    </div>
</body>