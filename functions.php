<?php include 'Snippets/header.php'?>

<body>
 
 <h1>Functions</h1>

 <?php


    /*Defining Fucntion*/


    function WriteMessage(){

        echo "Have a nice day! </br>";
    }

    //Calling a fucntion
        
    WriteMessage();

    function addFunction($num1, $num2)
    {
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is : $sum </br>";
        }
        $num =800;
        addFunction(10,20);
        addFunction(10,$num);
        


?>

    
<?php require 'snippets/footer.php ' ?> 