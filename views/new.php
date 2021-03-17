<?php
  include 'HTMLfragments/header.php';
?>

<?php

if($_SERVER['REQUEST_METHOD']== "POST"){
    $data = readData();
    $client = [];
    $client['name'] = $_POST['name'];
    $client['surname'] = $_POST['surname'];
    $client['ak'] = $_POST['ak'];
    $client['email'] = $_POST['email'];
    $data[] = $client;
    writeData($data);
    header("location:./index.php");
    die;
    
}
// Json::readData();

// $data = readData();
// $data[] = "labas";
// $data[] = "vakaras";

// writeData($data);


?>

<form action="" method="POST">
  <label for="name">Vardas</label><br>
  <input type="text"  name="name" value=""><br>

  <label for="surname">Pavardė</label><br>
  <input type="text"  name="surname" value=""><br>

  <label for="ak">asmens kodas</label><br>
  <input type="text" name="ak" value=""><br>

  <label for="email">elektroninis paštas</label><br>
  <input type="text" name="email" value=""><br>

  <br><input type="submit" value="sukurti klijentą">
</form> 


<?php
 include 'HTMLfragments/footer.php';
?>
