<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SchoolRate</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.php" media="screen">

    <style type="text/css">

        .heading {

            font-family: "Manrope", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-size: 25px;
            text-align: center;
            margin: 60px;

        }


        table {

            font-family: "Kumbh Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            font-variation-settings:
            "YOPQ" 300;
            text-align: left;
            border: 0.5px;
            border-style: solid;
            padding: 20px;
            margin-top: 10px;
            margin-left: 750px;
            margin-right: 750px;
            border-radius: 3px;

        }

        .boxes {

            display: flex;
            justify-content: space-around;
            font-family: "Kumbh Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            font-variation-settings:
            "YOPQ" 300;
            text-align: left;
            border: 0.5px;
            border-style: solid;
            padding: 20px;
            margin-top: 10px;
            margin-left: 700px;
            margin-right: 700px;
            border-radius: 3px;

        }

    </style>


</head>

<body>

    <div class="heading"> 

        <h> This is the average result submitted by every student for each subject! </h>

        <br>

        <h> | Poor = 1 | Bad = 2 | Okay = 3 | Good = 4 | Excellent = 5 |</h>

    </div>

    <div class="boxes">

        <?php 

        include("connect.php");
        
        $sql = "SELECT  AVG(math_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
    
        while($row = mysqli_fetch_array($result)){ 
            echo "Mathematics =  ". round($row['AVG(math_choise)']), " / 5"; 
            echo "<br />"; 
            echo "<br />"; 

        } 

        $sql = "SELECT  AVG(est_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
     
        while($row = mysqli_fetch_array($result)){ 
            echo "Estonian =  ". round($row['AVG(est_choise)']), " / 5"; 
            echo "<br />";
            echo "<br />"; 
        } 

        $sql = "SELECT  AVG(phys_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
     
        while($row = mysqli_fetch_array($result)){ 
            echo "Physics =  ". round($row['AVG(phys_choise)']), " / 5"; 
            echo "<br />";
            echo "<br />"; 
        } 

        $sql = "SELECT  AVG(bio_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
     
        while($row = mysqli_fetch_array($result)){ 
            echo "Biology =  ". round($row['AVG(bio_choise)']), " / 5"; 
            echo "<br />";
            echo "<br />"; 
        } 

        $sql = "SELECT  AVG(eng_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
     
        while($row = mysqli_fetch_array($result)){ 
            echo "English =  ". round($row['AVG(eng_choise)']), " / 5"; 
            echo "<br />";
            echo "<br />"; 
        } 

        $sql = "SELECT  AVG(rus_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
     
        while($row = mysqli_fetch_array($result)){ 
            echo "Russian =  ". round($row['AVG(rus_choise)']), " / 5"; 
            echo "<br />";
            echo "<br />"; 
        } 

        $sql = "SELECT  AVG(lit_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
     
        while($row = mysqli_fetch_array($result)){ 
            echo "Literature =  ". round($row['AVG(lit_choise)']), " / 5"; 
            echo "<br />";
            echo "<br />"; 
        } 

        $sql = "SELECT  AVG(pe_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
     
        while($row = mysqli_fetch_array($result)){ 
            echo "PE =  ". round($row['AVG(pe_choise)']), " / 5"; 
            echo "<br />";
            echo "<br />"; 
        } 

        $sql = "SELECT  AVG(des_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
     
        while($row = mysqli_fetch_array($result)){ 
            echo "Design =  ". round($row['AVG(des_choise)']), " / 5"; 
            echo "<br />";
            echo "<br />"; 
        } 

        $sql = "SELECT  AVG(prog_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
     
        while($row = mysqli_fetch_array($result)){ 
            echo "Programming =  ". round($row['AVG(prog_choise)']), " / 5"; 
            echo "<br />";
            echo "<br />"; 
        } 

        $sql = "SELECT  AVG(db_choise) FROM student_choise"; 

        $result = $mysqli->query($sql); 
     
        while($row = mysqli_fetch_array($result)){ 
            echo "Databases =  ". round($row['AVG(db_choise)']), " / 5"; 
            echo "<br />";
        } 
        
        ?>

    </div>


</body>

</html>