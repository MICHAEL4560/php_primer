<?php include 'includes/header.php'?>

<body>

<h1>Switch Statements</h1>
<?php

 $grade = 'B';

 switch($grade) {
     case 'A':
        echo '<h2 style="color: green">>YOU ARE A SUPERSTAR!!!</h2>';
            break;
     case 'B' :  
        echo '<h2 style="color: blue">>YOU DID WELL!</h2>';
            break;

      default:
        echo '<h2 style="color: blue">>YOU HAVE FAILED.</h2>';
        break;


        }
?>
    
    <?php require 'includes/footer.php' ?> 