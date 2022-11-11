<?php

header('Location: addtoclass.php');

	$stmt = $conn->prepare("INSERT INTO tblpupilstudies (Subjectid,Userid,Role)VALUES (NULL,:Classposition,Classgrade,Exammark,Comment,:role)");
	$stmt->bindParam(':Subjectid', $_POST["Subjectid	"]);
	$stmt->bindParam(':Userid', $_POST["Userid"]);
	$stmt->bindParam(':Classposition	', $_POST["Classposition	"]);
	$stmt->bindParam(':Classgrade', $_POST["Classgrade"]);
	$stmt->bindParam(':Exammark', $_POST["Exammark"]);
	$stmt->bindParam(':Comment	', $_POST["Comment"]);
	$stmt->execute();

    print_r($_POST);
	
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
$conn=null;

?>