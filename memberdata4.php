<?php 
	$name = $_GET['name'];
	$education = $_GET['education'];
	$source1 = "";
	$source2 = "";
	$source3 = "";
	$comment = $_GET['comment'];

	if (isset($_GET['sex'])) {
		$sex = $_GET['sex'];
	} else {
		$sex = "ไม่ระบุ";
	}

	if (isset($_GET['source1'])) {
		$source1 = $_GET['source1'];	
	}
	if (isset($_GET['source2'])) {
		$source2 = $_GET['source2'];	
	}
	if (isset($_POST['source3'])) {
		$source3 = $_GET['source3'];	
	}

	echo "ชื่อ-นามสกุล คือ $name <br>";
	echo "เพศ $sex   <br>";
	echo "ระดับการศึกษาสูงสุด คือ $education <br>";
	echo "ข้าพเจ้าทราบมาจาก $source1 เเละ $source2 เเละ $source3 <br>";
	echo "คำเเนะนำสำหรับเว็บไซต์ คือ $comment "; 
 ?>