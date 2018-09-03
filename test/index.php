<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 8/26/2018
 * Time: 4:45 PM
 */

$name = "new test";
$text = sprintf('This is my test by %s and time is : %s', $name, time());
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Test </title>

</head>
<body>


<?php
function my()
{$df =23;
 $str="Mohanad Assim";
    echo $df."<br>";

    print "str var lenght is " .strlen($str);
    print "<br>".str_word_count($str);


}
function loop()
{global $x2;
$x2=-10;
    while ($x2<5)
    {
        echo $x2++;
    }
    print "<br>";
    for( ;$x2>-5;$x2--)
        return $x2;
   // return $x2;
}
function arr()
{
    $s=array("sdds","wewe","ssdsd");
    foreach($s as $h)
        print $h;
}

 $x2 = 1;

print loop();
?>
//// ارسال المدخلات الى نفس الصفحة
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
//ارسال المدخلات الصفحة ثانية اسمها welcome.php ٍ
<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>



</body>
</html>
