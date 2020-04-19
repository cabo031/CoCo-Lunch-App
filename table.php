<?php  

//Block 1
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Database";
$table = "Table";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT RestaurantName, ItemName, Description, Price FROM Tablica";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
    {
    // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<html>";
			
			echo "<a href='/HelloWorld/table.php'>List</a>";
			echo " | ";
			echo "<a href='/HelloWorld/index.html'>Add</a>";
			echo "<style>";
			echo "table, th, td 
					{
					border: 1px solid black;
					}";
			echo "</style>";
            echo "<table>";
	            echo "<tr>";
	                echo "<td>Restaurant Name:</td>";
	                echo "<td>Item Name: </td>";
	                echo "<td>Description: </td>";
	                echo "<td>Price: </td>";
	            echo "</tr>";
	            echo "<tr>";
	                echo "<td>".$row["RestaurantName"]."</td>";
                    echo "<td>".$row["ItemName"]."</td>";
                    echo "<td>".$row["Description"]."</td>";
                    echo "<td>".$row["Price"]."</td>";
	            echo "</tr>";
            echo "</table>";
        }

    }
else
    {
    echo "0 results";
    }

mysqli_close($conn);

