<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 8/27/2018
 * Time: 1:31 PM
 */
?>

<html>
<body>

<pre><?php print_r($_POST); ?></pre>
<pre><?php print_r($_SERVER); ?></pre>
<pre><?php print_r($_SESSION); ?></pre>

<?php
echo $_POST["name"];
$x = $_POST["name"];
echo $x;



?><br>
 <?php echo $_POST["email"]; ?>
<?php




?>
</body>

</html>