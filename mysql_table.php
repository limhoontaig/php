<?php
// echo "start"; echo "<br/>";
$conn = mysqli_connect("localhost", "limht", "secret", "users");

// Check connection
if (!$conn) {
     die("Connection failed: ". mysqli_connect_error()."<br>");
} else {
    echo "Connection successfully.<br>";
}

// echo "<h1>start</h1>";
// var_dump($conn);  echo "<br>end<br/>";

$query = "select * from Customers";
// echo "start";
// var_dump($query);  echo "end<br/>";
$result = mysqli_query($conn, $query);
echo "<h1>시험용 프로그램 작성 입니다. By LHT...</h1>";
echo $result;
// var_dump($result);  echo "end <br/>";
var_dump(mysqli_num_rows($result)); echo "<br/>";

if(mysqli_num_rows($result) > 0)
  {
  $table = '
  <table border="2" bordercolor="red">
     <tr>
          <th> Person ID </th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>City</th>
     </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $table .= '
    <tr>
          <td>'.$row["PersonID"].'</td>
          <td>'.$row["FirstName"].'</td>
          <td>'.$row["LastName"].'</td>
          <td>'.$row["City"].'</td>
     </tr>
   ';
  }
  $table .= '</table>';
  echo $table;
 }
