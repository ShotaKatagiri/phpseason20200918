<?php
require_once('Chart.class.php');

if (!empty($_POST)) {
    $data = $_POST['data'];
} else {
    $data = '';
}

function h($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>好きな季節 アンケート結果</title>
</head>

<body>
    <table>
        <form action="" name="data" method="post" value="h($data)">
            <tr>
                <td>春<input type="text" name="spring" size="4">人</td>
                <td>夏<input type="text" name="summer" size="4">人</td>
                <td>秋<input type="text" name="fall" size="4">人</td>
                <td>冬<input type="text" name="winter" size="4">人</td>
            </tr>

            <p><input type="submit" name="data" value="グラフ生成"></p>

        </form>
    </table>

</body>

</html>