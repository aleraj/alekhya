<?php

include('basic.php'); // Ensure this file establishes a database connection in $con

if (isset($_POST['submit'])) { // Corrected `$_post` to `$_POST`
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Corrected `mysqi_query` to `mysqli_query`
    $query = mysqli_query($con, "INSERT INTO crudoperation(name, email, address) VALUES('$name', '$email', '$address')");

    if ($query) {
        echo "<script>alert('Data inserted successfully');</script>"; // Fixed missing quotes
    } else {
        echo "<script>alert('There is an error');</script>"; // Fixed missing quotes
    }
}
?>

<html>
<body>
<div style="margin:5px auto">
<form method="post">
    <input type="text" name="name" placeholder="Enter name" required/>
    <br/><br/>
    <input type="email" name="email" placeholder="Enter email" required/>
    <br/><br/>
    <input type="text" name="address" placeholder="Enter address" required/>
    <br/><br/>
    <button type="submit" name="submit">Submit</button>
</form>
</div>
</body>
</html>