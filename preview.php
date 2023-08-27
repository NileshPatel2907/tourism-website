<?php
session_start();
$email = "";
if (isset($_SESSION['login'])){
$email = $_SESSION['email'];
require "database.php";
$sql = "SELECT * FROM `register` WHERE email ='$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
}

?>

</form>
</div>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="redirect.js"></script> 

    <title>Welcome</title>
  </head>
  <body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">TOURISM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
         <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link"  href="home.php">Home</a>
        </li>    
      </ul>
       
      </form> 
    </div>
  </div>
</nav>

  <div id="main-content">
    <!-- ********************************************************************************************* -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <div class="container">
        <div class="team-single">
            <div class="row">
                <br></br>
                
      <div class="col-lg-8 col-md-7">
          <div class="team-single-text padding-50px-left sm-no-padding-left">
              <h4 class="font-size38 sm-font-size32 xs-font-size30">Welcome <?php echo $row['firstname']?> <?php echo $row['lastname'];?></h4>
              <br><br>
              <br><br>
              <br><br>
          </div>
      </div>

      <div class="col-md-12">
          <!-- Add icon library -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <div class="card">
          <h1><b><i class = "name"><?php echo $row['firstname']; ?> <?php echo $row['lastname'];?></b></h1></i>
          <p class="title"><i class="fa fa-envelope"></i><?php echo " ".$row['email']?></p>
          <p><i class="fa fa-home"></i><?php echo " ".$row['address'];?></p>
          <p><i class="fa fa-user-o"></i> <?php echo $row['gender'];?></p>
          <p><i class='fas fa-mountain fa-lg'></i> Your Booked Package is:- <?php echo $row['package'];?></p>
                   

          <p><button class="button1">Contact: <?php echo $row['mobile'];?> </button></p>
          </div>
          
      </div>
            </div><br>
            <center><a href="logout.php"><button type="button" id="logout-btn" class="btn btn-outline-dark">Log out</button></a></center>
        </div>
    </div>
  </div>    
</div>
<script>
  $(document).ready(function(){
    // To update Form
    
    $('#back-btn').click(function(){
        $('#main-content').load('preview.php');
    });
  });
</script>
</body>
</html>

<style>
  .card {
    box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
    max-width: 500px;
    margin: auto;
    text-align: center;
    background-color: #E4F4F3;
  }

  .title {
    /* color: blue; */
    font-size: 25px;
  }
.name {
  font-family: Baskerville;
  color: #870005;
}
  .button1 {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: black;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 20px;
  }

  a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }

  button:hover, a:hover {
    opacity: 0.7;
  }
  
</style>