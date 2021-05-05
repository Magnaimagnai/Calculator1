<?php
if(isset($_POST['email1'])){              //shalgah isset
    $email1 = $_POST['email1'];
}
if(isset($_POST['name1'])){  
    $name1 = $_POST['name1'];
}
if(isset($_POST['message1'])){
     $message1 = $_POST['message1'];
}

$oguulber = "Variables can store data of different types, and different data types can do different things.";
// https://www.w3schools.com/php/php_operators.asp

// $x = 10;  
// $y = "10";

// echo $x != $y;


// echo "<hr>";
switch ($email1) {
  case "":
    echo "email hooson bna";
    break;
  case "magnai31@yahoo.com":
    echo "Magnai, is that you?";
    break;
  case "$email":
    echo "email huleen avlaa";
    break;
  default:
    echo "BURTGEL DUUSLAA";
}
?>

<?php
/* if(strln($email1 == 0) {        //strlen(@email) == 0
    //echo "email hooson bna";
   // echo "<br>";
    die();
} else if ($name1 == "") {
    echo "ner hooson bna";
    die(); 
} else if ($message1 == "") {
    echo "Message hooson bna";
    die(); 
}
?> 
*/
?>
<h1>
    <?php echo $name1; ?>
    (<span class="medeelel"><?php echo $email1; ?> </span>)
    <?php echo $message1; ?>
</h1>

<?php

// Ene hesegt taslah heregtai yum bna



// https://www.w3schools.com/php/php_variables.asp

$email = $_GET['email'];
$name = $_GET['name'];
$message = $_GET['message'];

$oguulber = "Variables can store data of different types, and different data types can do different things.";

if($email == "") {
    echo "Email xayag xooson baina";
    echo "<br>";
    die();
}

if($name == "") {
    echo "Ner xooson baina";
    echo "<br>";
    die();
}

if($message == "") {
    echo "Message xooson baina";
    echo "<br>";
    die();
}
?>
<h1>
    <?php echo $name; ?>
    (<span class="medeelel"><?php echo $email; ?> </span>)
</h1>
 <?php
  echo $message;
 ?>
