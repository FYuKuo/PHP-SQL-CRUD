<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生資訊查詢網-新增學生資訊</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        table {
            width: 400px;
            height: 600px;
        }

        .table_bn {
            text-align: center;
        }

        .table_bn>button {
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            學生資訊查詢網 - 新增學生資訊
        </div>
    </div>

    <div class="nav">
        <div class="nav_add">
            <button onclick="location.href='index.php'">返回</button>
        </div>
    </div>

    <form action="./store.php" method="post">
    <table>
            <tr>
                <td>項目</td>
                <td>
                    資料
                </td>
            </tr>
            <tr>
                <td>學號</td>
                <td>
                    <input type="text" name="uni_id" required>
                </td>
            </tr>
            <tr>
                <td>班級座號</td>
                <td>
                    <input type="text" name="seat_num" required>
                </td>
            </tr>
            <tr>
                <td>姓名</td>
                <td>
                    <input type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>生日</td>
                <td>
                    <input type="date" name="birthday" required>
                </td>
            </tr>
            <tr>
                <td>身分證字號</td>
                <td>
                    <input type="text" name="national_id" required>

                </td>
            </tr>
            <tr>
                <td>住址</td>
                <td>
                    <input type="text" name="address" required>

                </td>
            </tr>
            <tr>
                <td>家長</td>
                <td>
                <input type="text" name="parent" required>

                </td>
            </tr>
            <tr>
                <td>電話</td>
                <td>
                <input type="text" name="telphone" required>

                </td>
            </tr>
            <tr>
                <td>科別</td>
                <td>
                    <input type="text" name="major" required>
                    
                </td>
            </tr>
            <tr>
                <td>畢業國中</td>
                <td>
                    <input type="text" name="secondary" required>
                </td>
            </tr>

        </table>
        <div class="table_bn">
            <button type="submit">送出</button>
            <button type="reset">重置</button>
        </div>
    </form>
</body>

</html>