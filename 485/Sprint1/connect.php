<?php


$dbHost = "localhost";
$dbUser = "vdanggre_sdev";
$dbPassword = "rO-PxbxS9,,x";
$dbName = "vdanggre_grc485";

try {
    $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
    $pdo = new PDO($dsn, $dbUser, $dbPassword);
} catch (PDOException $e) {
    echo "DB Connection Failed: " . $e->getMessage();
}

$status = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $fall = $_POST['fall'];
    $spring = $_POST['spring'];
    $winter = $_POST['winter'];
    $summer = $_POST['summer'];


    $sql = "INSERT INTO contactinfo (name, email, fall, winter, spring, summer) VALUES (:name, :email, :fall, :winter, :spring, :summer)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute(['name' => $name, 'email' => $email, 'fall' => $fall, 'winter' => $winter, 'spring' => $spring, 'summer' => $summer]);

    $name = "";
    $email = "";
    $fall = "";
    $winter = "";
    $spring = "";
    $summer = "";


}

