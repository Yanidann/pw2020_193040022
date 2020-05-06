<?php
$a = "1";
$b = "2";
$c = "3";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Bulat</title>
    <style>
    .bulat {
        width : 50px;
        height : 50px;
        border : 2px solid #000;
        text-align : center;
        line-height : 50px;
        margin : 2px;
        float : left;
        border-radius : 100px;
        background : salmon;
    }
    .clear {
        clear : both;
    }
    </style>
</head>
<body>
<?php
    for ($i = 1; $i <=3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
        echo '<div class="bulat">'.$i.'</div>';
    }
        echo '<div class="clear"</div>';
    }
    ?>
</body>
</html>