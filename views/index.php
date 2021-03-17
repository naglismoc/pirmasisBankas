<?php
  include 'HTMLfragments/header.php';
?>

<table>
  <tr>
    <th>Vardas</th>
    <th>Pavardė</th>
    <th>asmens kodas</th>
    <th>elektroninis paštas</th>
    <th>elektroninis paštas</th>
    <th>banko saskaita</th>
    <th>pridėti</th>
    <th>išimti</th>
    <th>edit</th>
    <th>delete</th>
    <!-- <th>edit</th> -->
  </tr>

<?php
$data =  readData();
foreach ($data as $client) {
    ?>

    <tr>
    <td><?=$client['name']?></td>
    <td><?=$client['surname']?></td>
    <td><?=$client['ak']?></td>
    <td><?=$client['email']?></td>
  </tr>

<?php
 }
?>


 
</table>

<?php
 include 'HTMLfragments/footer.php';
?>
