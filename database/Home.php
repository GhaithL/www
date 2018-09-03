<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>



<h1>Hello, world!</h1>
<form method="post">
    <button name="Connect" class="btn btn-outline-primary">Connect to DB</button>
    <br><br>
    <div class='container'>
        Book Title: <input type="text" name="book" >
        <br> Author:<input type="text" name="author">
        <br> Status:<input type="radio" name="status" value="free" checked="checked"> Free
        <input type="radio" name="status" value="Not free"> Not Free
        <br><button name="Insert" tpye="submit" class="btn btn-primary">insert to DB</button>
    </div>


    <br><br>
    <br> Book Title: <input type="text" name="id" >
    <br> Book Title: <input type="text" name="book" >
    <br> Author:<input type="text" name="author">
    <br> <button name="search" >Search</button>
    <br><br>
    <button name="Display" class="btn btn-outline-primary">Display DB</button>
</form>



</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 8/29/2018
 * Time: 10:52 AM
 */
?>
<?php
include_once 'class/config.php';
include_once 'class/table.php';


//Create_conn();
//insert();
//Close_conn();

/*    if($_GET['button1'])
        Create_conn();

    if($_GET['button2'])
        insert();*/
if(isset($_POST['Connect'])) Create_conn();

if(isset($_POST['Insert']))
{
    $book=$_POST['book'];
    $author=$_POST['author'];
    $status=$_POST['status'];
    if ((strlen($book)!=0) && (strlen($author)!=0))
    {
        insert($book,$author,$status);
        header(sprintf('Location: %s/Home.php', $url));
    }
    else
        echo "<div class=\"alert alert-danger\" role=\"alert\">Please enter data to insert it to DB.</div>";
   // GetLastIndex();

}
if (isset($_POST['Display']))
{
    $data=Dis_All();
    Display($data);
}



if (isset($_POST['search']))
{
    $id=$_POST['id'];
    $book=$_POST['book'];
    $author=$_POST['author'];
    $data=Search($id,$book,$author);
    Display($data);
}

if (isset($_POST['']))

?>
