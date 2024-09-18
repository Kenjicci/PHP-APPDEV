<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a Triangle</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff;
        }

        .container {
            max-width: 350px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 0;
        }

        h3 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sidea = $_POST['sidea'];
        $sideb = $_POST['sideb'];
        $sidec = $_POST['sidec'];
    
        $s = ($sidea + $sideb + $sidec) / 2;
        $area = ($s * ($s - $sidea) * ($s - $sideb) * ($s - $sidec));
        $area2 = ($area ** 0.5);
    
        $result = "The area of the triangle is: " . round($area2, 2);
    }
    ?>

    <div class="container">
        <h1>Area of a Triangle</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="sidea">Side a: </label>
                <input type="number" id="sidea" name="sidea" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="sideb">Side b: </label>
                <input type="number" id="sideb" name="sideb" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="sidec">Side c: </label>
                <input type="number" id="sidec" name="sidec" step="0.01" required>
            </div>
            <button type="submit">Calculate</button>
        </form>

        <div class="result">
            <?php
            if (isset($result)) {
                echo $result;
            }
            ?>
        </div>
    </div>
</body>
</html>
