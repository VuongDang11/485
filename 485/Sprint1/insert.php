<?php
/*
$data = $_POST;

//database connect
$host = 'localhost';
$database = 'vdanggre_grc485';
$user = 'vdanggre_sdev';
$pass = 'rO-PxbxS9,,x';
$dsn = sprintf("mysql:host=%s;dbname=%s;", $host, $database);

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

//insert new user
$statement = $pdo->prepare(
    'INSERT INTO plan (name, fall, winter, spring, summer, date) VALUES (:name, :fall, :winter, :spring, :summer, CURRENT_TIME)'
);
$statement->execute([
    'name' => $data['name'],
    'fall' => $data['fall'],
    'winter' => $data['winter'],
    'spring' => $data['spring'],
    'summer' => $data['summer'],

]);

echo 'The user has been successfully saved.';  */
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/plan.css">
    <title>Hello, world!</title>

</head>
<body>
<div class="container">
    <h1 id="quarter">Quarter Classes Planning</h1>
    <label for="name" class="form-label">Email address</label>
    <input>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="container my-container">
    <form action="plan.php" method="POST">
        <div class="fall-plan">
            <h1>Fall Planning</h1>
            <div class="form-group">
                <label for="fall" class="form-label"></label>
                <textarea type="text" class="form-control" id="fall" name="fall" cols="10" rows="10 "<?php echo $_POST['fall']?>></textarea>
                <h1>Spring Planning</h1>
                <div class="form-group">
                    <label for="spring" class="form-label"></label>
                    <textarea type="text" class="form-control" id="spring" name="spring" cols="10" rows="10"></textarea>
                </div>
            </div>
        </div>
        <div class="winter-plan">
            <h1>Winter Planning</h1>
            <div class="form-group">
                <label for="winter" class="form-label"></label>
                <textarea type="text" class="form-control" id="winter" name="winter" cols="10" rows="10"></textarea>
            </div>
            <h1>Summer Planning</h1>
            <div class="form-group">
                <label for="summer" class="form-label"></label>
                <textarea type="text" class="form-control" id="summer" name="summer" cols="10" rows="10"></textarea>
            </div>
        </div>
        <button id="myBtn">Redirect</button>
        <script>
            var btn = document.getElementById('myBtn');
            btn.addEventListener('click', function() {
                document.location.href = 'plan.php';
            });
        </script>

    </form>
</div>

</body>

</html>
