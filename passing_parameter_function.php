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
    
        function greeting($message){
            echo $message;
        }
    
    greeting("hello");

        function calculate($num1,$num2){

            $sum=$num1+$num2;
            echo $sum;
        }
        calculate(1,22);

    ?>
</body>
</html>