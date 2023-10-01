<?php
     $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bảng HTML</title>
</head>
<body>
    <table>
        <tr>
            <th>Tên khóa học</th>
        </tr>
        <tr>
            <td>
                <?php
                    echo $arrs[0];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo $arrs[1];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo $arrs[2];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo $arrs[3];
                ?>
            </td>
        </tr>
    </table>
</body>
</html>