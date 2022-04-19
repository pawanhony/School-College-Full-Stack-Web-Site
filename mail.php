<?php

// multiple recipients (note the commas)
$to = "deepakhony@gmail.com";
//$to .= "pawanhony@gmail.com, ";
//$to .= "deepakhony@ymail.com";

// subject
$subject = "Test";

// compose message
$message = "
<html> <head> <title>Title deepak</title> </head> <body> <h1>Topic raju</h1>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
       Nam iaculis pede ac quam. Etiam placerat suscipit nulla.
       Maecenas id mauris eget tortor facilisis egestas.
       Praesent ac augue sed <a href=\"http://tiwarytutorials.com/\">enim</a> aliquam auctor.
       Pellentesque convallis tempor tortor. Nullam nec purus.</p> </body> </html> ";
// send email
if (mail("deepakhony@gmail.com", '$subject', '$message', "From: tiwarytutorials@gmail.com")){
echo "mail send";
}else{
echo " mail Not send";
}


?>