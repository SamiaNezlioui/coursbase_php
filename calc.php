
<?php

$result = $_GET["number1"] + $_GET["number2"];
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <from action="calc.php" method="GET" calss="from">
            <div>
                <label>Enter Number 1:</label>
                <input type="number" name="number1" class="form-control-ms mb-3">
            </div>

            <div>
                <label>Enter Number 2:</label>
                <input type="number"  name="number2" class="form-control-ms mb-3">
            </div>
            <div class="alert alert-sucess">
                <?php echo $result ?>
            </div>
            <br>
            <button type="submit" class="btn btn-primary"> submit</button>
        </from>
    </div>
</body>