<?php include_once "base.php"; ?>
<link rel="stylesheet" href="./js/css.css">

<body>


    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">作品管理</p>
        <form action="api/manage.php" method="post" enctype="multipart/form-data">
            <table>
                <tbody>
                    <tr>
                        <td>作品圖片</td>
                        <td>作品名</td>
                        <td>作品介紹</td>
                        <td>路徑</td>
                        <td>作品類別</td>
                        <td>刪除</td>

                    </tr>
                </tbody>

                <?php $rows = $Pro->all();
                foreach ($rows as $row) { ?>
                    <tr>
                        <!-- <td class="cent"><img src="/s1100414/hw/" style="width: 150px;height:103px"></td> -->
                        <td class="cent"><img src="./assets/img/hw/<?= $row['img'] ?>" style="width: 150px;height:103px" alt="無法顯示<?= $row['img'] ?>"></td>
                        <td><input type='text' name='name[]' value='<?= $row['name'] ?>'></td>
                        <td><input type='text' name='intr[]' value='<?= $row['intr'] ?>'></td>
                        <td><input type='text' name='loca[]' value='<?= $row['loca'] ?>'></td>
                        <td><select name='class[]'>
                                <?php
                                $class = ['PHP', 'HTML', 'Adobe'];

                                foreach ($class as $k) {
                                    if ($k == $row['class']) {
                                        printf("<option value='%s' selected>%s</option>", $k, $k);
                                    } else {
                                        printf("<option value='%s'>%s</option>", $k, $k);
                                    }
                                }
                                ?>
                            </select></td>
                        <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                            <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                        </td>
                        <td><input type="button" onclick="op('#cover','#cvr','./modle/pro.php?id=<?= $row['id'] ?>')" value="更新圖片"></td>
                    </tr>
                <?php }
                ?>

            </table>
            <div><input type="submit" value="修改確定"><input type="reset" value="重置">
                <!-- <td width="200px"><input type="button" onclick="op('#cover','#cvr','/s1100414/modle/pro.php')" value="新增作品集"></td> -->
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','modle/pro.php')" value="新增作品集"></td>

                <?php if (isset($_GET['id'])) { ?>
                    <input type="button" onclick="more()" value="更多作品集">
                <?php } ?>


                <input type="hidden" name="table" value="pro">

            </div>
        </form>
    </div>
</body>
<script>
    function more() {
        $('.more').append(`    <tr>
        <td><input type="text" name="id[]" value=""></td>
        <td><input type="text" name="intr[]" value=""></td>
        <select name='class[]' id='class'>
                <option value="PHP">PHP</option>
                <option value="HTML">HTML</option>
                <option value="Adobe">Adobe</option>
            </select>
        <td><input type="file" name="img"></td>
    </tr>`)
    }
</script>