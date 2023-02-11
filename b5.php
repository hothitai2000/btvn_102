<html>
    <body>
    <form action="" method='post'>
        Nhập các số mà bạn muốn nhập:
        <input type="number" name="Tam">
        <input type="submit" value="submit">
    </form>
        <?php
        if(isset($_POST['Tam'])) {
            $n= $_POST['Tam'] ;
            $count=0;
        while ($n>0){
            $count += $n%10; 
            $n = $n/10;
        }
        echo "Tổng là: $count";
        }    
        ?>
    </body>
</html>