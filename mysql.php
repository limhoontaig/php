<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <title>Test Homepage for limhoontaig's Script</title>
  <h2> 임훈택의 시험 홈페이지 입니다. <br/> Hello PHP With MySQL</h2>
</head>
<body>
<marquee direction="up" bgcolor="yellow" behavior="scroll"
  width="200" height="100" scrolldelay="5">
  임훈택 PHP MySQL
</marquee>
<marquee direction="up" bgcolor="yellow" behavior="alternate"
  width="200" height="100" scrolldelay="5">
  임훈택 PHP MySQL
</marquee>
<marquee direction="left" bgcolor="yellow" behavior="scroll"
              width="100" height="100" scrolldelay="5">
<img src='aran.jpg' width='100' height='100'>
<img src='honda.jpg' width='100' height='100'>
</marquee>
  <!-- <form name="폼태그이름" method="데이터전송방식" action="정보를보낼주소">
    <input type="text" name="userID" maxlength="12" placeholder="아이디 입력" />
  </form>
  <form action="post.php" method="POST">
  <label for="id">ID  ::</label>
  <input type="text" name="id"/>
  <label for="pw">PASSWORD::</label>
  <input type="password" name="pw"/>
  <input type="submit" value="보내기" name="Submit">
  <input type="reset" value="취소" name="Reset">
 </form> -->
 <form method="post">
    Employee Number : <input type="text" name="emp_no" />
    age : <input type="text" name="age" />
    <input type="submit" />
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $emp_no = $_POST['emp_no'];
  $age = $_POST['age'];
}
// $user_id = $_POST['id']; //그냥 계속해서 $_POST['id'] 요렇게 써도 상관없음
// $user_pw = $_POST['pw'];
$con = mysqli_connect("localhost","limht","secret","employees");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
echo "test conection is success. <br/>";

$query = "select 
  e.emp_no, e.first_name, e.last_name, e.hire_date, s.salary, s.from_date, s.to_date, t.title
from 
  employees e,
  salaries s, 
  titles t
WHERE
  e.emp_no = s.emp_no
  and e.emp_no = t.emp_no
  and e.emp_no = $emp_no
Order by e.emp_no";
echo "\$query test conection is success.  <br/>";
$result = mysqli_query($con, $query);
var_dump($result);
echo "<br/>";
echo "<br/>";
echo "\$result test conection is success. <br/>";
// echo "$result";
// while ($row = mysqli_fetch_array($result)) {
//    var_dump($row);
    echo "<br/>";
//}
echo "while test conection is success. <br/>";
if(mysqli_num_rows($result) > 0)
  {
  $table = '
  <table border="1" bordercolor="red">
                    <tr>
                         <th> emp_no </th>
                         <th>first_name</th>
                         <th>last_name</th>
                         <th>hire_date</th>
                         <th>salary</th>
                         <th>from_date</th>
                         <th>to_date</th>
                         <th>title</th>

                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
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


                    </tr>
   ';
  }
  $table .= '</table>';
  echo $table;
 }
?>
  </body>
</html>