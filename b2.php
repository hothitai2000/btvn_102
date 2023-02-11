<!-- Nhập ngày bất kỳ (Gồm 3 biến ngày, tháng,năm), kiểm tính hợp lệ của ngày vừa nhập. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài xoăn</title>
</head>
<body>
    <form action="" method="post">
     <input type="number" name="1" placeholder="Nhập ngày">
     <br>
     <br>
     <input type="number" name="2" placeholder="Nhập tháng">
     <br>
     <br>
     <input type="number" name="3" placeholder="Nhập năm">
     <br>
     <br>
     <input type="submit" name="btn">
    </form>
    <?php
      if (isset($_POST["1"]) && isset($_POST["2"]) && isset( $_POST["3"])){
        $Ngay = $_POST["1"];
        $Thang = $_POST["2"];
        $Nam = $_POST["3"];    
      }
      if (isset($_POST["btn"])) {
        switch ($Thang) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
            $Today = 31;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                $Today = 30;
                break;
            case 2:
                switch ($Nam) {
                    case ($Nam % 4 == 0):
                        $Today = 29;
                       
                        break;
                    case ($Nam % 4 != 0):
                        $Today = 28;
                        break;
                };
                break;
        };
        if ($Ngay <= $Today && $Nam > 0 && $Thang > 0 && $Ngay > 0) {
            echo "Hợp Lệ";
        }
        else {
            echo "Không hợp lệ";
        }
    }
    ?>
</body>
</html>