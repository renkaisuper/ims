<?php
$servername = "c8e2339e-044b-4207-a61a-9f561e34e9a0.imsfix1-4972.mysql.dbs.scalingo.com:34800";
$username = "imsfix1_4972";
$password = "GtgHUi69m7K6egOey35_";
$dbname = "imsfix1_4972";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT id, nama, nim 
  FROM tugas_ims';
  
$query = mysqli_query($conn, $sql);

if (!$query) {
 die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table "border: 1px ;">
  <thead>
   <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>NIM</th>
   </tr>
  </thead>
  <tbody>';
  
while ($row = mysqli_fetch_assoc($query))
{
 echo '<tr>
   <td>'.$row['id'].'</td>
   <td>'.$row['nama'].'</td>
   <td>'.$row['nim'].'</td>   
   </tr>';
}
echo '
 </tbody>
</table>';

mysqli_free_result($query);
mysqli_close($conn);
?> 
