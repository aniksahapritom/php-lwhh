<?php 
$allowTypes = array(
    'image/png',
    'image/jpg',
    'image/jpeg'
);
if($_FILES['Photo']){

    // if($_FILES['Photo']['type']=='image/png' || $_FILES['Photo']['type']=='image/jpeg' || $_FILES['Photo']['type']=='image/jpg'){

        if(in_array($_FILES['Photo']['type'], $allowTypes)!==false && $_FILES['Photo']['name']<=100*1024){ //we can upload any png or jpg or jpeg file and size need to maximum 100 KB.
    move_uploaded_file($_FILES['Photo']['tmp_name'], 'files/'.$_FILES['Photo']['name'] );
}
}
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
                <h1>Input File</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci libero inventore ipsam voluptates omnis id magni dolorum maxime placeat similique?</p>
            
                <?php 
                $fname ="";
                $lname ="";

                if(isset($_POST["fname"]) && !empty($_POST["fname"])){
                    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
                }
                if(isset($_POST["lname"]) && !empty($_POST["lname"])){
                    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
                }
                
                ?>
                <!-- <p>
                    First Name: <?php echo $fname; ?><br/>
                    Last Name: <?php echo $lname; ?>
                </p> -->
                <p>
                    <pre>
                        <?php 
                        print_r($_POST);
                        print_r($_FILES);
                        ?>
                    </pre>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="fname">First name:</label>
                    <input type="text" name="fname" id = "fname" value = "<?=$fname?>"><br/>
                    <label for="lname">Last Name:</label>
                    <input type="text" name="lname" id = "lname" value = "<?=$lname?>"><br/>
                    <label for="Photo">File Upload:</label>
                    <input type="file" name="Photo" id = "Photo"><br/>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>