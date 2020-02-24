<?php
$servername = "6ea4012c-895a-4995-93b1-791dce272919.tugasims-2284.mysql.dbs.scalingo.com:34394";
$username = "";
$password = "";
$dbname = "";

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