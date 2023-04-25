<form action="NamNhuan.php" method="post">
<label>Nam</label> <input name="u" type="text"/>
<input name="btn" type="submit" value="ok" class="btn btn-primary"/> 
</form>
<!-- xuly.php -->
<?php
    error_reporting(E_ERROR | E_PARSE);
    $year = $_POST['u'];
    if((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0))
        echo 'Nam '.$year.' nhuan';
    else
        print("khong Nhuan");
?>

