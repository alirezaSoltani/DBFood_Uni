
<html>
<head>
    <META charset="utf-8">
</head>
<style>
    table{
        border:2px solid rgb(218,118,18);
        border-collapse:collapse;


    }

    .BookTable {
        margin-left: 3%;
        margin-top: 200px;
    }

    table a:link {
        color: #666;
        font-weight: bold;
        text-decoration:none;
    }
    table a:visited {
        color: #999999;
        font-weight:bold;
        text-decoration:none;
    }
    table a:active,
    table a:hover {
        color: #bd5a35;
        text-decoration:underline;
    }
    table {
        font-family:Arial, Helvetica, sans-serif;
        color:#666;
        font-size:12px;
        text-shadow: 1px 1px 0px #fff;
        background:#eaebec;
        margin:20px;
        border:#ccc 1px solid;

        -moz-border-radius:3px;
        -webkit-border-radius:3px;
        border-radius:3px;

        -moz-box-shadow: 0 1px 2px #d1d1d1;
        -webkit-box-shadow: 0 1px 2px #d1d1d1;
        box-shadow: 0 1px 2px #d1d1d1;
    }
    table th {
        padding:21px 25px 22px 25px;
        border-top:1px solid #fafafa;
        border-bottom:1px solid #e0e0e0;

        background: #ededed;
        background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
        background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
    }
    table th:first-child {
        text-align: left;
        padding-left:20px;
    }
    table tr:first-child th:first-child {
        -moz-border-radius-topleft:3px;
        -webkit-border-top-left-radius:3px;
        border-top-left-radius:3px;
    }
    table tr:first-child th:last-child {
        -moz-border-radius-topright:3px;
        -webkit-border-top-right-radius:3px;
        border-top-right-radius:3px;
    }
    table tr {
        text-align: center;
        padding-left:20px;
    }
    table td:first-child {
        text-align: left;
        padding-left:20px;
        border-left: 0;
    }
    table td {
        padding:18px;
        border-top: 1px solid #ffffff;
        border-bottom:1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;

        background: #fafafa;
        background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
        background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
    }
    table tr.even td {
        background: #f6f6f6;
        background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
        background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
    }
    table tr:last-child td {
        border-bottom:0;
    }
    table tr:last-child td:first-child {
        -moz-border-radius-bottomleft:3px;
        -webkit-border-bottom-left-radius:3px;
        border-bottom-left-radius:3px;
    }
    table tr:last-child td:last-child {
        -moz-border-radius-bottomright:3px;
        -webkit-border-bottom-right-radius:3px;
        border-bottom-right-radius:3px;
    }
    table tr:hover td {
        background: #f2f2f2;
        background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
        background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);
    }
</style>

</html>
<?php
/**
* Created by PhpStorm.
* User: Megane
* Date: 1/18/17
* Time: 12:09 PM
*/
include 'connection.php';
session_start();
if(isset($_POST['register-submit'])){
    echo "0";
}


$result = $conn->query("Select * FROM category_table");
echo '<form action="" method="GET" name="mainform2">';
echo '<table  border ="5">
		<tr>
			<th style="font-size: 200%">name</th>
			<th style="font-size: 200%">حذف</th>
			<th style="font-size: 200%">تغییر</th>


		</tr>';

while($row = $result->fetch_assoc())
{
    echo '<tr border="1">';
    echo '<td style="font-size: 150%"><center>'.$row["category_Name"].'</center></td>';

    echo '<td><center><a href=deletecategory.php?removeId='.$row["category_Name"].'>remove </a></td>';
    echo '<td><center><a href=editcategory.php?editId='.$row["category_Name"].'>edit </a></td>';
   // echo '<td><center><a href=detail.php?bnum='.$row["category_Name"].'>details</a></td>';

    echo '</tr>';
}
echo '<tr border="1">';

//echo '<td><input type="submit" name="mult_Delete" value="Multiple Delete" style="margin-left:0"></input></td>';
echo '</tr>';
echo '</table>';
echo '</form>';

if(isset($_POST['insert']))
{
    /*$s=$_POST['category_Name'];
    $add = " INSERT INTO category_table ('category_Name')
	VALUES ('$s') " ;*/
    //$std = $_POST['id_book'];
   // $conn->query($add);
    $user=$_POST['category_name'];
    $insertQuery = "INSERT INTO category_table (`category_Name`) VALUES ('$user')";
    $result3 = $conn->query($insertQuery);
    header("refresh:0;");

}
/*echo '<h4> Information Below </h4>';
echo category_name;echo '<br>';

echo '<h4> Inserted Successfully </h4>';*/
$conn->close();

?>
<form method="POST">
    <table border="1">
        <tr>
            <td><label>name:</label></td>
            <td><input type="text" name="category_name"> </td>
        </tr>
        <tr>
            <td colspan="2" ><input type="submit" value="insert" name="insert"></td>

        </tr>
    </table>
</form>
