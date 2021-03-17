<?php
  session_start();
  // header ('location: ./about.php');
  include 'HTMLfragments/header.php';
  if(!isset($_SESSION['paspaudimu kiekis'])){
    $_SESSION['paspaudimu kiekis'] = 0;
  }

if($_SERVER['REQUEST_METHOD'] =='POST'){
  $_SESSION['paspaudimu kiekis']++ ;
  
}

$lname = "";
$fname = "";

if(isset($_GET['fname'])){
  if($_GET['lname']!="" && $_GET['fname']!=""){
    echo "labas ponas ".$_GET['fname']." ".$_GET['lname'];
  }else{
    $lname = $_GET['lname'];
    $fname = $_GET['fname'];
    echo "uzpildyk forma";
  }
}


?>

<h1>forma submitinta <?= $_SESSION['paspaudimu kiekis']?> kartu</h1>

<form action="" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<form action="" method="GET">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"  value="<?=$fname?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"  value="<?=$lname?>"><br><br>
  <input type="submit" value="Submit">
</form> 


<?php



br();



?>




<?php
 include 'HTMLfragments/footer.php';
?>
