<?php

include("connect.php");
session_start();

// check CSRF token
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF token validation failed.");
    }

    // email validation
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    if (!$email) {
        echo "Incorrect email address format.";
        exit();
    }

    // Input data escaping 
    $groupp = mysqli_real_escape_string($mysqli, $_POST["groupp"]);
    $comment = mysqli_real_escape_string($mysqli, $_POST["comment"]);
    
    // Get ratings
    $groupp = mysqli_real_escape_string($mysqli, $_POST["groupp"]);
    $email = mysqli_real_escape_string($mysqli, $_POST["email"]);
    $comment = mysqli_real_escape_string($mysqli, $_POST["comment"]);
    $math_choise = mysqli_real_escape_string($mysqli, $_POST["math_choise"]);
    $est_choise= mysqli_real_escape_string($mysqli, $_POST["est_choise"]);
    $phys_choise = mysqli_real_escape_string($mysqli, $_POST["phys_choise"]);
    $bio_choise = mysqli_real_escape_string($mysqli, $_POST["bio_choise"]);
    $eng_choise = mysqli_real_escape_string($mysqli, $_POST["eng_choise"]);
    $rus_choise = mysqli_real_escape_string($mysqli, $_POST["rus_choise"]);
    $lit_choise = mysqli_real_escape_string($mysqli, $_POST["lit_choise"]);
    $pe_choise = mysqli_real_escape_string($mysqli, $_POST["pe_choise"]);
    $des_choise = mysqli_real_escape_string($mysqli, $_POST["des_choise"]);
    $prog_choise = mysqli_real_escape_string($mysqli, $_POST["prog_choise"]);
    $db_choise = mysqli_real_escape_string($mysqli, $_POST["db_choise"]);

    // Validate form data (you may want to add more validation)
    if (empty($groupp) || empty($email) || empty($comment) || empty($math_choise) || empty($est_choise) || empty($phys_choise) || empty($bio_choise) || empty($eng_choise) || empty($rus_choise) || empty($lit_choise) || empty($pe_choise) || empty($des_choise) || empty($prog_choise) || empty($db_choise)) {
        echo "All fields are required.";
        exit();
    } else {
        // Prepared statement
        $stmt = $mysqli->prepare("INSERT INTO student_choise (groupp, email, comment, math_choise, est_choise, phys_choise, bio_choise, eng_choise, rus_choise, lit_choise, pe_choise, des_choise, prog_choise, db_choise) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssss", $groupp, $email, $comment, $math_choise, $est_choise, $phys_choise, $bio_choise, $eng_choise, $rus_choise, $lit_choise, $pe_choise, $des_choise, $prog_choise, $db_choise);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            error_log("Database error: " . $stmt->error);
            echo "An error occurred. Please try again later.";
        }
        
        // Close the prepared statement
        $stmt->close();
    }
} else {
    header("Location: index.php");
    exit();
}

// Close the database connection
$mysqli->close();
?>
