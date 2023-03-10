<?php
include ('model/connect.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="scripts/token.js"></script>
    <link rel="stylesheet" href="styles/plan.css">
</head>
<body>
<div class="token-generate">
    <h1 id="quarter">Quarter Classes Planning</h1>

    <?php

    function IdGenerator($length = 6) {
        $characters = 'ABCDEFHIJKLMNOPQRSTUVWXYZ2345679';
        $strlen = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $strlen - 1)];
        }
        return $randomString;
    }
    echo "Your personal ID: ".IdGenerator();

    ?>

</div>
<h3>Student Name</h3>
<input type="text" class="form-control" id="name" name="name" placeholder="First / Last">
<br>
<h3>Student Email Address</h3>
<input type="email" class="form-control" id="email" name="email" placeholder="@student.greenriver.edu">

<div class="container my-container">
    <form action="formValues.php" method="post">

        <div class="fall-plan">
            <h1>Fall Planning</h1>

            <div class="form-group">
                <textarea class="form-control" name="fall" id="fall" rows="15" cols="60"></textarea>
            </div>
        </div>

        <div class="winter-plan">
            <h1>Winter Planning</h1>

            <div class="form-group">
                <textarea class="form-control" name="winter" id="winter" rows="15" cols="60"></textarea>
            </div>
        </div>
</div>


<div class="container my-container-second-row">
    <div class="spring-plan">
        <h1>Spring Planning</h1>

        <div class="form-group">

            <textarea class="form-control" name="spring" id="spring" rows="15" cols="60"></textarea>
        </div>
    </div>

    <div class="summer-plan">
        <h1>Summer Planning</h1>

        <div class="form-group">

            <textarea class="form-control" name="summer" id="summer" rows="15" cols="60"></textarea>
        </div>
    </div>
</div>
</div>

<button type="submit"  value="Submit">Submit</button>
</form>
</div>





</body>

</html>
