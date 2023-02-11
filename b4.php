<!-- Cho 2 số (a, b),. In các số chia hết cho 3 trong khoảng(a, b); -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Tài Xoăn</title>
</head>
<body>
    <h1>Cho 2 số (a,b). In các số chia hết cho 3 trong khoảng (a,b)</h1>
    <form action="" method="post">
        <input type="text" name="one" placeholder="Nhập số thứ nhất">
        <br>
        <br>
        <input type="text" name="Two" placeholder="Nhập số thứ hai">
        <br>
        <br>
        <input type="submit" name = "btn"value="check">
    </form>
    <?php
    if(isset($_POST['one'], $_POST['Two'])){
        $a=(int) $_POST['one'];
        $b=(int) $_POST['Two'];
        $c=$a+1;
    }
    if(isset($_POST["btn"])){
        echo "Các số chia hết 3 trong khoảng là: ($a,$b)  <br>";
        for($i=$c;$i<$b;$i++){
            if ($i%3==0){
                echo "$i <br>";
            }
        }
    }
    ?>
</body>
</html>