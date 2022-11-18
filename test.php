<!DOCTYPE html>
<html>
<head>
<style>
input[type=text] {
    width: 200px;
    height: 50px;
    padding-left: 20px;
    font-size: 25px;
    background-color: lightblue;
    color: white;
    border-color: red;
    border-radius: 10px; 
    /*border:0;*/
    
}
label {
  width: 200px;
  height: 30px;
  font-size: 15px;
  background-color: skyblue;
}
</style>
</head>
<body>

<h2>Text input fields</h2>

<form>
  <label for="fname">First name Middle Name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe">
</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of text input fields is 20 characters.</p>

</body>
</html>

