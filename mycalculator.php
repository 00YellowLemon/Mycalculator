<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }

        main {
            width: 80%;
            max-width: 400px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #bbbbbb;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form input, form select {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #dddddd;
        }

        form input[type="submit"] {
            background-color: #333;
            color: #ffffff;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Calculator</h1>
    </header>
    <main>
        <h2>A simple calculator</h2>
        <form action="" method="post">
            <label for="num1">Number 1:</label>
            <input type="number" id="num1" name="num1" required>
            <label for="num2">Number 2:</label>
            <input type="number" id="num2" name="num2" required>
            <label for="operation">Operation:</label>
            <select id="operation" name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="exponential">Exponential</option>
                <option value="log">Logarithm</option>
            </select>
            <input type="submit" name="submit" value="Calculate">
        </form>

        <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Cannot divide by zero";
                    return;
                }
                break;
            case 'exponential':
                $result = pow($num1, $num2);
                break;
            case 'log':
                if ($num1 > 0) {
                    $result = log($num1, $num2);
                } else {
                    echo "Cannot take the logarithm of a non-positive number";
                    return;
                }
                break;
        }

        echo "The result is: $result";
    }
    ?>
    </main>
</body>
</html>