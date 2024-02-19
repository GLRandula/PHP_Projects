<?php

    if(isset($_GET['operation'])){
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $op = $_GET['operation'];

        if(is_numeric($x) && is_numeric($y)){
            switch($op){
                case 'add' : $result = $x + $y;
                    break;
                case 'sub' : $result = $x - $y;
                    break;
                case 'mul' : $result = $x * $y;
                    break;
                case 'div' : $result = $x / $y;
                    break;
                default:
                    break;
            }
        }
        else{
            $error = "Enter a number first.";
            echo $error;
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        
        <div>
            <label for="num1">Number 1</label>
            <input type="number" name="num1" id="num1" value="<?= $x ?>">
        </div><br>

        <div>
            <label for="num2">Number 2</label>
            <input type="number" name="num2" id="num2" value="<?= $y ?>">
        </div><br>

        <div>
            <label for="result">Result</label>
            <input type="number" name="result" value="<?= $result ?>" disabled>
        </div><br>

        <div>
            <input type="submit" value="add" name="operation">
            <input type="submit" value="sub" name="operation">
            <input type="submit" value="mul" name="operation">
            <input type="submit" value="div" name="operation">
        </div><br>
    </form>
</body>
</html>