<?php

$name = "Phạm Quang Linh";
$grade = "K34DL";
$gender= 1;

?>


<html lang="en">
<head>
    <title>Bài đầu tiên</title>
</head>
<body>
    <div>Tên: <?= $name ?></div>
    <div>Lớp: <?= $grade ?></div>
    <div>Giới tính: <?= $gender==1?"Nam":"Nữ" ?></div>
</body>

</html>

