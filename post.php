<?php
// Basic Mail API
// Created By Katy#0959
// ^ Please Don't Remove Credits Lol took me some time to make this site,
//   even tho 3hrs might not seem alot to someone.  Thanks :)



$blacklisted_ips = array("");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $pmessage = $_GET['punres'];

    if(in_array($_SERVER['REMOTE_ADDR'], $blacklisted_ips)){
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.2/slate/bootstrap.min.css\">\n";
        echo "    <link rel=\"stylesheet\" href=\"/assets/css/Contact-Form-Clean.css\">\n";
        echo "    <link rel=\"stylesheet\" href=\"/assets/css/styles.css\">\n";
        echo "    <div class=\"alert alert-danger\" role=\"alert\"><span><strong>Sorry, your ip has been blacklisted :/</strong><br /></span></div>\n";
    }
    else {
        if (empty($pmessage)) {
        echo "<title>API - An Error Occurred!</title>";
        echo "<h1>API Error!</h1>";
        echo "<p>You did not add a description to that ban appeal.</p>";
        }
        else{
        SendAppeal();
        echo "<p>Our ninjas have carefully sent the appeal to an administrator.</p>";
        }

    }
}


function SendAppeal(){
    mail("example@mail.com", "New Ban Appeal", $_GET['punres'] . $_SERVER['REMOTE_ADDR']);
}
?>
