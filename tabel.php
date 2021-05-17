<?php
include("database.php");
require('db.php');
require('./registeration-login-system-master/db.php');

$server="localhost";
$db="registration";
$username="techsquadkec";
$password="kv3*tp1gG4tvsRCm";

$conn=mysqli_connect($server,$username,$password,$db);
$dbb=$conn;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT * from customerdb ORDER BY cid DESC";
  $exec=mysqli_query($dbb, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);
function show_data($fetchData){
 echo '<table border="1">
        <tr>
            <th>S.N</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>From</th>
            <th>to</th>
           
        </tr>';
 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 
  echo "<tr>
          <td>".$sn."</td>
          <td>".$data['cfname']."</td>
          <td>".$data['mail']."</td>
          <td>".$data['ca1']."</td>
          <td>".$data['ra1']."</td>

   </tr>";
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}
?>