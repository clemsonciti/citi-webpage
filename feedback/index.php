---
layout: page 
title: Feedback
permalink: /feedback/
---


<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>

<p>CITI Group will appreciate any comments and feedback regarding activities of the 
group. Please fill in the form below to send us your comments.</p> 


    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">

    <b>Name</b><br>
    <input name="name" type="text" value="" size="45"/><br>

    <b>Clemson ID</b><br>
    <input name="username" type="text" value="<?php $parts = explode("@", $_SERVER["PHP_AUTH_USER"]); echo $parts[0]; ?>" disabled size="45"/><br>

    <b>Comments</b><br>
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

