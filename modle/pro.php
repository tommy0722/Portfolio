<?php include_once "../base.php" ?>
<div class="cent"><?= (isset($_GET['id'])) ? '編輯' : '新增' ?>作品集</div>
<hr>
<!-- <form action="/s1100414/api/manage.php" method="post" enctype="multipart/form-data"> -->
<form action="api/manage.php" method="post" enctype="multipart/form-data">
    <table>

        <?php if (isset($_GET['id'])) { ?>
            <tr>
                <td>作品圖片：</td>
                <td><input type="file" name="img"></td>
            </tr>


        <?php } else { ?>
            <tr style="text-align: center;">
                <td>作品名稱</td>
                <td>作品介紹</td>
                <td>作品類別</td>
                <td>上傳圖片</td>
            </tr>
            <tr>
                <td><input type="text" name="name[]" value=""></td>
                <td><input type='text' name='intr[]' value=""></td>
                <td><input type="text" name="loca[]" value=""></td>
                <td><select name='class[]' id='class'>
                        <option value="PHP">PHP</option>
                        <option value="HTML">HTML</option>
                        <option value="Adobe">Adobe</option>
                    </select></td>
                <td><input type="file" name="img"></td>
            </tr>

        <?php } ?>



    </table>
    <table class="more">
    </table>
    <div><input type="submit" value="新增"><input type="reset" value="重置">


        <input type="button" onclick="more()" value="更多作品集">

        <!-- <input type="hidden" name="MID[]" value="<?= $_GET['id'] ?? '' ?>"> -->
        <input type="hidden" name="id[]" value="<?= $_GET['id'] ?? '' ?>">
        <input type="hidden" name="table" value="pro">
    </div>
</form>
<script>
    function more() {
        // 照片改button
        $('.more').append(`<tr>
        <td><input type="text" name="id[]" value=""></td>
        <td><input type="text" name="intr[]" value=""></td>
        <td><input type='text' name='loca[]' value=""></td>
        <td><select name='class[]' id='class'>
                <option value="PHP">PHP</option>
                <option value="HTML">HTML</option>
                <option value="Adobe">Adobe</option>
            </select></td>
        <td><input type="file" name="img"></td>
    </tr>`)
    }
    getMid(1);
    $('#big').on('change', () => {
        let id = $('#big').val();
        getMid(id);
    })

    function getMid(id) {
        $('#mid').load('/api/getid.php', {
            id
        }, (rr) => {
            $('#mid').html();
        })
    }
</script>