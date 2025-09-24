<?php 
$fanlistingname = "testinglisting"; // <-- change this to whatever fanlisting you want
$formresults = ""; // always exists, even before POST
?>
<?php include "connection.php"?>

<!DOCTYPE html>
<html>
<head>    
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=0.5">
  <title>testing listing for testing listings</title>
  <meta name="description" content="listing for people testing their listings">
  <link rel="icon" href="https://mal.ophanimkei.com/images/halo.ico">
  <link href="style.css" rel="stylesheet" type="text/css" media="all">
  <base target="_parent">

    </head>


    <div  class = "box"> 
            <img src="qhayashida.png" width="100%;">

            <h1>testing listing for testing listings</h1>
              
            <div class="nav">
                <a href="#welcome">Welcome</a> |
                <a href="#fanlisting">Fanlisting?</a> |
                <a href="#rules">Rules</a> |
                <a href="#codes">Codes</a> |
                <a href="#form">Join</a> |
                <a href="#members">Members</a>
              </div>

              <h2 id="welcome">Welcome</h2>


                <p>I like to keep everything on one page a lot of the time, but splitting it up and making custom pages is very easy if you want to. Perhaps I'll make more templates someday or someone else will.</p>

                <p>All of the 'scary' PHP is in its own file too so it's even easier to make custom pages since you can just include the members and form and date files!</p>

                <p>Can add your own wikis.. About pages.. rearrange everything.. bla bla bla.. Or keep like this. I'm not your mom.</p>
                
                <br>
               ⪻────𖤓────⪼
                <br>

                <h2 id="fanlisting">Fanlisting?</h2>
                
                <p>According to TheFanListings.org, A fanlisting is simply an online list of fans of a subject, such as a TV show, actor, or musician, that is created by an individual and open for fans from around the world to join. There are no costs, and the only requirements to join a fanlisting are your name and country. Fanlistings do not have to be large sites (although some are); they are just a place where you can sign up with other fans. </p>
                
                <p>I like to link to TAFL here a lot (or TFL is needed.)</p>
        
                
                <br>
               ⪻────𖤓────⪼
                <br>
                                
                <h2 id="rules">Rules</h2>
                <ul>
                    <li>All you need to join this fanlisting are a name or nickname, valid e-mail address or website, and country.</li>
                        
                        <li>Do not hotlink the codes.</li>
                        
                        <li>If you need your information updated, please <a href="#">email</a> me.</li>
                </ul>

                <br>
               ⪻────𖤓────⪼
                <br>
                
                <?php include "lastonline.php"?>
                <br>
                
                <br>
                ⪻────𖤓────⪼
                <br>


                <h2 id="codes">Codes</h2>

                <br>

                <img src="button1.png">
                <img src="button2.png">
                <img src="button3.png">
                <img src="button4.png">


        <br>
            
            
            </center>

            
                
    <center>
        
    <!--this spits out listing info-->
      <?php include "form.php"?>
      <?php include "members.php"?>