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
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');
$sql = "SELECT * FROM `students`";

$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_NUM);
?>

<body>

    <div class="header">
        <div class="logo">
            學生資料查詢網
        </div>
        <div class="nav">
            <div class="nav_add">
                <button>新增</button>
            </div>
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
</body>

</html>