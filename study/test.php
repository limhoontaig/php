<!DOCTYPE html>
<html>
    <head>
        <h1>임훈택의 집 방문해 주셔서 고맙습니다. 복많이 받으세요.</h1>
    </head>
    <body>
        <?php
        $connect= mysqli_connect("localhost","limht","secret","employees");
        $sql = "select max(emp_no) from employees;";
        $result = mysqli_query($connect, $sql);
        echo var_dump($result);
        
        /*if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Maximum emp_id".$row["max(emp_no)"]. "<br>"
            }
        }*/
        /* echo "<h1> <?php var_dump($result) ?> </h1>";*/
        
        ?>
        <br>



        <form action="./test2.php" name="form1" method="post">
            <input type="hidden" name="employees" value="employees">
                <li> Employee Number: <input type="number" name="emp_no" value=""/></li>
                <li>Birth Date      : <input type="date" name="birth_date" value="2022-11-01"></li>
                <li>First Name      : <input type="text" name="first_name" size="14"></li>
                <li>Last Name       : <input type="text" name="last_name" size="16"></li>
                <li>Gender          : <input type="text" name="first_name" size="1"></li>
                <li>Hire Date      : <input type="date" name="hire_date" value="2022-11-01"></li>
            <input type="submit" value="SUBMIT">
        </form>
    </body>
</html>