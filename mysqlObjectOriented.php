<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Test Homepage for limhoontaig's Script</title>
  <h2> 임훈택의 시험 홈페이지 입니다. <br/> Hello PHP With MySQL</h2>
 <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
 <br/>
 <form method="post">
    Employee Number : <input type="text" name="emp_no" />
    <!-- age : <input type="text" name="age" /><br>-->
    <input type="submit" />
</form>
<a href="index.php">Go To index.php</a><br>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $emp_no = $_POST['emp_no'];
}
// defile variables for tht server connection of MySQL
$servername = "localhost";
$username = "limht";
$password = "secret";
$dbname = "employees";

// Create connection
$con = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$query = "select 
  e.emp_no, e.first_name, e.last_name, e.hire_date, 
  s.salary, s.from_date, s.to_date, 
  t.title, t.from_date t_from_date, t.to_date t_to_date
from 
  employees e,
  salaries s, 
  titles t
WHERE
  e.emp_no = s.emp_no
  and s.emp_no = t.emp_no
  and s.from_date >= t.from_date
  and s.from_date <= t.to_date
  and e.emp_no = $emp_no
Order by s.from_date";

$result = $con->query($query);
// var_dump($result);
echo "<br/>";

if($result->num_rows > 0)
  {
  $table = '
  <table border="1" bordercolor="red" border-collapse="collapse">
  <!-- <table class="separate"> -->
    <tr>
      <th> emp_no </th>
      <th>first_name</th>
      <th>last_name</th>
      <th>hire_date</th>
      <th>salary</th>
      <th>from_date</th>
      <th>to_date</th>
      <th>title</th>
      <th>t_from_date</th>
      <th>t_to_date</th>
    </tr>
  ';
  while($row = $result->fetch_assoc())
  {
   $table .= '
    <tr>
      <td>'.$row["emp_no"].'</td>
      <td>'.$row["first_name"].'</td>
      <td>'.$row["last_name"].'</td>
      <td>'.$row["hire_date"].'</td>
      <td>'.$row["salary"].'</td>
      <td>'.$row["from_date"].'</td>
      <td>'.$row["to_date"].'</td>
      <td>'.$row["title"].'</td>
      <td>'.$row["t_from_date"].'</td>
      <td>'.$row["t_to_date"].'</td>
    </tr>
   ';
  }
  $table .= '</table>';
  echo $table;
 } else {
  echo "0 results";
 }
 $conn->close();
?>
  </body>
</html>
