<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap css file-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <!-- Adding font-awesome css -->
      <link rel="stylesheet" href="css/font-awesome.min.css">

 <!-- jQuery (Required for bootstrap javascript plugin) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Bootstrap javascript plugins -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- External JavaScript file-->
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script src="js/portfolioscript.js"></script>
  
   <!-- External CSS file -->
      <link rel="stylesheet" type="text/css" href="css/portfoliostyle.css">
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

  <title>
    <?php
      function test_input($data) {
        if(isset($data) and $data!=""){
        if(is_array($data)){
        $data = array_map('trim',$data);
        $data = array_map('stripslashes',$data);
        $data = array_map('htmlspecialchars',$data);
        }
        else{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
      }
    }
        return $data;
      }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fName"]);
    $_SESSION['fName'] = $fname;
    $lname = test_input($_POST["lName"]);
    $_SESSION['lName'] = $lname;
    echo ucwords(strtolower($fname))." ".ucwords(strtolower($lname)) ?>'s Portfolio</title>

<!-- Including Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicons/<?php echo strtolower($fname[0]); ?>.ico"/>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-fixed-top navbar-custom" role="navigation">
  <div class="container header">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle Navigation</span>
          <i class="fa fa-bars fa-lg"></i>                      
      </button>
      <a class="navbar-brand" href="#myPage">MY PORTFOLIO</a>
    </div>
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#exp1">EXPERIENCE</a></li>
        <li><a href="#edu1">EDUCATION</a></li>
        <li><a href="#proj1">PROJECTS</a></li>
        <li><a href="#contact1">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php
$error = "";
$target_file = "/Applications/XAMPP/xamppfiles/htdocs/img/profile1.png";
$allowedExts = array("tif", "bmp", "tiff", "jpeg", "jpg", "png", "gif");
  $temp = explode(".", $_FILES["profile"]["name"]);
  $extension = end($temp);

/*if ($_FILES["profile"]["error"] > 0)
  {
  echo "Error: " . $_FILES["profile"]["error"] . "<br />";
  }
else if($_FILES["profile"]["size"]>20480000){
  $error .= "File size shoud be less than 20 MB<br />";
}
else if (!in_array($extension, $allowedExts)) {
    $error .= "Extension not allowed<br />";
  }
else
  {
  echo "Upload: " . $_FILES["profile"]["name"] . "<br />";
  echo "Type: " . $_FILES["profile"]["type"] . "<br />";
  echo "Size: " . ($_FILES["profile"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["profile"]["tmp_name"];
  }
 */ move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file);
/*  if(move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file))
    echo "success";
  else
    echo "failure";
*/
?>

 <header class="intro">
    <div class="intro-body">
      <div class="container">
        <div class="profilepic">
      <img class="mypic img-circle" src="img/profile1.png" alt="My Photo">
    </div>
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-10 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
            <h1 class="myname"><?php echo strtoupper($fname)." ". strtoupper($lname); ?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-10 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
            <p class="mytitle">Software and Web Developer</p>
          </div>
        </div>
        <a href="#exp1" class="scroll-btn page-scroll">
          <span class="scroll-down">Scroll Down</span> <br>
          <i class="fa fa-angle-down"></i>
        </a>
      </div>
    </div>
  </header>

  
<?php
    $cname = test_input($_POST['cNames']);
    $_SESSION['cname'] = $cname;
    $role = test_input($_POST['cRoles']);
    $_SESSION['croles'] = $role;
    $cDesc = test_input($_POST['cDescription']);
    $_SESSION['cdesc'] = $cDesc;
    $fmonth = test_input($_POST['fmonth']);
    $_SESSION['expfmonth'] = $fmonth;
    $fyear = test_input($_POST['fyear']);
    $_SESSION['expfyear'] = $fyear;
    $tmonth = test_input($_POST['tmonth']);
    $_SESSION['exptmonth'] = $tmonth;
    $tyear = test_input($_POST['tyear']);
    $_SESSION['exptyear'] = $tyear;
    $numberoforganizations = sizeof($cname);
    if($numberoforganizations>0 AND isset($cname[0]) AND $cname[0]!=""){
        echo '<div id="exp1" class="industryexp1"></div><div id="exp" class="container industryexp"><h3 class="text-center">EXPERIENCE</h3>';
     for($i = 0; $i< $numberoforganizations; $i++)
    {
      echo '<div class="row"><div class="col-md-3 col-sm-3"><input type="image" src="img/oracle.png"></div><div class="col-sm-8 col-md-8 col-sm-offset-1 col-md-offset-1">';
      echo '<div class ="expinfo">'.ucwords(strtolower($cname[$i])).'<br>'.ucwords(strtolower($role[$i]));
      echo '<br>'.ucwords(strtolower($fmonth[$i]))." ".ucwords(strtolower($fyear[$i]))." ". '<i class="fa fa-arrow-right"></i>'." ".ucwords(strtolower($tmonth[$i]))." ".ucwords(strtolower($tyear[$i])).'</div>';
      echo '<p class = "expdesc">'.ucfirst($cDesc[$i]).'</p></div></div>';
    } 
  }
    ?>

</div>
<?php
    $name = test_input($_POST['edegree']);
    $_SESSION['edegree'] = $name;
    $major = test_input($_POST['eduMajors']);
    $_SESSION['edumajor'] = $major;
    $univ = test_input($_POST['eduUniv']);
    $_SESSION['eduuniv'] = $univ;
    $efmonth = test_input($_POST['efmonth']);
    $_SESSION['edufmonth'] = $efmonth;
    $efyear = test_input($_POST['efyear']);
     $_SESSION['edufyear'] = $efyear;   
     $etmonth = test_input($_POST['etmonth']);
    $_SESSION['edutmonth'] = $etmonth;
    $etyear = test_input($_POST['etyear']);
    $_SESSION['edutyear'] = $etyear;
    $numberofUniversities = sizeof($name);
     if($numberofUniversities>0 AND isset($name[0]) AND $name[0]!=""){
      echo '<div id="edu1" class="education1"></div><div id="edu" class="education"><div class="container"><h3 class="text-center">EDUCATION</h3><div class="eduinfo">';
     for($i = 0; $i< $numberofUniversities; $i++)
    {
      echo '<div class="row jumbotron eduwell">';
      echo '<div class="col-sm-4 col-md-4">'.ucwords(strtolower($efmonth[$i])).' '.ucwords(strtolower($efyear[$i])).' - '.ucwords(strtolower($etmonth[$i]))." ".ucwords(strtolower($etyear[$i])).'</div>';
      echo '<div class ="col-sm-4 col-md-4 col2">'.ucwords(strtolower($name[$i])).' Degree <br>'.ucwords(strtolower($major[$i])).'</div>';
      echo '<div class="col-sm-4 col-md-4">'.ucwords(strtolower($univ[$i])).'</div></div>';
    } 
  }
    ?>
  </div>
  </div>
  <!-- <div class="skills container">
    <h2 class="text-center">SKILLS</h2> 
    <div class="row">
<div class="col-sm-3 col-md-3">one<br>two<br>three</div>
<div class="col-sm-3 col-md-3 col-md-offset-1"></div>
<div class="col-sm-3 col-md-3"></div>
    </div>
  </div> -->
</div>
  <!--contact email status modal -->
  <!-- modal -->
  <div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"></h4>
        </div>
        <div class="modal-body Message">
          <p id="Message"> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php if( isset($_GET["status"] ) AND $_GET["status"]=="successp"){ ?>
    <script> 
      $('#myModalLabel').text("I'll get back to you shortly");   
      $('#Message').text("Thank you for contacting me! Please check your mailbox for the confirmation email. If you don't find the email in your inbox, please check your spam or junk folder.");
    $('#submitModal').modal('show');
  </script>
  <?php }else if( isset($_GET["status"] ) AND $_GET["status"]=="failedp") { ?>
  <script>
    $('#myModalLabel').text("Sorry Send Failed :(");
    $('#Message').text("Server encountered an internal error while sending the e-mail. Please try to reach pramodgudipati@ksu.edu");
    $('#submitModal').modal('show');
  </script>
  <?php }else if( isset($_GET["status"] ) AND $_GET["status"]=="invalidp") { ?>
  <script>
    $('#myModalLabel').text("Sorry Send Failed :(");
    $('#Message').text("Please enter a valid email address.");
    $('#submitModal').modal('show');
  </script>
  <?php }else if( isset($_GET["status"] ) AND $_GET["status"]=="retryp") { ?>
  <script>
    $('#myModalLabel').text("Sorry Send Failed :(");
    $('#Message').text("Server encountered an internal error while sending the e-mail. Please try again after some time.");
    $('#submitModal').modal('show');
  </script>
  <?php } ?>
<?php
    // collect value of input field
    $title = test_input($_POST['pTitle']);
    $_SESSION['ptitle'] = $title;
    $skills = test_input($_POST['pSkills']);
    $_SESSION['pskills'] = $skills;
    $desc = test_input($_POST['pDescription']);
    $_SESSION['desc'] = $desc;
    $pgitlink = test_input($_POST['pgitlink']);
    $_SESSION['pgitlink'] = $pgitlink;
    $numberofprojects = sizeof($title);
    ?>
    </div>

      <?php 
      if($numberofprojects>0 AND isset($title[0]) AND $title[0]!=""){
      echo '<div id="proj1" class="projects1"></div><div id="proj" class="projects container"><h3 class="text-center">PROJECTS</h3><div class="row text-center">';
        
 for($i = 0; $i< $numberofprojects; $i++)
    {
      echo '<div class ="col-sm-4"><div class="thumbnail"><img src="img/project.jpg" alt="'.ucwords(strtolower($title[$i])).'">';
      echo '<p>'.ucwords(strtolower($title[$i])).'</p>';
      echo '<p>'.ucwords(strtolower($skills[$i])).'</p>';
      echo '<button class="btn" data-toggle="modal" data-target="#'.strtok(strtolower($title[$i]), " ").'"> More Info</button></div></div>';
    }
  }
?>
</div>
</div>

  <?php 
 for($i = 0; $i< $numberofprojects; $i++)
    {
    echo '<div class="modal fade" id="'.strtok(strtolower($title[$i])," ").'" role="dialog">';
    echo '<div class="modal-dialog">'; 
      //Modal content
    echo '<div class="modal-content"><div class="modal-header">';
    echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '<h4 class="modal-title">'.ucwords(strtolower($title[$i])).'</h4></div>';
    echo '<div class="modal-body"><p>'.ucfirst($desc[$i]).'</p><p>Tools and Technologies Used: '.ucwords(strtolower($skills[$i])).'</p>';
   if(isset($pgitlink[$i]) AND $pgitlink[$i]!=""){
    echo '<div class="link">Source Code: <a href="'.$pgitlink[$i].'" target="_blank">Github</a>';
  }
    echo '</div></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
    echo '</div></div></div></div>';
 }
?>
  <!-- CONTACT SECTION -->
<?php 
$pNumber = test_input($_POST['pNumber']);
$_SESSION['pnumber'] = $pNumber;
$email = test_input($_POST['email']);
$_SESSION['email'] = $email;
?>
<div id="contact1" class="contact1"></div>
<div id="contact" class="contactheader text-center">
  <h3 class="text-center">CONTACT</h3>
<div class="contact container">
  <div class="row">
    <div class="col-sm-4">
      <p><i class="fa fa-home fa-lg"></i>Chicago, US</p>
    </div>
    <?php 
    if(isset($pNumber) and $pNumber!="")
      echo '<div class="col-sm-4"><p><i class="fa fa-mobile fa-lg"></i>'.$pNumber.'</p></div>'; 
    ?>
    <div class="col-sm-4">
      <p><i class="fa fa-envelope fa-lg"></i> <?php echo $email ?></p>
    </div>
  </div>
  <div id="contactform1" class ="jumbotron">
      <h4 class="text-center">SEND ME A MESSAGE</h4>
      <form id="contactForm" role="form" method="post" action="email.php">
      <div class="form-group">
     <div class="row">
        <div class="col-sm-5 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-5 form-group col-sm-offset-1">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-11">
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      </div>
    </div>
      <div class="row">
        <div class="col-sm-11 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
<?php 
$linkedin = test_input($_POST['linkedin']);
$_SESSION['linkedin'] = $linkedin;
$git = test_input($_POST['git']);
$_SESSION['git'] = $git;
$fb = test_input($_POST['fb']);
$_SESSION['fb'] = $fb;
$twitter = test_input($_POST['twitter']);
$_SESSION['twitter'] = $twitter;
?>
<!--Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <span class="copyright">Copyright &copy; <?php echo strtoupper($fname)." ".strtoupper($lname)." ".date("Y");?></span>
        </div>
        <div class="col-md-4 col-md-offset-2">
          <ul class="list-inline social-buttons">
            <?php 
            if(isset($linkedin) and $linkedin!="") 
              echo '<li><a href="'.$linkedin.'" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>';
              if(isset($git) and $git!="") 
              echo '<li><a href="'.$git.'" target="_blank"><i class="fa fa-github fa-2x"></i></a></li>';
              if(isset($fb) and $fb!="") 
              echo '<li><a href="'.$fb.'" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>';
              if(isset($twitter) and $twitter!="") 
              echo '<li><a href="'.$twitter.'" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>'; ?>
               </ul>
        </div>
      </div>
    </div>
  </footer>
<?php 
}
?>
</div>
<div class="edit">
<button id="myButton" class="edit_btn btn-md" >Edit</button>
<button id="final_submit" class="edit_btn btn-md">Submit</button>
</div>
<script>
    document.getElementById("myButton").onclick = function () {
        <?php $_SESSION['edit'] = "true" ; ?>
        location.href = "http://localhost/form.php";
    };

document.getElementById("final_submit").onclick = function (){
  var submission = true;
            $(".edit").remove();
            };
</script>
</body>
</html>