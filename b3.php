<!-- Nhập ngày bất kỳ, trả lời ngày hôm sau là ngày mấy! -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Tài</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="day" placeholder="Nhập ngày">
        <br>
        <br>
        <input type="number" name="month" placeholder="Nhập tháng">
        <br>
        <br>
        <input type="submit" value="check">
    </form>
    <?php
    if (isset($_POST['day'])&& isset($_POST['month'])){
        $day=$_POST['day'];
        $month=$_POST['month'];
        $temp=0;
        switch ($month) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                   if ($day<31){

                    $temp= $day+1;

                   }else{
                    $temp=1;
                   
                   } break;

                case 4:
                case 6:
                case 9:
                case 11:
                    if ($day<30){
                        $temp= $day+1;
                    }else{
                        $temp= 1;
                    } break;
                case 2: 
                    if ($day<29){
                        $temp= $day+1;
                    }else{
                        $temp= 1;
                    } break;
        }
        echo "$temp";
    }

    ?>
</body>
</html>