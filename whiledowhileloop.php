<?php include 'includes/header.php'?>

<body>
<h1> While Loop<h1>
<?php

    $grade = 0;

    //iNFINITE lOOP
   // while($grade <10){
 // echo '<p> I AM LESS THAN 10!</P>';
  // }

        //Pre condition loop
        while ($grade <10){


           echo '<p> I AM LESS THAN 10!</P>';
            $grade++;
  
        }
         echo'EXIT LOOP';


    

?>


<h1> Do-While Loop</h1>

<?php

        //Post Condition Loop
        $grade=0;
  do{
     
    echo'<P>I AM DO WHILE LOOP</P>';
    $grade++;

  }while($grade <10);


?>
    
    <?php require 'includes/footer.php ' ?> 