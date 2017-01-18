<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
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
<body>

	<?php
    include 'connection.php';
    session_start();
    if(isset($_POST['register-submit'])){
        echo "0";
    }
$result = $conn->query("Select * FROM food_table");
		echo '<form action="" method="GET" name="food">';
		echo '<table  border ="1">
		<tr>
		    <th > شماره غذا</th>
			<th >نام غذا</th>
			<th >نوع غذا</th>
			<th >تعداد موجود غذا</th>
			<th > مواد تشکیل دهنده ی غدا</th>
			
			
		</tr>';
	
while($row = $result->fetch_assoc())
{
    echo '<tr border="1">';

       // echo '<td style="font-size: 150%"><a href=updatefood.php?food_number='.$row["food_number"].'><center>'.$row["food_number"].'</center></a></td>';
          echo '<td><center><a href=updatefood.php?food_number='.$row["food_number"].'&food_name='.$row["food_name"].'&food_cat='.$row["food_cat"].'&food_ava='.$row["food_ava"].'&food_sundry='.$row["food_sundry"].'&food_price='.$row["food_price"].'> <center>'.$row["food_number"].'</center></a></center></td>';
        //echo'href=updatefood.php?food_number='.$row["food_number"].'&food_name='.$row["food_name"].'&food_cat='.$row["food_cat"].'&food_ava='.$row["food_ava"].'&food_sundry='.$row["food_sundry"].'&food_price='.$row["food_price"];
        //echo '<td><center><a href=updatefood.php?food_number='.$row["food_number"].'&food_name='.$row["food_name"].'&food_cat='.$row["food_cat"].'&food_ava='.$row["food_ava"].'&food_sundry='.$row["food_sundry"].'&food_price='.$row["food_price"].'><center>'.$row["food_number"].'</center></a></center></td>';
		echo '<td style="font-size: 150%"><center>'.$row["food_name"].'</center></td>';

		echo '<td style="font-size: 150%"><center>'.$row["food_cat"].'</center></td>';
		echo '<td style="font-size: 150%"><center>'.$row["food_ava"].'</center></td>';
		echo '<td style="font-size: 150%"><center>'.$row["food_sundry"].'</center></td>';
	
    echo '</tr>';
}
echo '<tr border="1">';
	//echo '<td></td>';
	//echo '<td></td>';
	
	
echo '</tr>';
echo '</table>';
echo '</form>';


?>
</body>
</html>