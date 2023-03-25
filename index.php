<?php
    phpinfo();    

    const website = "https://omar-hussein-a690b.firebaseapp.com/";
    echo(website)."<br>";
    echo "Server name is :".$_SERVER['SERVER_NAME']."<br>";
    echo "HTTP host is :".$_SERVER['HTTP_HOST']."<br>";
    echo "Server Address is ==> ".$_SERVER['SERVER_ADDR']."<br>";
    echo "Port is open at :".$_SERVER['REMOTE_PORT']."<br>";
    echo "Absloute file path is: ".$_SERVER['SCRIPT_FILENAME']."<br>";

    $age = 10;

    switch($age){
        case $age<5:
            echo("stay at home");
            break;
                
        case $age===5:
            echo("Go to Kindergarden");
            break;
        
        case ($age>6 && $age<12):
            echo("Go to grade $age");    
            break;
    }
?>


