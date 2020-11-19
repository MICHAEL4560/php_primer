<?php include 'Snippets/header.php'?>

<body>

<?php
//Concatenation of strings
$phrase1 = "Student that came late";
$phrase2 = "Studen that came early";
$name= "Michael Martin";
echo $phrase1 ." Named Michael,". $phrase2;
echo '<br>';
echo '<hr/>';
//string transformation

echo 'Uppercase first letter:' .ucfirst($name). '<br/>';
echo 'Uppercase first letter of each word:' .ucwords($name). '<br/>';
echo 'Upper case:'. strtoupper($name).'<br/>';
echo 'Lower case:'. strtolower("THIS WAS ALL UPPER CASE").'<br/>'.'<br/>';
echo '<hr/>';
echo'repeat string:' .str_repeat('a',10). '<br/>';

echo 'Get a Substring:' .substr($name, 5, 10). '<br/>';



?>
    
    <?php require 'snippets/footer.php ' ?> 