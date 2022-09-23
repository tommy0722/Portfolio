<?php
include_once "../base.php";

// if (!empty($_POST)) {
//     if ($_POST['acc'] == 'admin'  && $_POST['pw'] == '1234') {
//         $_SESSION['login'] = $_POST['acc'];
        
//         to("../back.php");
//     } else {
//         echo "<script>";
//         echo "alert('帳號或密碼錯誤')";
//         echo "</script>";
//     }
// }


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
            <form method="post" action="" class="form">
                <table>
                    <tr>
                        <td colspan="2"> 管理員登入區</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>帳號</td>
                        <td><input type="text" name="acc" class="acc"></td>
                        
                    </tr>
                    <tr>
                        <td>密碼</td>
                        <td><input type="text" name="pw" class="pw"></td>
                        
                    </tr>
                </table>

                <p class="container">
                <input type="button" value="登入" class="login">
                    <input type="reset" value="清除">
                </p>
            </form>

        </div>
    </div>
</body>

<!-- <script src="../js/js.js"></script> -->
<script src="../js/jquery-1.9.1.min.js"></script>
<script>
    $('.login').on('click', () => {
        let acc = $('.acc').val();
        let pw = $('.pw').val();
        $.post('../api/chk_acc.php', {
            acc
        }, (rrr) => {
            if (rrr != 1) {
                console.log(rrr)
                alert('查無帳號');
                
                location.reload();
            } else {
                $.post('../api/chk_pw.php', {
                    acc,
                    pw
                }, (rr) => {
                    if (rr != 1) {
                        alert('密碼錯誤');
                        location.reload();
                    } else {
                        if (acc == 'admin') {
                            location.href = "../back.php";
                        } else {
                            location.href = "../index.php";
                        }
                    }
                })
            }
        })
    })
</script>