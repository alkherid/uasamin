<!DOCTYPE html>
<html>
<head>
    <title>Muhammad Amin Cherid</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="txtinput" placeholder="Input Text">
        <button name="submit">SUBMIT</button>
    </form>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $input=$_POST['txtinput'];
        echo $input;
    }
?>
