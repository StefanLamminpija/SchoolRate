<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SchoolRate </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">

    <style>

        .heading {

            font-family: "Manrope", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-size: 10px;
            text-align: center;
            margin: 60px;

        }

        .second_heading {

            font-family: "Manrope", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings:
            "YOPQ" 300;
            font-size: 16px;
            text-align: center;
            word-spacing: 64px;
            padding-left: 215px;
        }

        .math {

            font-family: "Kumbh Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            font-variation-settings:
            "YOPQ" 300;
            text-align: center;
            word-spacing: 80px;
            border: 0.5px;
            border-style: solid;
            padding: 20px;
            margin-top: 10px;
            margin-left: 200px;
            margin-right: 200px;
            border-radius: 3px;

        }

        .estonian {

            font-family: "Kumbh Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            font-variation-settings:
            "YOPQ" 300;
            text-align: center;
            word-spacing: 80px;
            border: 0.5px;
            border-style: solid;
            padding: 20px;
            margin-top: 10px;
            margin-left: 233px;
            margin-right: 200px;
            border-radius: 3px;

        }

        .physics {

            font-family: "Kumbh Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            font-variation-settings:
            "YOPQ" 300;
            text-align: center;
            word-spacing: 80px;
            border: 0.5px;
            border-style: solid;
            padding: 20px;
            margin-top: 10px;
            margin-left: 243px;
            margin-right: 200px;
            border-radius: 3px;

        }

    </style>

</head>
<body>

    <div class="heading">

        <h1> Please give feedback for the courses you have taken, so that the school can improve its teaching methods and content! </h1>

    </div>

<?php

    // define variables and set to empty values
    $group = $email = $choise = $comment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $group = test_input($_POST["group"]);
        $email = test_input($_POST["email"]);
        $comment = test_input($_POST["comment"]);
        $choise = test_input($_POST["choise"]);

    }

    function test_input($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }

?>

    <h2 class="second_heading">Poor Bad Okay Good Excellent</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

        <div class="math">

            Mathematics
                
            <input type="radio" name="choise" value="Poor">
            <input type="radio" name="choise" value="Bad">
            <input type="radio" name="choise" value="Okay">
            <input type="radio" name="choise" value="Good">
            <input type="radio" name="choise" value="Excellent">
    
        </div>

        <div class="estonian">

            Estonian
                
            <input type="radio" name="choise" value="Poor">
            <input type="radio" name="choise" value="Bad">
            <input type="radio" name="choise" value="Okay">
            <input type="radio" name="choise" value="Good">
            <input type="radio" name="choise" value="Excellent">
    
        </div>

        <div class="physics">

            Physics
                
            <input type="radio" name="choise" value="Poor">
            <input type="radio" name="choise" value="Bad">
            <input type="radio" name="choise" value="Okay">
            <input type="radio" name="choise" value="Good">
            <input type="radio" name="choise" value="Excellent">
    
        </div>







        <br><br>

        Group: <input type="text" name="group">

        <br><br>

        E-mail: <input type="text" name="email">

        <br><br>

        Comment: <textarea name="comment" rows="5" cols="40"></textarea>

        <br><br>

        <input type="submit" name="submit" value="Submit">  

    </form>

<?php

    echo "<h2>Your Input:</h2>";
    echo $group;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $choise;

?>


</body>
</html>