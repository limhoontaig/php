<?php
$con = mysqli_connect("localhost","limht","secret","employees");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
echo "test conection is success. <br/>";

$query = "select * from salaries where emp_no=261223";
echo "\$query test conection is success.  <br/>";
$result = mysqli_query($con, $query);
var_dump($result);
echo "<br/>";
echo "<br/>";
echo "\$result test conection is success. <br/>";
// echo "$result";
while ($row = mysqli_fetch_array($result)) {
    var_dump($row);
    echo "<br/>";
}
echo "while test conection is success. <br/>";
?>