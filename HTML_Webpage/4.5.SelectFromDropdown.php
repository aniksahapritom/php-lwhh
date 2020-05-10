<?php 
include_once "form-2-function.php";
$fruits = ["Mango", "Orange", "BANANA","apple","Pineapple"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <title>Simple HTML Page</title>
    <style>
        body{
            margin-top:30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Select Doropdown</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci libero inventore ipsam voluptates omnis id magni dolorum maxime placeat similique?</p>
                <!-- <?php 
                    print_r($_POST);
                ?> -->
                <p>
                    <?php 
                        if(isset($_POST['fruits']) && $_POST['fruits']!=''){
                            printf("You have selected: %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING));
                        }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="POST">
                    <label for="fruits">Select any Fruit</label>
                    <select name="fruits" id="fruits">
                        <option value="" disabled selected>Select form dropdown</option>
                        <?php echo displayOptions($fruits) ?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>