<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 8/27/2018
 * Time: 3:30 PM
 */
?>
<html>
<body>
<h3 >Sending data by using method POST is more secure and has no limit </h3>
<form action="Print.php" method="POST">
    <table>
        <tr>
           <td>Username:</td>
            <td><input type="text" name="un"></td>
        </tr>
        <tr>
            <td> Mobile number:</td>
            <td><input type="text" name="mn"></td>
        </tr>

    <br>
     </table>
    <input type="submit">
</form>
<br>
    <br>
        <br>
        <br>
    <br>
<br>
<h3 >Sending data by using method GET in URL and has limit for URL </h3>
<form action="print by get.php" method="Get">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="un"></td>
        </tr>
        <tr>
            <td> Mobile number:</td>
            <td><input type="text" name="mn"></td>
        </tr>

        <br>
    </table>
    <input type="submit">
</form>
<a href="data form.php">PHP form validation and required</a>
</body>
</html>
