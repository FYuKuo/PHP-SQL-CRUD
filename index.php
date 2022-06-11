<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生資訊查詢網</title>
    <link rel="stylesheet" href="./style.css">
</head>
<?php


// 呼叫資料庫
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');

//資料庫要執行的動作
$sql = "SELECT * FROM `students`";


// 從資料庫抓出要執行的動作
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_NUM);

if (isset($_GET['limit'])){
    $limit = $_GET['limit'];
}else{
    $limit = 25;
}
$num_rows = count($rows); //計算students裡共有幾筆資料
$pages = ceil($num_rows / $limit);

//如果有收到頁數
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $start = ($page - 1) * $limit;
    $sql = "SELECT * FROM `students` LIMIT $start,$limit";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_NUM);
} else { //如果沒有收到頁數就從第一頁開始
    $page = 1;
    $start = ($page - 1) * $limit;
    $sql = "SELECT * FROM `students` LIMIT $start,$limit";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_NUM);
}
?>

<body>

    <div class="header">
        <div class="logo">
            <a href="./index.php">學生資訊查詢網</a>
        </div>
    </div>

    <div class="nav">
        <div class="nav_limit">
            <form action="./index.php" method="get">
                <select name="limit" id="limit">
                    <option value="25" <?= ($limit) == "25" ? 'selected' : '' ?>>每頁顯示25筆</option>
                    <option value="50" <?= ($limit) == "50" ? 'selected' : '' ?>>每頁顯示50筆</option>
                    <option value="100" <?= ($limit) == "100" ? 'selected' : '' ?>>每頁顯示100筆</option>
                </select>
                <button type="submit">更新</button>
            </form>
        </div>
        <div class="nav_add">
            <button onclick="location.href='add.php'">新增</button>
        </div>
    </div>
    <!-- 表格區 -->
    <table>
        <tr>
            <td>編號</td>
            <td>學號</td>
            <td>班級座號</td>
            <td>姓名</td>
            <td>出生年月日</td>
            <td>身分證號碼</td>
            <td>住址</td>
            <td>家長</td>
            <td>電話</td>
            <td>科別</td>
            <td>畢業國中</td>
            <td>功能</td>
        </tr>
        <?php
        // 利用迴圈取出二維陣列中的第一層的索引值
        foreach ($rows as $row) {
            echo "<tr>";
            // 利用迴圈取出二維陣列中的第二層的值
            foreach ($row as $value) {
                echo "<td>";
                echo $value;
                echo "</td>";
            }
        ?>
            <td>
                <button>修改</button>
                <button>刪除</button>
            </td>

            </tr>
        <?php
        }
        ?>
    </table>
    <div class="page">
    <!-- 頁數 -->
    <?php
    for ($i = 1; $i <= $pages; $i++) {
        echo "<a href='index.php?page=$i&limit=$limit'>$i </a>";
    }
    ?>
    </div>
</body>

</html>