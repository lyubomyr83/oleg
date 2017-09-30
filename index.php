<form method="post">
    Как вас зовут? <input type="text" name="name">
    <input type="submit" value="ok">
</form>

<?php

if($_POST){
    $name=$_POST['name'];
    echo "Привет ".$name;
}