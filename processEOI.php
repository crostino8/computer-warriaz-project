<?php
require_once('settings.php');

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$tableExists = mysqli_query($conn, "SELECT 1 FROM applications LIMIT 1");

if (!$tableExists) {
    $sql = "CREATE TABLE applications (
                eoi_number INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                job_reference VARCHAR(5) NOT NULL,
                first_name VARCHAR(20) NOT NULL,
                last_name VARCHAR(20) NOT NULL,
                date_of_birth DATE NOT NULL,
                gender ENUM('Male', 'Female', 'Other') NOT NULL,
                street_address VARCHAR(40) NOT NULL,
                suburb_town VARCHAR(40) NOT NULL,
                state_name CHAR(3) NOT NULL,
                postcode CHAR(4) NOT NULL
            )";
    mysqli_query($conn, $sql);
}
?>


<?php
$job_reference_number = mysqli_real_escape_string($conn, trim($_POST['job_reference_number']));
$first_name = mysqli_real_escape_string($conn, trim($_POST['first_name']));
$last_name = mysqli_real_escape_string($conn, trim($_POST['last_name']));
$date_of_birth = mysqli_real_escape_string($conn, trim($_POST['date_of_birth']));
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$street_address = mysqli_real_escape_string($conn, trim($_POST['street_address']));
$suburb_town = mysqli_real_escape_string($conn, trim($_POST['suburb_town']));
$state = mysqli_real_escape_string($conn, $_POST['state']);
$postcode = mysqli_real_escape_string($conn, trim($_POST['postcode']));


$errors = array();

if (!preg_match('/^[A-Za-z0-9]{5}$/', $job_reference_number)) {
    $errors[] = 'Job reference number must be exactly 5 alphanumeric characters';
}

if (!preg_match('/^[A-Za-z ]{1,20}$/', $first_name)) {
    $errors[] = 'First name must be max 20 alpha characters';
}

if (!preg_match('/^[A-Za-z ]{1,20}$/', $last_name)) {
    $errors[] = 'Last name must be max 20 alpha characters';
}







?>
