<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1 style='color:green'> Form Fillup</h1>";
    if(isset($_POST['submit'])) {
        echo'Password is:'.$_POST['pwd'];
    }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Login</legend>
        <div>
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="pwd">
        </div>
        <input type="color" name="choose color" id="">
        <input type="date" name="date" id="">
        <input type="Submit" value="Login" name="submit">  

        <div>
            <select name="country">
                <option value="nepal">Nepal</option>
                <option value="usa">USA</option>
                <option value="india">India</option>

            </select>
            <input type="Submit">
        </div>

        <div>
        <input list="browsers" name="browser" id="browser">

<datalist id="browsers">
  <option value="Edge">
  <option value="Firefox">
  <option value="Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist>
<input type="Submit">
        </div>
        
        </fieldset>
    </form>

</body>

</html>

