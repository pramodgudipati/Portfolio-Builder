<?php 
session_start();
?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">

        <!-- Including Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>

        <!-- Bootstrap css file-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Adding font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- External CSS file -->
        <link rel="stylesheet" type="text/css" href="css/formstyle.css">

        <!-- jQuery (Required for bootstrap javascript plugin) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Bootstrap javascript plugins -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <!-- External JavaScript file-->
        <script src="js/jquery.nav.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/formscript.js"></script>
        <title>Portfolio Builder</title>
      </head>
        <body>
          <script type="text/javascript">
          function sendSection(str){
            $("." + str).show();
            }
          </script>
        <div class="container complete">
          <header>
          <h1> Portfolio Builder</h1>
        </header>
          <form method="post" action="portfolio.php" role="form" enctype="multipart/form-data">
            <div class="about" id="about">
           <h2>About</h2>
           <div class="form-group form-group-md">
            <div class="row">
              <div class="col-sm-4 col-md-4">
               <label class="control-label" for="fName">First Name <strong>*</strong></label>
               <input type="text" name="fName" class="form-control" value="<?PHP if(isset($_SESSION['fName']) || !empty($_SESSION['fName'])) { echo $_SESSION['fName']; } ?>" required>
             </div>
             <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
              <label class="control-label" for="lName">Last Name <strong>*</strong></label>
              <input type="text" name="lName" class="form-control" value="<?PHP if(isset($_SESSION['lName']) || !empty($_SESSION['lName'])) { echo $_SESSION['lName']; } ?>" required>
            </div>
            </div>
          </div>
          <div>
            <input type="hidden" name="listSection" value="">
            <label class="control-label" for="sections">Select:</label>
            <select type="dropdown" name="sections" onchange="sendSection(this.value)" multiple="multiple">
            <option value="projects">Projects</option>
            <option value="experiences">Experience</option>
            <option value="education">Education</option>
          </select>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4 col-md-4">
               <label class="control-label" for="email">E-mail <strong>*</strong></label>
               <input type="email" name="email" class="form-control" value="<?PHP if(isset($_SESSION['email']) || !empty($_SESSION['email'])) { echo $_SESSION['email']; } ?>" required>
             </div>
             <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
               <label class="control-label" for="pNumber">Phone Number</label>
               <input type="tel" name="pNumber" class="form-control" value="<?PHP if(isset($_SESSION['pnumber']) || !empty($_SESSION['pnumber'])) { echo $_SESSION['pnumber']; } ?>">
             </div>
           </div>
         </div>
         <div class="form-group">
            <div class="row">
              <div class="col-sm-4 col-md-4">
               <label class="control-label" for="git">GitHub Profile</label>
               <input type="url" name="git" class="form-control" value="<?PHP if(isset($_SESSION['git']) || !empty($_SESSION['git'])) { echo $_SESSION['git']; } ?>" pattern="https?://.+">
             </div>
             <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
              <label class="control-label" for="linkedin">LinkedIn Profile</label>
              <input type="url" name="linkedin" class="form-control" value="<?PHP if(isset($_SESSION['linkedin']) || !empty($_SESSION['linkedin'])) { echo $_SESSION['linkedin']; } ?>" pattern="https?://.+">
            </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4 col-md-4">
               <label class="control-label" for="git">Facebook Profile</label>
               <input type="url" name="fb" class="form-control" value="<?PHP if(isset($_SESSION['fb']) || !empty($_SESSION['fb'])) { echo $_SESSION['fb']; } ?>" pattern="https?://.+">
             </div>
             <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
              <label class="control-label" for="linkedin">Twitter Profile</label>
              <input type="url" name="twitter" class="form-control" value="<?PHP if(isset($_SESSION['twitter']) || !empty($_SESSION['twitter'])) { echo $_SESSION['twitter']; } ?>" pattern="https?://.+">
            </div>
            </div>
          </div>
         <div class="form-group">
          <div class="row">
             <div class="col-sm-4 col-md-4">
          <label class="control-label" for="resume">Resume </label>
         <input type="file" name="resume" accept=".doc,.pdf,.txt">
         </div>
          <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
             <label class="control-label" for="profile">Profile Picture </label>
             <input type="file" name="profile" accept="image/*"> 
          </div>
  </div>
       </div>
     </div>
      <div class="projects" id="projects">
          <h2>Projects</h2>
         <div class="proj" id="proj1"> 
         <div class="form-group"> 
           <div class="row">
            <div class="col-sm-4 col-md-4">
              <label class="control-label title_prj" for= "ID1title">Title <strong>*</strong></label>
              <input type="text" name="pTitle[]" id = "ID1title" class="form-control input_title">
            </div>
            <div class="col-sm-4 col-md-4 col-md-offset-1">
              <label class="control-label skills_prj" for="ID1skills">Skills</label>
              <input type="text" name="pSkills[]" id = "ID1skills" class="form-control input_skills">
            </div>
            <div class="col-sm-1 col-md-1">
            <button type="button" class="rem_proj_btn close" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
            </div>
            </div>
          </div>
          <div class="form-group">
          <div class="row">
          <div class="col-sm-4 col-md-4">
               <label class="control-label git_prj" for="ID1git">GitHub Link </label>
               <input type="url" name="pgitlink[]" id="ID1git" class="form-control input_git" pattern="https?://.+">
             </div>
           </div>
         </div>
          <div class="form-group">
            <div class="row">
            <label class="control-label col-sm-1 col-md-1 desc_prj" for="ID1desc">Description</label>
            <div class="col-sm-8 col-md-8"><textarea name="pDescription[]" id="ID1desc" rows="3" class="form-control input_desc"></textarea>
            </div></div>   
        </div>
        <div class="form-group">
          <div class="row">
           <div class="col-sm-6 col-md-6">
            <button type="button" class="btn btn-info add_proj_btn">Add</button>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class="experiences" id="experiences">
          <h2>Industry Experience</h2>
         <div class="exp" id="exp1"> 
         <div class="form-group"> 
           <div class="row">
            <div class="col-sm-4 col-md-4">
              <label class="control-label title_exp" for= "ID1cname">Company Name <strong>*</strong></label>
              <input type="text" name="cNames[]" id = "ID1cname" class="form-control input_cName">
            </div>
            <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
              <label class="control-label role_exp" for="ID1crole">Role <strong>*</strong></label>
              <input type="text" name="cRoles[]" id="ID1crole" class="form-control input_cRole">
            </div>
            <div class="col-sm-2 col-md-1">
            <button type="button" class="rem_exp_btn close" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
            </div>
            </div>
          </div>
          <div class="form-group"> 
           <div class="row">
            <div class="col-sm-3 col-md-3">
              <label class="control-label from_exp" for="ID1cfrommonth">From </label>        
              <select id="ID1cfrommonth" class="input_cfrommonth" name="fmonth[]">
                <option value="" selected>Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
          </select>
           <select id="ID1cfromyear" class="input_cfromyear" name="fyear[]">
                <option value="" selected>Year</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
          </select>
           </div>
            <div class="col-sm-3 col-md-3">
            <label class="control-label to_exp" for= "ID1ctomonth">To</label>
                <select id="ID1ctomonth" class="input_ctomonth" name="tmonth[]">
                <option value="" selected>Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
                <select id="ID1ctoyear" class="input_ctoyear" name="tyear[]">
                <option value="" selected>Year</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
          </select>
            </div>
            <div class="col-sm-6 col-md-6">
            </div>
</div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-1 col-md-1 desc_exp" for="ID1cdesc">Description</label>
            <div class="col-sm-8 col-md-8"><textarea name="cDescription[]" id="ID1cdesc" rows="3" class="form-control input_cDesc"></textarea>
            </div>   
        </div>
        <div class="form-group">
          <div class="row">
           <div class="col-sm-6 col-md-6">
            <button type="button" class="btn btn-info add_exp_btn">Add</button>
          </div>
        </div>
        </div>
      </div>
    </div>

     <div class="education" id="education">
          <h2>Education</h2>
         <div class="edu" id="edu1"> 
         <div class="form-group"> 
           <div class="row">
            <div class="col-sm-4 col-md-4">
              <label class="control-label degree_edu" for= "ID1edegree"> Degree of Education <strong>*</strong></label>
           <select class="input_edegree" id ="ID1edegree" name="edegree[]">
                <option value="" selected>Select</option>
                <option value="Master's">Master's</option> 
<option value="Bachelor's">Bachelor's</option> 
</select>
                 </div>

                  <div class="col-sm-5 col-md-5">
                  </div>
                  <div class="col-sm-2 col-md-1">
            <button type="button" class="rem_edu_btn close" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
            </div>
               </div></div>
                  <div class="form-group"> 
                 <div class="row">
            <div class="col-sm-4 col-md-4">
              <label class="control-label major_edu" for="ID1major">Major</label>
              <input type="text" name="eduMajors[]" id="ID1major" class="form-control input_eduMajor">
            </div>
             <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
            <label class="control-label univ_edu" for="ID1univ">University</label>
              <input type="text" name="eduUniv[]" id="ID1univ" class="form-control input_eduUniv">
               </div>
            </div>
          </div>
           <div class="form-group"> 
           <div class="row">
            <div class="col-sm-3 col-md-3">
              <label class="control-label from_edu" for="ID1efrommonth">From: </label>        
              <select id="ID1efrommonth" class="input_efrommonth" name="efmonth[]">
                <option value="" selected>Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
          </select>
           <select id="ID1efromyear" class="input_efromyear" name="efyear[]">
                <option value="" selected>Year</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
          </select>
           </div>
            <div class="col-sm-3 col-md-3">
            <label class="control-label to_edu" for= "ID1etomonth">To: </label>
                <select id="ID1etomonth" class="input_etomonth" name="etmonth[]">
                <option value="" selected>Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
                <select id="ID1etoyear" class="input_etoyear" name="etyear[]">
                <option value="" selected>Year</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
          </select>
            </div>
            <div class="col-sm-6 col-md-6">
            </div>
            </div>
          </div>
        <div class="form-group">
          <div class="row">
           <div class="col-sm-6 col-md-6">
            <button type="button" class="btn btn-info add_edu_btn">Add</button>
          </div>
        </div>
        </div>
      </div>
    </div>
      <button type="submit" class="btn btn-default submt">Submit</button>
        </form>
        </div>
<script type="text/javascript">

window.onload = function(){
  <?php 
if(isset($_SESSION['edit'])and ($_SESSION['edit'] == "true")){
  if(isset($_SESSION['ptitle']) and $_SESSION['ptitle'][0]!=""){
  $title = $_SESSION['ptitle'];
  $skills = $_SESSION['pskills'];
  $desc = $_SESSION['desc'];
  $pgitlink = $_SESSION['pgitlink'];
$count = sizeof($title);?>
  $(".projects").show();
<?php
for($i=0; $i<$count;$i++)
{?>
document.getElementById("ID"+<?php echo $i+1 ;?>+"title").value = "<?php echo $title[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"skills").value = "<?php echo $skills[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"desc").value = "<?php $desc[$i] = str_replace(array("\r","\n"),'',$desc[$i]); echo $desc[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"git").value = "<?php echo $pgitlink[$i];?>";
var x = <?php echo intval($i); ?>;
var y = <?php echo intval($count-1); ?>; 
var xs= document.getElementsByClassName("add_proj_btn");
if(!(x === y))
xs[<?php echo intval($i); ?>].click();
<?php
}
}
 if(isset($_SESSION['cname']) and $_SESSION['cname'][0]!=""){
    $cname = $_SESSION['cname'];
    $role = $_SESSION['croles'];
    $cDesc = $_SESSION['cdesc'];
    $fmonth = $_SESSION['expfmonth'];
    $fyear = $_SESSION['expfyear'];
    $tmonth = $_SESSION['exptmonth'];
    $tyear = $_SESSION['exptyear'];
    $ccount = sizeof($cname); ?>
    $(".experiences").show();
    <?php
    for($i=0; $i<$ccount;$i++)
      {?>
document.getElementById("ID"+<?php echo $i+1 ;?>+"cname").value = "<?php echo $cname[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"crole").value = "<?php echo $role[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"cdesc").value = "<?php $cDesc[$i] = str_replace(array("\r","\n"),'', $cDesc[$i]); echo $cDesc[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"cfrommonth").value = "<?php echo $fmonth[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"cfromyear").value = "<?php echo $fyear[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"ctomonth").value = "<?php echo $tmonth[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"ctoyear").value = "<?php echo $tyear[$i];?>";

var x = <?php echo intval($i); ?>;
var y = <?php echo intval($ccount-1); ?>; 
var xs= document.getElementsByClassName("add_exp_btn");
if(!(x === y))
xs[<?php echo intval($i); ?>].click();
<?php
      }
  }

   if(isset($_SESSION['edegree']) and $_SESSION['edegree'][0]!=""){
    $edegree = $_SESSION['edegree'];
    $emajor = $_SESSION['edumajor'];
    $euniv = $_SESSION['eduuniv'];
    $efmonth = $_SESSION['edufmonth'];
    $efyear = $_SESSION['edufyear'];   
    $etmonth = $_SESSION['edutmonth'];
    $etyear = $_SESSION['edutyear'];
    $ecount = sizeof($edegree); ?>
    $(".education").show();
    <?php
    for($i=0; $i<$ecount ; $i++)
      {?>
document.getElementById("ID"+<?php echo $i+1 ;?>+"edegree").value = "<?php echo $edegree[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"major").value = "<?php echo $emajor[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"univ").value = "<?php echo $euniv[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"efrommonth").value = "<?php echo $efmonth[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"efromyear").value = "<?php echo $efyear[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"etomonth").value = "<?php echo $etmonth[$i];?>";
document.getElementById("ID"+<?php echo $i+1 ;?>+"etoyear").value = "<?php echo $etyear[$i];?>";

var x = <?php echo intval($i); ?>;
var y = <?php echo intval($ecount-1); ?>; 
var xs= document.getElementsByClassName("add_edu_btn");
if(!(x === y))
xs[<?php echo intval($i); ?>].click();
<?php
    }
   }
}
session_destroy();
?>
 };
</script>  
</body>
</html>