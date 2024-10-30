<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SchoolRate </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
            font-size: 25px;
            text-align: center;
            margin: 60px;

        }

        .second_heading {

            display: flex;
            justify-content: space-around;
            font-family: "Manrope", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings:
            "YOPQ" 300;
            font-size: 16px;
            padding: 5px;
            text-align: left;
            margin-left: 400px;
            margin-right: 400px;
            border: 0.5px;
            border-style: solid;
            border-radius: 3px;

        }

        .bottom_page {


            font-family: "Manrope", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-size: 14px;
            display: flex;
            flex-direction: column;
            margin-left: 500px;
            margin-right: 500px;
            margin-top: 50px;

        }

        .submit_button {

            margin-left:200px;
            margin-right:200px;
            margin-top: 20px;
            padding: 10px;
            border-radius: 30px;
            border-color: #2E81FF;

        }

        .combined_results {

            display: flex;
            justify-content: center;
            margin-left:200px;
            margin-right:200px;
            margin-top: 20px;
            padding: 20px;
            margin-bottom: 100px;
            font-family: "Manrope", sans-serif;
            font-weight: 400;
            font-size: 14px;
            
        }

        .submit_button_input {

            border-radius: 30px;
            border-color: #82b4ff;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 2px;
            padding-bottom: 2px;

        }

        .box {
            display: flex;
            justify-content: space-around;
            font-family: "Kumbh Sans", sans-serif;
            font-weight: 500;
            padding: 20px;
            margin-top: 10px;
            margin-left: 400px;
            margin-right: 400px;
            border: 0.5px solid;
            border-radius: 3px;
        }

        .hidden {
            opacity: 0;
            user-select: none;
            pointer-events: none;
            -webkit-touch-callout: none; /* unselectable */
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
        }

        .hid{display:none;} 

        @media (max-width: 1200px) {
            .second_heading,
            .box,
            .bottom_page,
            .combined_results {
                margin-left: 0;
                margin-right: 0;
                padding: 10px; /* Можно добавить немного внутреннего отступа */
            }
        }

        @media (min-width: 2400px) {
            .second_heading,
            .box,
            .bottom_page,
            .combined_results {
                max-width: 1800px; /* Установите максимальную ширину */
                margin-left: auto; /* Центрирование */
                margin-right: auto; /* Центрирование */
                padding: 10px; /* Внутренние отступы */
            }
        }

    </style>

</head>
<body>

    <div class="heading">

        <h> Please give feedback for the courses you have taken, so that the school can improve its teaching methods and content! </h>

    </div>

    <div class="second_heading">
        <div class="hidden">
            Matmatmatmatmatt
        </div>
        
        <div class="poor_name">
            Poor
        </div>

        <div class="bad_name">
            Bad
        </div>

        <div class="okay_name">
            Okay
        </div>

        <div class="good_name">
            Good
        </div>

        <div class="excellent_name">
            Excellent
        </div>
    </div>


    <form method="post" action="insert_process.php">  

        <div class="math_box box">

            Mathematics&thinsp;&thinsp;

            <input type="radio" name="math_choise" value="1" required>
            <input type="radio" name="math_choise" value="2" required>
            <input type="radio" name="math_choise" value="3" required>
            <input type="radio" name="math_choise" value="4" required>
            <input type="radio" name="math_choise" value="5" required>
    
        </div>

        <div class="estonian_box box">

            Estonian&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
                
            <input type="radio" name="est_choise" value="1" required>
            <input type="radio" name="est_choise" value="2" required>
            <input type="radio" name="est_choise" value="3" required>
            <input type="radio" name="est_choise" value="4" required>
            <input type="radio" name="est_choise" value="5" required>
    
        </div>

        <div class="physics_box box">

            Physics&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
                
            <input type="radio" name="phys_choise" value="1" required>
            <input type="radio" name="phys_choise" value="2" required>
            <input type="radio" name="phys_choise" value="3" required>
            <input type="radio" name="phys_choise" value="4" required>
            <input type="radio" name="phys_choise" value="5" required>
    
        </div>

        <div class="biology_box box">

            Biology&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
                
            <input type="radio" name="bio_choise" value="1" required>
            <input type="radio" name="bio_choise" value="2" required>
            <input type="radio" name="bio_choise" value="3" required>
            <input type="radio" name="bio_choise" value="4" required>
            <input type="radio" name="bio_choise" value="5" required>

        </div>  

        <div class="english_box box">

            English&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
                
            <input type="radio" name="eng_choise" value="1" required>
            <input type="radio" name="eng_choise" value="2" required>
            <input type="radio" name="eng_choise" value="3" required>
            <input type="radio" name="eng_choise" value="4" required>
            <input type="radio" name="eng_choise" value="5" required>

        </div>  

        <div class="russian_box box">

            Russian&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
                
            <input type="radio" name="rus_choise" value="1" required>
            <input type="radio" name="rus_choise" value="2" required>
            <input type="radio" name="rus_choise" value="3" required>
            <input type="radio" name="rus_choise" value="4" required>
            <input type="radio" name="rus_choise" value="5" required>

        </div>  

        <div class="literature_box box">

            Literature&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
                
            <input type="radio" name="lit_choise" value="1" required>
            <input type="radio" name="lit_choise" value="2" required>
            <input type="radio" name="lit_choise" value="3" required>
            <input type="radio" name="lit_choise" value="4" required>
            <input type="radio" name="lit_choise" value="5" required>

        </div>  

        <div class="pe_box box">

            PE&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;

            <input type="radio" name="pe_choise" value="1" required>
            <input type="radio" name="pe_choise" value="2" required>
            <input type="radio" name="pe_choise" value="3" required>
            <input type="radio" name="pe_choise" value="4" required>
            <input type="radio" name="pe_choise" value="5" required>

        </div>  

        <div class="design_box box">

            Design&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
                
            <input type="radio" name="des_choise" value="1" required>
            <input type="radio" name="des_choise" value="2" required>
            <input type="radio" name="des_choise" value="3" required>
            <input type="radio" name="des_choise" value="4" required>
            <input type="radio" name="des_choise" value="5" required>

        </div>  

        <div class="programming_box box">

            Programming
                
            <input type="radio" name="prog_choise" value="1" required>
            <input type="radio" name="prog_choise" value="2" required>
            <input type="radio" name="prog_choise" value="3" required>
            <input type="radio" name="prog_choise" value="4" required>
            <input type="radio" name="prog_choise" value="5" required>

        </div>  

        <div class="database_box box">

            Databases&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
            
            <input type="radio" name="db_choise" value="1" required>
            <input type="radio" name="db_choise" value="2" required>
            <input type="radio" name="db_choise" value="3" required>
            <input type="radio" name="db_choise" value="4" required>
            <input type="radio" name="db_choise" value="5" required>

        </div>  

        <div class="q1 box">

            <label for="exampleFormControlTextarea1" class="form-label"> Have the courses that you have been taking been useful to you? &emsp;&emsp;&emsp;</label>

            <textarea name="first_question" class="form-control" id="exampleFormControlTextarea1" rows="2" required></textarea> 

        </div>

        <div class="q2 box">

            <label for="exampleFormControlTextarea1" class="form-label"> What courses do you think should be improved and why? &emsp;&emsp;&emsp;</label>

            <textarea name="second_question" class="form-control" id="exampleFormControlTextarea1" rows="2" required></textarea> 

        </div>

        <div class="q3 box">

            <label for="exampleFormControlTextarea1" class="form-label"> Do you think the teachers should be more efficient in their teachings? &emsp;&emsp;&emsp;</label>

            <textarea name="third_question" class="form-control" id="exampleFormControlTextarea1" rows="2" required></textarea> 

        </div>

        <div class="q4 box">

            <label for="exampleFormControlTextarea1" class="form-label"> What courses would you recommend to be removed or added? &emsp;&emsp;</label>

            <textarea name="fourth_question" class="form-control" id="exampleFormControlTextarea1" rows="2" required></textarea> 

        </div>

        <div class="q5 box">

            <label for="exampleFormControlTextarea1" class="form-label"> Do you think that the school should have more career specific courses? &emsp;&emsp;&emsp;</label>

            <textarea name="fifth_question" class="form-control" id="exampleFormControlTextarea1" rows="2" required></textarea> 

        </div>

        <br><br>

        <div class="bottom_page">

            <div class="mb-3">

                <label for="exampleFormControlInput1" class="form-label"> &emsp;Group </label>

                <input name="groupp" type="text" class="form-control" id="exampleFormControlInput1" required>

            </div>

            <div class="mb-3">

                <label for="exampleFormControlInput1" class="form-label"> &emsp;Email </label>

                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" required>

            </div>

            <div class="mb-3">

                <label for="exampleFormControlTextarea1" class="form-label"> &emsp;Additional Comments </label>

                <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

            </div>

            <input class="submit_button" type="submit" name="submit" value="Submit"> 

        </div>

    </form>

    <div class="combined_results">

        <a href="/schoolrate/combined_results.php">
        <input class="submit_button_input" type="submit" value="Combined Results">

    <div>


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>