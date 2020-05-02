<?php
session_start();
require_once 'Classes/Token.php';

$display_messsge = "";

if(isset($_POST['username'], $_POST['csrf_token'], $_POST['password'])){

  $username = $_POST['username'];
  $csrf_token = $_POST['csrf_token'];
  $password = $_POST['password'];
			

  if(!empty($username) && !empty($password) && !empty($csrf_token))
  {
    if(Token::check($csrf_token))
    {
        echo "<script>alert('You have changed me successfully but nobody can twice');</script>";
    }
    else if(!Token::check($csrf_token))
        echo "<script>alert('Cannot be Changed.');</script>";
    }
  }
 if(!isset($_SESSION['username']))
{
    echo "<h2 align='center'> Token is NOT Match ";
 

    echo "<div align='center'>
   
</div>";

    echo "<img style ='margin-left:auto; margin-right:auto; display:block;' src='Pics/sad.png' alt='icon' />";

}

else{
$now = time();
// checking the time now when home page starts

   if($now > $_SESSION['expire'])

   {

       session_destroy();

       echo "<h2 align='center'>Token is matched <a href='index.php'>Login Here</h2></p>";

       echo "<div align='center'>
    </div>";

    echo "<img style ='margin-left:auto; margin-right:auto; display:block;' src='Pics/sus.webp' alt='icon' />";


   }

    
else
{

?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="globle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/testlogin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">


<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>Destroy Session after 1 minutes </title>

</head>

<body class="welcome_home img-responsive">
    <div class="card" style="width: 40rem;">
        <div class="card-body">
            <h5 class="card-title">Welcome <?php echo $_SESSION['username']; ?>..</h5>
            <p class="card-text">
                <h7></br>
            </p>
            <a class="btn btn-primary":(</a>
        </div>
    </div></br></br>
    <form action="logout.php" method="GET">
        <div class="alert danger-centers alert-dark" role="alert">
            <h2 class="alert-heading">Super</h2>
           
           
            <button type="submit" class="btn btn-danger btn-lg btn-block">Submit</button></br>
           


                    </section>
                </section>
            </section>

        </div>
    </form>
  <section class="container-fluid" id = "scale">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form method="POST" class="form-con">
                    <div class="form-group">
                       <h2>Change Me</h2>
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" type="username" class="form-control" aria-describedby="Username Help">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                       
                        <input type="password" name="password"  type="password" class="form-control" id="exampleInputPassword1"></br>
                       
                       
                        <input type="hidden" name="csrf_token" value="<?php echo Token::generate();?>">
                       
                        
                        <button type="submit" name="submit"    class="btn btn-primary btn-block">Submit</button>
                    </div> 
                </form>
            </section>
        </section>
    </section>
  </div>
</div>
        


    </form>




    

    <span> </span>

    </p>

    

    <?php
    }
    
}   
    ?>

</body>

</html>