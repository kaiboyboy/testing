
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <input type="number" step="any" placeholder="Enter first number"
        name="num1" required>
        
        <select name="op" required>
            <option value="">Please Select</option>
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="times">&times;</option>
            <option value="divide">&divide;</option>
        </select>

        <input type="number" step="any" placeholder="Enter second number"
        name="num2" required>
        <button type="submit" name="calc">Calculate</button>
    </form>
    
    <?php
        if (isset($_POST['calc'])){
            $n1 = $_POST['num1'];
            $op = $_POST['op'];
            $n2 = $_POST['num2'];
            $result = 0;
            $error = "";

            if ($op == 'plus'){
                $result = $n1 + $n2;
            }

            else if ($op == 'minus'){
                $result = $n1 - $n2;
            }

            else if ($op == 'times'){
                $result = $n1 * $n2;
            }

            else if ($op == 'divide'){
                if ($n2 == 0){
                    $error = "Cannot divide by zero";
                }
                else{
                $result = $n1 / $n2;
                }
            }

            if ($error != ""){
                echo "<p style=\"color:red\">$error</p>";
            }
            else{
                echo "<p>$n1 $op $n2 = $result</p>";
            }
        }
            
        
    ?>
</body>
</html>