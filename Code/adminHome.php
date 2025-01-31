<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>   
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />   
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            /*-----------CARDS--------------*/
.center {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
}
.allcenter{
  margin: 270px auto;
}
.card {
  width: 600px;
  height: 250px;
  background-color: #fff;
  background: linear-gradient(#f8f8f8, #fff);
  box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
  border-radius: 6px;
  overflow: hidden;
  position: relative;
  margin: 1.5rem;
}
.card h1 {
  text-align: center;
}
.card .additional {
  position: absolute;
  width: 150px;
  height: 100%;
  background: linear-gradient(#dE685E, #EE786E);
  transition: width 0.4s;
  overflow: hidden;
  z-index: 2;
}
.card.green .additional {
  background: linear-gradient(#92bCa6, #A2CCB6);
}
.card:hover .additional {
  width: 100%;
  border-radius: 0 5px 5px 0;
}
.card .additional .user-card {
  width: 150px;
  height: 100%;
  position: relative;
  float: left;
}
.card .additional .user-card::after {
  content: "";
  display: block;
  position: absolute;
  top: 10%;
  right: -2px;
  height: 80%;
  border-left: 2px solid rgba(0,0,0,0.025);*/
}
.card .additional .user-card .level,
.card .additional .user-card .points {
  top: 15%;
  color: #fff;
  text-transform: uppercase;
  font-size: 0.75em;
  font-weight: bold;
  background: rgba(0,0,0,0.15);
  padding: 0.125rem 0.75rem;
  border-radius: 100px;
  white-space: nowrap;
}
.card .additional .user-card .approveal{
  top: 50%;
  color: #fff;
  text-transform: uppercase;
  font-size: 1em;
  font-weight: bold;
  background: rgba(0,0,0,0.15);
  padding: 0.125rem 0.75rem;
  border-radius: 100px;
  white-space: nowrap; 
}
.card .additional .user-card .points {
  top: 85%;
}
.card .additional .more-info {
  width: 300px;
  float: left;
  position: absolute;
  left: 150px;
  height: 100%;
}
.card .additional .more-info h1 {
  color: #fff;
  margin-bottom: 0;
}
.card.green .additional .more-info h1 {
  color: #4e4139;
}
.card .additional .coords {
  margin: 0 1rem;
  color: #fff;
  font-size: 1rem;
}
.card.green .additional .coords {
  color: #325C46;
}
.card .additional .coords span + span {
  float: right;
}
.card .additional .stats {
  font-size: 2rem;
  display: flex;
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  right: 1rem;
  top: auto;
  color: #fff;
}
.card .additional .stats > div {
  flex: 1;
  text-align: center;
}
.card .additional .stats i {
  display: block;
}
.card .additional .stats div.title {
  font-size: 0.75rem;
  font-weight: bold;
  text-transform: uppercase;
}
.card .additional .stats div.value {
  font-size: 0.75rem;
  font-weight: bold;
  line-height: 1.5rem;
}
.card .additional .stats div.value.infinity {
  font-size:0.75rem;
}
.card .general {
  width: 300px;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  box-sizing: border-box;
  padding: 1rem;
  padding-top: 0;
}
.card .general .more {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
  font-size: 0.9em;
}
/*-----------END CARDS--------------*/
        </style>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">CleanXCare</a>
                <div class="navbar">
                <a class = "active" href ="adminProfile.php"> <i  class ="far fa-user-circle fa-2x"></i></a>               
                </div>                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#HKers">House Keepers</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Complaints">Complaints</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Comments">Comments</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
               <h1 class="text-uppercase text-white font-weight-bold">Welcome <?php echo ($_SESSION['user']); ?> !</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Our workers are meant to help making the houses cleaner, smell nicer and feel homier, choose carefully!</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="ApplicationInfo.php">Applications</a> 
                    </div>
                </div>
            </div>
        </header>       
        <section class="page-section bg-primary" id="HKers">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Our Awesome House-Keepers!</h2>
                        <hr class="divider light my-4" />
                        <?php
     include ('connection.php');    
      //execute the SQL query and return records
      $result = mysqli_query($connection,"SELECT * FROM `housekeeper`");
      $rowN = mysqli_num_rows( $result );
      if($rowN==0){
        ?>
      <script>
    alert("There are No New Acoounts!");
    window.location.replace("adminHome.php");
    </script>
    <?php
      }         else{    
             $counter=0;
          while( $row = mysqli_fetch_assoc( $result )  ){
          $fname =   $row['FullName'];
              $age = $row['Age'];
              $pswd = $row['Password'];
              $email = $row['Email'];
              $location = $row['location'];
              $years = $row['Years'];
              $acID = $row['HkID'];
              $hp =  $row['HourPrice'];
              $exp = $row['TypeOfExp'];
              $bio =  $row['Bio'];
          ?>                        
                        <div class="card">
    <div class="additional">
      <div class="user-card">        
        <div class="points center">
         <a   class="approveal" href="indHKProfile.php?id='<?php echo($acID) ?>'">View Profile </a><br>         
        </div>        
         <img src="assets/img/HK1.jpg" width="110" height="110" viewBox="0 0 250 250" class="center" >
      </div>
      <div class="more-info">
        <h1><?php echo($fname);?></h1>
        <div class="stats">
          <div>
            <div class="title">Location: </div>
            <div class="value"><?php echo($row['location'])?></div>
          </div>
          <div>
            <div class="title">Years Of Experience:</div>
            <div class="value"><?php echo($row['Years'])?></div>
          </div>
          <div>
            <div class="title">Age:</div> 
            <div class="value"><?php echo($age)?></div>
        </div>
<div>
            <div class="title">Price/Hour:</div>
            <div class="value"><?php echo($hp)?> SR/HR</div>
          </div>
            <div>
            <div class="title">Service:</div>
            <div class="value"><?php echo($row['TypeOfExp']);?></div>
          </div>            
            <div>
            <div class="title">Brief:</div>
            <div class="value"><?php echo($row['Bio']);?></div> 
          </div>
        </div> 
      </div> 
    </div>  
  </div>
        <?php 
              $counter++;
          if($counter >1) break;}} ?>               
                        <hr class="divider my-4" />
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="All_HKers.php">All House-Keepers</a>
                    </div>
                </div>
            </div>
        </section>      
        <section class="page-section bg-renad" id="Complaints">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                <h2 class="text-center mt-0">Resolve!</h2>
                <hr class="divider my-4" />                                      
                                           <?php
     include ('connection.php');     
      //execute the SQL query and return records
      $result = mysqli_query($connection,"SELECT IndCID, Comp, indcomp.Email, indcomp.indID, FullName FROM `indcomp` INNER JOIN individual on individual.indID=indcomp.indID WHERE Status ='New'");
      $rowN = mysqli_num_rows( $result );
      if($rowN==0){
        ?>
      <script>
    alert("There are No complaints! All good!");
    window.location.replace("adminHome.php");
    </script>
    <?php          
      }
         else{    
             $counter=0;
          while( $row = mysqli_fetch_assoc( $result )  ){
              $indCID =  $row['IndCID'];
              $indID = $row['indID'];
              $email = $row['Email'];
              $Comp = $row['Comp'];
          ?>                        
                        <div class="card">
    <div class="additional">
      <div class="user-card">        
        <div class="points center">
         <a   class="approveal" href="mailto:<?php echo($email) ?>">Resolve</a><br>         
        </div>       
      </div>
      <div class="more-info">
        <h1><?php echo($row['FullName']);?></h1>
        <div class="stats">
          <div>
            <div class="title">Complaint: </div>
            <div class="value"><?php echo($Comp)?></div>
          </div>
        </div> 
      </div> 
    </div>     
  </div>
        <?php 
              $counter++;
          if($counter >1) break;}} ?>            
               <div class=" text-center">
                <p><br></p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="All_Complaints.php">All Complaints</a>
               
                </div>              
                   </div></div></div>
 <section class="page-section bg-primary" id="Comments">
<div class="container">
<div >



<h2 class="text-center mt-0">Hear them out!</h2>
<hr class="divider my-4" />
<div class="row justify-content-center">
<div class="col-lg-8 text-center">





<?php
include ('connection.php');


//execute the SQL query and return records
$result = mysqli_query($connection,"SELECT * FROM `comments` WHERE Status ='New'");
$rowN = mysqli_num_rows( $result );

if($rowN==0){
?>
<!-- <script>
alert("There are no comments!");
window.location.replace("adminHome.php");
</script> -->
<?php

}
else{ 
$counter=0;
while( $row = mysqli_fetch_assoc( $result ) ){
$comID = $row['CommID'];
$name = $row['name'];
$Comment = $row['Comment'];



?>

<div class="card">
<div class="additional">
<div class="user-card">

<div class="points center">

<a class="approveal" href="Accept_Comment.php?id='<?php echo($comID) ?>'">Accept </a><br>
<a class="approveal" href="Delete_Comment.php?id='<?php echo($comID) ?>'"> Delete</a>

</div>


</div>
<div class="more-info">
<h1><?php echo($name);?></h1>
<div class="stats">
<div>
<div class="title">Comment: </div>

<div class="value"><?php echo($Comment)?></div>
</div>

</div> 
</div> 
</div>




</div>

<?php $counter++;
if($counter >1) break;}} ?> 

<div class=" text-center">

<p><br></p>
<a class="btn btn-light btn-xl js-scroll-trigger" href="All_Comments.php">All Comments</a> 
</div>




</div></div>







</div>
</div>
</section>
      <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - CleanXCare</div></div>
        </footer>        
    </body>
</html>