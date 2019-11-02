<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">

name:<input type="text" name="fname2">
<input type="submit">

</form>
<?php
$name = $_POST['fname2'];
echo $name;

?>