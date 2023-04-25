<form action="ChanLe.php" method="post">
<label>So :</label> <input name="u" type="text"/>
<input name="btn" type="submit" value="ok" class="btn btn-primary"/> 
</form>
<?php
    error_reporting(E_ERROR | E_PARSE);
    $num = $_POST['u'];
    if($num % 2 == 0)
        echo "Chan";
    else
        echo "le";
?>