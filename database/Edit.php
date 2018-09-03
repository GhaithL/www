<?php
include_once 'class/config.php';
include_once 'class/table.php';
$id=$_GET['Id'];
$book=$author="";
$result=Search($id,$book,$author);
foreach ($result as $result2)
{
    echo"<form action='Edit.php?Id=".$id."' method='POST'><table>";
    echo "<tr><td>Book Id :</td><td><input type='text' name='id' value='".$result2['Id']."'></td></tr>";
    echo "<tr><td>Book Title:</td><td><input type='text' name='book' value='".$result2['book_title']."'></td></tr>";
    echo "<tr><td>Author:    </td><td><input type='text' name='author' value='".$result2['author']."'></td></tr>";
    if ($result2['status']=="free")
        echo "<tr><td>Status:</td><td><input type='radio' name='status' value='free' checked='true' >Free
                                      <input type='radio' name='status' value='not free' >Not Free</td></tr>";
   elseif($result2['status']=="not free")
             echo "<tr><td>Status: </td><td><input type='radio' name='status' value='free'  >Free
                   <input type='radio' name='status' value='not free' checked='true'>Not Free</td></tr>";
   echo "<tr><td><input type='submit' name='Edit' value='Edit' /></td></tr>";

    echo"</table></form>";

if (isset($_POST['Edit']))
{
    Edit();
}
}

function Edit()
{
    global $url;
    UPDATE($_POST['id'],$_POST['book'],$_POST['author'],$_POST['status']);
    header(sprintf('Location: %s/Home.php', $url));
}
?>
<html>
<title>Edit Page</title>
<body>


</form>



</body>
</html>

