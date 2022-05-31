<?php include_once "base.php"; ?>

<body>
<h1>網站管理</h1>
    

<!-- 網站文字或內容 -->

<!-- 網站部分視覺 -->

<!-- 頁首 / 頁尾 / 背景圖版或配色 -->

<!-- 可設定網站各區塊或項目的顯示 -->

<link rel="stylesheet" href="./js/css.css"> 
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾圖片</p>
    <form method="post" action="../api/manage.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="75%">頁尾圖片</td>
                    <td width="%">顯示</td>
                    <td width="%">刪除</td>
                </tr>
                <?php $rows = $Footer->all();
                foreach ($rows as $row) {
                    printf('<tr> <td><input type="text" name="text[]" value="%s" style="width:90%%"></td>', $row['text']);
                    printf('<td><input type="checkbox" name="sh[]" value="%s" %s></td>', $row['id'], ($row['sh'] == 1) ? 'checked' : '');
                    printf('<td><input type="checkbox" name="del[]" value="%s"><input type="hidden" name="id[]" value="%s"></td></tr>', $row['id'], $row['id']);
                }
                ?>
            </tbody>
        </table>
        <input type="hidden" name="table" value="ad">
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','../window/ad.php')" value="新增動態文字廣告"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>
        
    </form>
</div>
<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
</body>