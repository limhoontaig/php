<html>
    <meta charset="utf-8"/>
    <title>File Manager</title>

<body>

    <?php
        @ $db = new mysqli('localhost','limht', 'secret', 'pictures');
        if (mysqli_connect_errno())
        {
            echo "DB connect error.";
        }

        $query = "select * from ftp";
        $result = $db->query($query);
        $num_result = $result->num_rows;

    ?>

    <table border='1' align='center'>
        <thead>
            <tr>
                <th width="50">NUM</th>
                <th width="250">FILE</th>
                <th width="200">TIME</th>
                <th width="70">DOWN</th>
                <th width="50">DEL</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($i=0; $i<$num_result; $i++)
                {
                    $row = $result->fetch_assoc();
                    echo "<tr>";
                    echo "<td align='center'>".$row['num']."</td>";
                    echo "<td align='left'> <a href='./download.php?num=".$row['num']."'>".$row['name']."</a></td>";
                    echo "<td align='center'>".$row['time']."</td>";
                    echo "<td align='center'>".$row['down']."</td>";
                    echo "<td align='center'> <a href='./delete.php?num=".$row['num']."'>"."DEL</a></td>";
                    echo "</tr>";
                }
                $db->close();
            ?>
        </tbody>
    </table>
    <br>
    <div align="center">
        <form action="./upload.php" method="POST" enctype="multipart/form-data" >
            <input type="file" id="file" name="file" required />
            <input type="submit" value="UPLOAD" />
        </form>
    </div>
        
<body>
</html>