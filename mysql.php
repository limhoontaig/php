<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <title>Test Homepage for limhoontaig's Script</title>
  <h2> 임훈택의 시험 홈페이지 입니다. <br/> Hello PHP With MySQL</h2>
  <!--<style type="test/css">
  .collapse{
  border-collapse: collapse;
  border: 1px solid #ccc;
  margin-left:10px;
  }
  .collapse th{
  width: 30%;
  padding: 5px;
  background-color: #d8f550;
  border: 1px solid #ccc;
  }
  .collapse td{
  padding: 5px;
  background-color: #fafafa;
  border: 1px solid #ccc;
  }
 </style>-->
 <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<p> A mozilla and some paragraphs. The paragraph text has been styled red by our css.<br/> <p/>
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
<form atcion="192.168.0.29" method="post"> 
 <label for="pet-select">Choose a pet:</label>

 <select name="pets" id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
 </select>
 <input type="submit">
 </form>
 <br/><br/>
 <form method="post">
    Employee Number : <input type="text" name="emp_no" />&nbsp&nbsp
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
      <td>'.$row["t_from_date"].'</td>
      <td>'.$row["t_to_date"].'</td>
    </tr>
   ';
  }
  $table .= '</table>';
  echo $table;
 }
?>
  </body>
</html>
