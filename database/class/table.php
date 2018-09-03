<?php
include_once 'class/config.php';



// Create connection
$conn = new mysqli($host, $username, $password,$dbName);
//====================================Create connection =====================================
function Create_conn()
{ global $conn;

//require_once 'table.php';

// Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully"."<br>";

}
//=================================================INSERT======================================
function insert($book,$author,$free)
{ global $conn;
  Create_conn();
  $sql="INSERT INTO books (book_title,author,status) VALUES ('".$book."','".$author."','".$free."')";
  $conn->query($sql);
  /*
  if ( $conn->query($sql)=== TRUE)
    {
      echo "New record created successfully";
      GetLastIndex();

    }
    else
        {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }*/
  Close_conn();

}
//================================= ID of last Item insert to table===========
function GetLastIndex()
{
    global $conn;
    $last_id=0;
    $last_id=$conn->insert_id;
    echo "the last add ID item is ".$last_id;

}
//================================= Select query : display all table data======
function Dis_All()
{
    global $conn;
    Create_conn();

    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
        Close_conn();
    return($result);
}
//===========================================Search ====================================
function Search($id,$book,$author)
{
    global $conn;
    Create_conn();
    $filter="";
    $bol=false;
    if (!(strlen($id)==0))
    {
        $filter = "Id='" . $id . "'";
        $bol = true;
    }

    if (!(strlen($book)==0) && ($bol==true))
    {
        $filter=$filter." AND book_title='".$book."'";
    }
    elseif  (!(strlen($book)==0)) $filter=$filter." book_title='".$book."'";

    if (!(strlen($author)==0) && ($bol==true))
    {
        $filter=$filter." AND author='".$author."'";
    }
    elseif  (!(strlen($author)==0)) $filter=$filter." author='".$author."'";

    $sql="SELECT * FROM books WHERE ". $filter.";";
    echo $sql;
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        return ($result);
    Close_conn();
 }
function Close_conn()
{
    global $conn;
    $conn->close();
}


//==========================PRINT+++++++++++++++++++++++++
function Display($result)
{
    echo "<table class='table table-striped' >";
    foreach($result as $array  )
    {
        echo "<tr ><td>" . $array["Id"]. "</td><td>" . $array["book_title"]. "</td><td>" . $array["author"].
        "</td><td> <a href='Edit.php?Id=". $array["Id"]."&book&author&status'> Edit</a></td></tr>";
    }
    echo "</table>";
}
//==========================UPDATE=======================
function Update($id,$book,$author,$status)
{
    global $conn;
    Create_conn();
    $sql="UPDATE books SET book_title='".$book."' ,author='".$author."' ,status='".$status."' WHERE Id=".$id;
    echo $sql;
    $conn->query($sql);

}
?>

