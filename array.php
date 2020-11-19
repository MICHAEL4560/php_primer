<?php include 'includes/header.php'?>

<body>
<h1> Arrays</h1>
   <?php
        $numbers =  array(1,2,3,4,5,6,7,8,9,10,12,65,36,78,52,65,687,45);
        
        echo $numbers[5];

        echo "<p>$numbers[9]</P>";

        $size = count($numbers);
        echo"<p> ARRAY NUMBER IS SIZE: $size</p>";

        for ($count = 0; $count < $size; $count++){
            echo"<p>$numbers[$count]</p>";
        }

   
   
   ?>


<?php require 'includes/footer.php' ?> 

