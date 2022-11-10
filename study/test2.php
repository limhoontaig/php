<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emp_no = $_POST['emp_no'];
    $birth_date = $_POST['birth_date'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $hire_date = $_POST['hire_date'];
  }
$connect= mysqli_connect("localhost","limht","secret","employees");

if(!$connect)die("연결에 실패 하였습니다.".mysqli_connect_error());

// mysqli_set_charset($connect,"utf8");

// <?php
// header("content-type:text/html; charset=UTF-8");
/* $id= $_POST[id];
 $user_id=$_POST[user_id];
 $name=$_POST[name];
 $pw=$_POST[pw];
 $memo=$_POST[memo]; */
 $regdate=date("YmdHis", time()); //날짜 , 시간
 $ip=getenv("REMOTE_ADDR"); //ip

//쿼리전송

$sql = "
    insert into employees ( 
        emp_no, 
        birth_date, 
        first_name, 
        last_name, 
        gender, 
        hire_date) values (
        19999,  
        "2022-11-10", 
        "first_name", 
        "last_name", 
        "M", 
        "2022-11-10")";

/*
$sql = "
    delete from employees
    where emp_no = $emp_no";*/
mysqli_query($connect, $sql);
// $result = mysqli_query($connect, $sql);



echo "result $result";
// echo var_dump $result;

if ($result === false) {
    echo mysqli_error($connect, $sql);
}

// mysqli_query($connect);

echo "<br/>End of file with No Error!!!"

?>