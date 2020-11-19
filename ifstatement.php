<?php include 'Snippets/header.php'?>

<body>
        <h1>if statements</h1>

    <h3 style ="color: red"></h3>
   <?php  
   //if statements

   echo "<h2> If Statements </h2>"; 

   $grade = 90;

   if($grade >= 50) {
       echo '<h3 style="color: green"> YOU HAVE PASSED </h3>';
   }
   else {
       echo '<h3 style= "color: red">YOU HAVE FAILED<h/3>';
   }
   $grade = 'A';
    // if-else
    

   ?> 
<?php require 'snippets/footer.php ' ?> 