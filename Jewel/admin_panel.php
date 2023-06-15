<html>
	<head>
		<title>Student database</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="database.css"/>
	</head>
	<body>
		<h1>Student Informarion</h1>
		<?php
		$con = mysql_connect("localhost", "root", "");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db("dbstudent", $con);

		$result = mysql_query("SELECT * FROM ssc");

		echo "<table border='1px solid orange' >
<tr>
                <th>StudentName</th>
				<th>StudentMobile</th>
				<th>FatherName</th>
				<th>FatherMobile</th>
				<th>Occupation</th>
				<th>Address</th>
				<th>High School</th>
				<th>SSC_Result</th>
				<th>College</th>
				<th>HSC Result</th>
				<th>Batch</th>
				<th>Day</th>
				<th>Payment</th>
</tr>";

		while ($row = mysql_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Student_Mobile_No'] . "</td>";
			echo "<td>" . $row['Fathers_Name'] . "</td>";
			echo "<td>" . $row['Fathers_Mobile_No'] . "</td>";
			echo "<td>" . $row['Father_Occupation'] . "</td>";
			echo "<td>" . $row['Adress'] . "</td>";
			echo "<td>" . $row['High_school'] . "</td>";
			echo "<td>" . $row['SSC'] . "</td>";
			echo "<td>" . $row['College'] . "</td>";
			echo "<td>" . $row['HSC'] . "</td>";
			echo "<td>" . $row['batch'] . "</td>";
			echo "<td>" . $row['batch_day'] . "</td>";
			echo "<td>" . $row['Payment_type'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";

		mysql_close($con);
	?>
	</body>
</html>