<?php

use function PHPSTORM_META\type;
// $month=(int)date("m");
// echo $month;
$weekend = ["日", "一", "二", "三", "四", "五", "六"];
if (isset($_GET['month'])) {
    $month = $_GET['month'];
    $years = $_GET['years'];
} else {
    $month = (int)date("m");
    $years = (int)date("Y");
}
$today=date("Y-m-d");

$specialDate = ["$today" => "今天","2007-9-30" => "亞絲娜出身", "2008-10-7" => "桐人出身", "2010-10-4" => "莉卡出身","$years-9-30" => "亞絲娜生日", "$years-10-7" => "桐人生日", "$years-10-4" => "莉卡生日", "2011-5-1" => "絕劍有紀生日","$years-5-1" => "絕劍有紀生日", "2020-1-1" => "詩乃-遭遇郵局搶案", "2020-7-15" => "亞絲娜-獨自前往祖父母家", "2022-5-1" => "《Sword Art Online》發表，NERvGear開始販售，桐人成為封測玩家", "2022-8-11" => "桐人進行SAO封閉測試(到達第十層)", "2022-11-6" => "〈SAO篇開始〉", "2022-11-30" => "大斷線事件，全體玩家的身體被移到各地的醫療設施", "2022-12-1" => "死亡人數達到2000人", "2022-12-2" => "桐人與亞絲娜在第一層迷宮初次見面", "2022-12-3" => "蒂爾貝魯發現第一層Boss房間", "2023-2-1" => "亞絲娜加入《血盟騎士團》", "2023-4-8" => "桐人加入月夜的黑貓團", "2023-5-16" => "桐人在下水道找到躲藏的幸", "2023-6-22" => "幸死亡and月夜的黑貓團全滅", "2024-2-23" => "桐人與西莉卡第一次相遇", "2024-10-18" => "桐人星爆氣流斬首次登場", "2024-10-24" => "桐人與亞絲娜線上婚禮", "2024-10-30" => "桐人與亞絲娜發現結衣", "2024-11-7" => "〈SAO篇結束〉", "2025-1-20" => "桐人登入ALO", "2025-11-9" => "死槍開第一槍", "2025-12-7" => "〈GGO篇開始〉", "2025-12-16" => "〈GGO篇結束〉", "2025-12-31" => "絕劍的傳聞開始出現", "2026-1-7" => "絕劍vs亞絲娜", "2026-1-8" => "沉睡騎士立下公會碑", "2026-3-29" => "有紀將原創劍技-聖母聖詠送給亞絲娜"];
$nowmonth = date("m");
$nowyesrs = date("Y");
$lastmonth = $month - 1;
$nextmonth = $month + 1;
$lastyears = $years;
$nextyears = $years;

if ($month == 12) {
    $lastmonth = $month - 1;
    $lastyears = $years;
    $nextmonth = 1;
    $nextyears = $years + 1;
} elseif ($month == 1) {
    $lastmonth = 12;
    $lastyears = $years - 1;
    $nextmonth = $month + 1;
    $nextyears = $years;
}




// 每個月幾天
$days = date("t", strtotime("$years-$month-01"));
$firstday = date("$years-$month-01");
$week = date("w", strtotime("$years-$month-01"));
// 第一天的位置
$first = 1 - $week;


// 製作背景
// for ($i = 1; $i <= 12; $i++) {
//     $bg = 'bg' . $i;

//     if ($i == $month) {
//         $bg='background-image: url(./SAO/sao-'.$i.'.jpg)';
//     }
// }

$Engmonth = [
    '',
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
];
// echo "<h1 class='h1'>$Engmonth[9]</h1>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <link rel="stylesheet" href="style.css">

</head>

<body style="background:url(./SAO/sao-<?= $month ?>.jpg)" class="main">

    <aside class="aside ">
        <header class="header">
            <h1><?= $years ?></h1>
            <h3><?= $Engmonth[$month] ?></h3>
        </header>
        <footer class="footer">
            <form action="./index.php" method="GET">
                <h4>years：</h4>
                <select name="years" style="font-size:20px;width: 50%;background-color:lightblue;border-radius: 15px;">
                    <?php
                    // echo "<option value='$years' selected>$years</option>";
                    for ($i = 1900; $i <= 2400; $i++) {
                        $seleyears = $i;
                        if ($seleyears == $years) {
                            echo "<option value='$seleyears' selected >$seleyears</option>";
                        } else {
                            echo "<option value='$seleyears'>$seleyears</option>";
                        }
                    }

                    ?>
                    <label for="username">年</label>
                </select>
                <br>

                <h4>month：</h4>
                <select name="month" style="font-size:20px;width: 50%;background-color:lightblue;border-radius: 15px;">
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                        $selemonth = $i;
                        if ($selemonth == $month) {
                            echo "<option value='$selemonth' selected>$selemonth</option>";
                        } else {
                            echo "<option value='$selemonth'>$selemonth</option>";
                        }
                    }

                    ?>
                    
                    <label for="username">月</label>
                </select>
                <br><br>
                <input type="submit" value="選擇" style="font-size:20px;width: 30%;background-color:lightblue;border-radius: 15px;">
            </form>
        </footer>

    </aside>
    <section class="section">
        <?php
        $quotations = [
            '',
            '一個好的程式設計師應該是那種過單行線都要往兩邊看的人。',
            '程式有問題時不要擔心。如果所有東西都沒問題，你就失業',
            '大部分人都知道通常一名工程師會具有的美德。當然了，有三種：懶惰、暴躁、傲慢。',
            '用程式碼行數來評估程式的開發進度，就好比是拿重量來評估一個飛機的建造進度。',
            '一個人寫的爛軟體將會給另一個人帶來一份全職工作。',
            '沒能一次成功，那就叫它 1.0 版吧。',
            '所有的工程師都是編劇，所有的電腦都是爛演員。',
            '傻瓜都能寫出電腦能理解的程式。優秀的工程師寫出的是人類能讀懂的程式。',
            '開發軟體和建造教堂非常相似——完工之後我們就開始祈禱。',
            '世上只有兩類程式語言：那些被人罵翻的，以及那些沒人使用的。',
            'Java 之於 JavaScript 的關係，就如同狗和熱狗。',
            '電腦善於遵循指令，但不善於理解你的思維。'
        ];

        ?>
        <header class="header2">
        <h1 style="text-align: left;font-size:50px;">&emsp;<?=$month;?>月</h1>
        <h1 class='h1'><?= $quotations[$month];?></h1>
        
        </header>
        <div>

        
            <table class="table">
                <tr>
                    <?php
                    for ($i = 0; $i < 7; $i++) {
                        echo "<td class='tdweek'>$weekend[$i]</td>";
                    }
                    ?>
                </tr>

                <?php

                for ($i = $first; $i < $days;) {
                    echo '<tr>';
                    for ($j = 0; $j < 7; $j++) {
                        $date = date("$years-$month-$i");
                        if ($i <= $days and $i > 0) {
                            if (($j == 0 or $j == 6) and !(isset($date) and array_key_exists($date, $specialDate))) {
                                echo "<td class='tdweeks'>{$i}</td>";
                            } 
                            if (($j > 0 and $j < 6) and !(isset($date) and array_key_exists($date, $specialDate))) {
                                echo "<td class='tdday'>{$i}</td>";
                            }
                            if (isset($date) and array_key_exists($date, $specialDate)) {
                                echo "<td class='speciaDay'>$i <p>$specialDate[$date]</p></td>";
                            }
                        } else {
                            echo "<td>&nbsp;</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                }


                ?>
            </table>
        </div>
        <footer class="footer2">
            <table class="null">
                <tr>
                    <td class="null1"><a href="index.php?years=<?= $lastyears; ?>&month=<?= $lastmonth; ?>">上個月</a></td>
                    <td class="null1"><a href="index.php?years=<?= $nowyesrs; ?>&month=<?= $nowmonth; ?>">當月</a></td>
                    <td class="null1"><a href="index.php?years=<?= $nextyears; ?>&month=<?= $nextmonth; ?>">下個月</a></td>

                </tr>
            </table>
            
        </header>
    </section>
</body>

</html>