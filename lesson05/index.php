<?php
    var_dump($_FILES['avatar']);

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="avatar[]" multiple>
    <button type="submit">Submit</button>
</form>

Dang ky
<form action="post-register.php" method="post">
    <p>Username</p>
    <input type="text" name="username" >
    <br>
    <p>Password</p>
    <input type="password" name="password" >
    <br>
    <button type="submit">Register</button>
</form>