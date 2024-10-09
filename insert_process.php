<?php

include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
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
    } else {
        // Insert data into the 'users' table
        $sql = "INSERT INTO 
                student_choise (groupp, email, comment, math_choise, est_choise, phys_choise, bio_choise, eng_choise, rus_choise, lit_choise, pe_choise, des_choise, prog_choise, db_choise)
                VALUES ('$groupp', '$email', '$comment', '$math_choise', '$est_choise', '$phys_choise', '$bio_choise', '$eng_choise', '$rus_choise', '$lit_choise', '$pe_choise', '$des_choise', '$prog_choise', '$db_choise')";

        if ($mysqli->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
} else {
    
    header("Location: index.php");
    exit();
}

// Close the database connection
$mysqli->close();
?>