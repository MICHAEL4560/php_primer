<?php include 'Snippets/header.php'?>

<body>
    <h1>Date and Time Manipulation</h1>
    <?php
        $datenow = getdate();
        echo"Today's Date: <br/>";
        echo $datenow['mday'].'<br/>';
        echo $datenow['mon'].'<br/>';
        echo $datenow['year']. "<br/>";

        echo "Today's Date:". $datenow ['mon'].'/'.  $datenow['mday'] .'/'. $datenow ['year'];

         

    ?>
<?php require 'snippets/footer.php ' ?> 