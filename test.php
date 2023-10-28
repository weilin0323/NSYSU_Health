<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>first</td>
    <td>last</td>
    <td>ordernumber</td>
  </tr>

<?php

include "db.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from order_p"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['first']; ?></td>
    <td><?php echo $data['last']; ?></td>
    <td><?php echo $data['ordernumber']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>