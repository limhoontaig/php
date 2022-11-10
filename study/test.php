<!DOCTYPE html>
<html>
    <head>
        <h1>임훈택의 집 방문해 주셔서 고맙습니다. 복많이 받으세요.</h1>
    </head>
    <body>
        <?php
        $connect= mysqli_connect("localhost","limht","secret","employees");
        $emp_no = mysqli_query($connect, set @emp_no = (select max(emp_no) from employees) + 1);

        echo "<h1> dump_var($emp_no) </h1>";
        ?>



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