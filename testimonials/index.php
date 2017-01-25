---
layout: page 
title: Testimonials
permalink: /testimonials/
---


<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>

<p>Sustainability and growth of the research computing resources like Palmetto
cluster depend on their importance to the community and positive feedback on how 
they impact and enhance research.</p>

<p>We would highly appreciate short information on how Palmetto cluster and other
parts of research cyberinfrastructure have impacted your research and/or education
at Clemson University.</p>

<p>Your input will help us sustain and expand the research cyberinfrastructure at Clemson
University! Thank you!</p>


    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">

    <b>Name</b><br>
    <input name="name" type="text" value="" size="45"/><br>

    <b>Clemson ID</b><br>
    <input name="username" type="text" value="<?php $parts = explode("@", $_SERVER["PHP_AUTH_USER"]); echo $parts[0]; ?>" disabled size="45"/><br>

    <b>Testimonial</b><br>
    <textarea name="feedback" rows="15" cols="45" style="height: 200px;"></textarea><br>

    <input class="button-primary" type="submit" value="Send comments"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {

    $parts = explode("@", $_SERVER["PHP_AUTH_USER"]); 
    $username = $parts[0];;

    $feedback=$_REQUEST['feedback'];
    if (($username=="")||($feedback==""))
        {
		echo "All fields are required, please fill again.";
	    }
    else{		

$body = <<<EOT
$_REQUEST[name] is sending feedback about CITI 

User ID: $username

Users feedback:
----------------------------------------------------------------
$_REQUEST[feedback]
----------------------------------------------------------------

EOT;

       $to = "zziolko@clemson.edu";
       $headers = "From: $username@clemson.edu"; 
       $subject="CITI Feedback form";
		mail($to, $subject, $body, $headers);
		echo "<h1>Thank you very much! <br>CITI Group</h1>";
	    }
    }  
?>

