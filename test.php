<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table { 

border-collapse: collapse;
width:100%;
color : #588c7e
font-family: monospace;
font-size: 25px;
text-align: left;
 }
 
 th { 
   background-color: #588c7e;
   color: white;
   }
  tr:nth-child(even)  {  background-color: #f2f2f2  }
  </style>
  





</head>
<body>
<table>
  <tr>
     <th>Country</th>
     <th>Name</th>
     <th>discipline</th>
     <th>residence</th>
     <th>    </th>
   </tr>
   <?php
   $conn= mysqli_connect("localhost","root","company");
   if($conn-> connect_error){ 
         die("Connection failed:". $conn-> connect_error);
         }
$sql= " SELECT Country, Name , discipline , residence from login;
$result = $conn -> query($sql);

if ($result -> num_rows > 0) { 
   while ($row = $result -> fetch_assoc()) { 
       echo"<tr><td>". $row["Country"]."<tr><td>".$row["Name"]. "<tr><td>".$row["discipline"]."<tr><td>".$row["residence"]."<tr><td>";
       
   }
   echo"</table>";
}


   else  { 
      echo "0 result";
   
   }
   
   $conn-> close();
 ?>   
</table>
</body>
</html>

