<?php
require_once("../../mysql.php");
$error_message = ""; // Initialize the error message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["Administrator_ID"]) && isset($_POST["Admin_Name"]) && isset($_POST["gender"]) && isset($_POST["DOB"]) && isset($_POST["admin_mobile"]) && isset($_POST["joined_date"]) && isset($_POST["department"]) && isset($_POST["experience"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["address"]) && isset($_POST["city"]) && isset($_POST["zipCode"]) && isset($_POST["country"])) {
        // Retrieve form data
        $Administrator_ID = $_POST["Administrator_ID"];
        $Admin_Name = $_POST["Admin_Name"];
        $gender = $_POST["gender"];
        $DOB = $_POST["DOB"];
        $admin_mobile = $_POST["admin_mobile"];
        $joined_date = $_POST["joined_date"];
        $department = $_POST["department"];
        $experience = $_POST["experience"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $zipCode = $_POST["zipCode"];
        $country = $_POST["country"];
        // Pr;ocess the form data here
//mysql starts here
$database = new Database();
$result = $database->query("INSERT INTO `admin` (`id`,`Full_Name`,`Name_With_Initials`,`email`,`mobile_number`,`username`,`password`,`DOB`,`address_id`,`joined_date`,`gender_id`,`Language_id`,`marital_status_id`,`Branch_id`,`experience_years_id`,`educational_qualification_id`,`verify_id`) VALUES('".$Administrator_ID."','".$Admin_Name."','".$Name_With_Initials."')");

    } else {
        $error_message = "Invalid form data. Please fill out all the required fields.";
    }
} else {
    $error_message = "Invalid request method. Please submit the form using POST method.";
}

// Output the error message (or handle form data processing here)
echo $error_message;
?>