<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3a</title>
    <style>
        .tulisan{
            font-family : arial;
            color : #8c782d;
            font-size : 28px;
            font-weight : bold;
            font-style : italic;
            text-align : center;
        }
        .kotak {
            box-shadow : 3px 3px 3px rgba(0,0,0,1);
            border : 2px solid black;
            border-radius : 20px;
        }
    </style>
</head>
<body>
    <?php 
        function ganti_Style($tulisan, $style1, $style2){
            echo "<div class='$style1'>
                  <p class='$style2'>$tulisan</p>
                  </div>";  
        } 
    ?>
    <?php
        echo ganti_Style("Selamat datang di praktikum PW 2020","kotak","tulisan");
    ?>
</body>
</html>
