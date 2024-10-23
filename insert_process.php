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
    $first_question = mysqli_real_escape_string($mysqli, $_POST["first_question"]);
    $second_question = mysqli_real_escape_string($mysqli, $_POST["second_question"]);
    $third_question = mysqli_real_escape_string($mysqli, $_POST["third_question"]);
    $fourth_question = mysqli_real_escape_string($mysqli, $_POST["fourth_question"]);
    $fifth_question = mysqli_real_escape_string($mysqli, $_POST["fifth_question"]);

    // Validate form data (you may want to add more validation)
    if (empty($groupp) || empty($email) || empty($comment) || empty($math_choise) || empty($est_choise) || empty($phys_choise) || empty($bio_choise) || empty($eng_choise) || empty($rus_choise) || empty($lit_choise) || empty($pe_choise) || empty($des_choise) || empty($prog_choise) || empty($db_choise)  || empty($first_question) || empty($second_question) || empty($third_question) || empty($fourth_question) || empty($fifth_question)) {
        echo "Some fields are empty.";
    } else {
        // Insert data into the 'student_choise' table
        $sql = "INSERT INTO 
                student_choise (groupp, email, comment, math_choise, est_choise, phys_choise, bio_choise, eng_choise, rus_choise, lit_choise, pe_choise, des_choise, prog_choise, db_choise, first_question, second_question, third_question, fourth_question, fifth_question)
                VALUES ('$groupp', '$email', '$comment', '$math_choise', '$est_choise', '$phys_choise', '$bio_choise', '$eng_choise', '$rus_choise', '$lit_choise', '$pe_choise', '$des_choise', '$prog_choise', '$db_choise', '$first_question', '$second_question', '$third_question', '$fourth_question', '$fifth_question')";

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