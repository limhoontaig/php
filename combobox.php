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
<form method="post">
    Employee Number : <input type="text" name="emp_no" />
    age : <input type="text" name="age" />
    <input type="submit" />
</form>
<?php

  // Connect to the database
  mysqli_connect("192.168.111.100", "limht", "secret") or die(mysql_error());
  mysqli_select_db("employees") or die(mysql_error());

  echo "// Has the form been submitted?";
  if (isset($_POST['emp_no'])) {

    echo "// The form has been submitted, query results";
    $queryitem = "SELECT * FROM employees WHERE emp_no = '".$_POST['emp_no']."';";

    echo "// Successful query?";
    if($result = mysql_query($queryitem))  {

      // More than 0 results returned?
      if($success = mysql_num_rows($result) > 0) {

        // For each result returned, display it
        while ($row = mysql_fetch_array($result)) echo $row[serial];
      }
      // Otherwise, no results, tell user
      else { echo "No results found."; }
    }
    // Error connecting? Tell user
    else { echo "Failed to connect to database."; }
  }
  // The form has NOT been submitted, so show the form instead of results
  else {

    // Create the form, post to the same file
    echo "<form method='post' action='example.php'>";

    // Form a query to populate the combo-box
    $queryitem = "SELECT DISTINCT item FROM table;";

    // Successful query?
    if($result = mysql_query($queryitem))  {

      // If there are results returned, prepare combo-box
      if($success = mysql_num_rows($result) > 0) {
        // Start combo-box
        echo "<select name='item'>n";
        echo "<option>-- Select Item --</option>n";

        // For each item in the results...
        while ($row = mysql_fetch_array($result))
          // Add a new option to the combo-box
          echo "<option value='$row[item]'>$row[item]</option>n";

        // End the combo-box
        echo "</select>n";
      }
      // No results found in the database
      else { echo "No results found."; }
    }
    // Error in the database
    else { echo "Failed to connect to database."; }

    // Add a submit button to the form
    echo "<input type='submit' value='Submit' /></form>";
  }
?>