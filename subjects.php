
<html>
<title>Subjects</title>
    
</head>
<body>
   <form action="addsubjects.php" method="post">
  Subject name:<input type="text" name="subjectname"><br>
  Teacher:<input type="text" name="teacher"><br>
  
  <input type="submit" value="Add Subject">
</form>
<?php
    array_map("htmlspecialchars", $_POST);
    
	include_once('connection.php');
	$stmt = $conn->prepare("SELECT * FROM TblSubjects");
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			echo($row["Subjectname"].' '.$row["Teacher"]."<br>");
		}
?> 
<select name = "subject">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUsers WHERE Role = 0 ORDER BY 'subject' ASC");
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo('<option value='.$row["SubjectID"].'>'.$row["Subjectname,"].', '.$row["Teacher"].'</option>');
}
?>
</select>
</body>
</html>