<?php 
include_once "functions.php";
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
                <h1>Our First Form</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga error repudiandae possimus ea inventore, dolore rerum dolor facere animi consectetur!
                </p>
                <p>
                    <?php 
                        $fname="";
                        $lname="";
                        $checked ="";
                        if(isset($_REQUEST['cb1']) && !empty($_REQUEST['cb1'])){
                            $checked ="checked";
                        }
                        // print_r($_REQUEST);
                    ?>

                    <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname']))
                    // $fname=htmlspecialchars($_REQUEST['fname']);
                    $fname=filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING); // use for remove any tags
                    ?>
                    <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname']))
                    // $lname=htmlspecialchars($_REQUEST['lname']);
                    $lname=filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING); //php sanetization
                    ?>
                </p>
                <!-- <p>
                        First Name : <?php echo $fname ?><br>
                        Last Name : <?php echo $lname ?><br>
                </p> -->
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="POST">
                <label for="fname">Frist Name</label>
                <input type="text" name="fname" id= "fname" value="<?=$fname?>">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?=$lname?>">
                <div>
                    <input type="checkbox" name ="cb1" id= "cb1" value="1" <?php echo $checked ?>> 
                    <lable for="cb1" class="label-inline">Some Checkbox</lable>
                </div>
                <label for="" class ="label">Select Some Fruits</label>

                <input type="checkbox" id="ch1" name="fruits[]" value="Orange" <?php isChecked('fruits','Orange') ?>>
                <label for="ch1" class="label-inline">Orange</label><br/>
                <input type="checkbox" id="ch2" name="fruits[]" value="Mango" <?php isChecked('fruits','Mango') ?>>
                <label for="ch2" class="label-inline">Mango</label><br/>
                <input type="checkbox" id="ch3" name="fruits[]" value="Jackfruits" <?php isChecked('fruits','Jackfruits') ?>>
                <label for="ch3" class="label-inline">Jackfruits</label><br/>
                <input type="checkbox" id="ch4" name="fruits[]" value="Banana" <?php isChecked('fruits','Banana') ?>>
                <label for="ch4" class="label-inline">Banana</label><br/>


                <button type="submit">Submit</button>
                </form>
            </div>
        </div>      
    </div>            
</body>
</html>