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
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eos modi, odio debitis maxime quae velit nesciunt ea obcaecati quod expedita ipsa, amet aspernatur adipisci pariatur commodi consequatur. Asperiores, assumenda?
            </p>
            <p>
                <?php if(isset($_GET['fname']) && !empty($_GET['fname'])): ?>
                First Name: <?php echo $_GET['fname']; ?><br>
                <?php endif; ?>
                <?php if(isset($_GET['lname']) && !empty($_GET['lname'])): ?>
                Last Name: <?php echo $_GET['lname']; ?><br>
                <?php endif; ?>
            </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="">
                <label for="fname">Frist Name</label>
                <input type="text" name="fname" id= "fname" >
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">
                <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                
    </div>
    
              
</body>
</html>