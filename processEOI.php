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
                phone_number INT(12)
                skills varchar(40)
                other_skills varchar(40)
            )";
    mysqli_query($conn, $sql);
}
?>

<form method="post" action="apply.php" novalidate>
</form>

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
$email_address = mysqli_real_escape_string($conn, trim($_POST['email_address']));
$phone_number = mysqli_real_escape_string($conn, trim($_POST['phone_number']));
$other_skills = mysqli_real_escape_string($conn, trim($_POST['other_skills']));

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

if (!preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $date_of_birth, $matches)) {
    $error = true;
    echo '<error elementid="date_of_birth" message="Date of Birth - Please enter a valid date in the format - dd/mm/yyyy"/>';

} else {
    $dob = DateTime::createFromFormat('d/m/Y', $date_of_birth);
    $now = new DateTime();
    $diff = $dob->diff($now)->y;

    if ($diff < 15 || $diff > 80) {
      $error = true;
      echo '<error elementid="date_of_birth" message="Date of Birth - Please enter a valid date of birth between 15 and 80 years ago." />';
    }
  }
  
  if (isset($_POST['gender']) && $_POST['gender'] != '') {
    $gender = $_POST['gender'];
  }

if (!preg_match('/^[A-Za-z0-9]{1,40}$/', $street_address)) {
    $errors[] = 'Street address must be max 40 alpha characters';
}

if (!preg_match('/^[A-Za-z ]{1,40}$/', $suburb_town)) {
    $errors[] = 'Suburb/Town must be max 40 alpha characters';
}

if (!in_array($state, array("VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"))) {
    $errors[] = 'A state must be selected';
}

if (!preg_match('/^[0-9]{4}$/', $postcode)) {
    $errors[] = 'A valid postcode must be entered';
}

if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
}   else {
    $errors[] = 'A valid email address must be used';
}

if (!preg_match('/^\d{1,3}([ ]?\d{3}){2,3}$/', $phone_number)) {
    $errors[] = 'Invalid phone number';
}

if (isset($_POST['other_skills']) && $_POST['other_skills'] == 'on') {
    if (!empty($_POST['other_skills_text'])) {
      $my_value = $_POST['other_skills_text'];

    } else {
      echo 'Please enter a value in the textbox.';
    }
}

?>
