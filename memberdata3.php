<?php 
	$name = $_POST['name'];
	$education = $_POST['education'];
	$source1 = "";
	$source2 = "";
	$source3 = "";
	$comment = $_POST['comment'];

	if (isset($_POST['sex'])) 
		$sex = $_POST['sex'];
	else 
		$sex = "ไม่ระบุ";
	

	if (isset($_POST['source1'])) 
		$source1 = $_POST['source1'];	
	
	if (isset($_POST['source2'])) 
		$source2 = $_POST['source2'];	
	
	if (isset($_POST['source3'])) 
		$source3 = $_POST['source3'];	
	
	echo "ชื่อ-นามสกุล คือ $name <br>";
	echo "เพศ $sex   <br>";
	echo "ระดับการศึกษาสูงสุด คือ $education <br>";
	echo "ข้าพเจ้าทราบมาจาก $source1 เเละ $source2 เเละ $source3 <br>";
	echo "คำเเนะนำสำหรับเว็บไซต์ คือ $comment "; 
 ?>