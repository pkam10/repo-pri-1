<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_shop");
$sql="SELECT * FROM tbl_product ORDER BY price ASC";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>productId</th>
<th>productName</th>
<th>catId</th>
<th>body</th>
<th>price</th>
<th>image</th>
<th>type</th>
<th>brand</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['productId'] . "</td>";
    echo "<td>" . $row['productName'] . "</td>";
    echo "<td>" . $row['catId'] . "</td>";
	
    echo "<td>" . $row['body'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
	 echo "<td>" . $row['image'] . "</td>";
	  echo "<td>" . $row['type'] . "</td>";
	   echo "<td>" . $row['brand'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>