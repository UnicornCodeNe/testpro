<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 1000px;
            height: auto;
            align-items: center;
        }
        h1{
            color:red;
        }
        .header{
            height: 100px;
            background-color: yellowgreen;
            text-align: center;
        }
        .foot{
            background-color: yellow;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        error_reporting(E_ERROR | E_PARSE);
        $a = (int)$_POST['a'];
        $b = (int)$_POST['b'];
        if($a == 0)
        {
            if($b == 0)
                $result ='Vo so nghiem';
            else
                $result = 'Vo nghiem';
        } 
        else
        {
            $result = -$b/$a;
        }
    ?>
    <div class="container">
        <div class="header">
            <h1>GIẢI PHƯƠNG TRÌNH BẬC 1</h1>
        </div>
        <div class="foot">
            <form action="PTBac1.php" method="post">
            <input name="a" type="text"/> <label>X + </label><input name="b" type="text"/> <label> = 0</label>
            <div class="form-group">
                <input name="btn" type="submit" value="Kết Quả" class="btn btn-primary"/> 
            </div>
            </form>
            <h3>
                Phuong trinh co nghiem : <?php echo $result ?>
            </h3>
        </div>
    </div>
</body>
</html>

