<?php include 'includes/header.php'?>


<!-- Basic HTML -->
    <h1> Hello World - PHP Primer </h1>
 <br/>   
<?php    
 //Printing to HTML using code
 echo "Hello PHP";
 //you can echo HTML tags
 echo "<br/>";
 echo 'second line';
 echo "<br/>";

?>

<?php
//variables need a '$".  They are not strongley typed

$name = 'Michael Martin';
$age = 28;
//echo vaiables

echo $name;
echo '<h1> My Name is :' .$name. '</h1>';
echo '<h1> My age is :' .$age. '</h1>';


?>

<button type="button" class="btn btn-dark"> CLICK ME!</button>

<?php require 'includes/footer.php' ?> 