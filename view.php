<html>
<head><title>Tutor Database Contents!</title></head>
<style>
body {
    background-color: lightblue;
}

h1 {
    color: white;
    text-align: center;
}

p {
    font-family: verdana;
    font-size: 20px;
}
td {
    border: 1px solid #ddd;
    padding: 8px;
}
table {
	text-align: center;
	margin-left:auto; 
	margin-right:auto; 
}
</style>
<body>
<h1>Tutor Database</h1>
<?

$connection = mysql_connect('localhost', 'root', 'root'); //The Blank string is the password
mysql_select_db('tutoringCompany');

$query = "SELECT * FROM tutor"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['location'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection
?>
<a href="index.php">Submit another tutor</a>
</body>
</html>