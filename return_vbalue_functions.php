<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function addnumbers($num1,$num2){

        $sum=$num1+$num2;
        return $sum;
    }
    $total= addnumbers(12,2);
    echo $total.'</br>';

    $total= addnumbers(100,$total);

    echo $total;
    ?>
</body>
</html>