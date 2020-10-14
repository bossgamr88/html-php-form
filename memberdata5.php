<?php 
	$name = $_POST['name'];
	$education = $_POST['education'];
	$source1 = "";
	$source2 = "";
	$source3 = "";
	$comment = $_POST['comment'];

	if (isset($_POST['sex']))
		$sex = $_POST['sex'];

	if (isset($_POST['source1'])) 
		$source1 = $_POST['source1'];	
	
	if (isset($_POST['source2'])) 
		$source2 = $_POST['source2'];	
	
	if (isset($_POST['source3'])) 
		$source3 = $_POST['source3'];	
	
	echo "ชื่อ-นามสกุล คือ $name <br>";
	if ($sex === "1") {
		echo "เพศชาย <br>";	
	} else if($sex === "2") {
		echo "เพศหญิง <br>";	
	} else {
		echo "เพศหญิง <br>";	
	}
	
	switch ($education) {
		case "1": echo "ระดับการศึกษาสูงสุด คือ ต่ำกว่าปริญาญาตรี <br>"; break;
		case "2": echo "ระดับการศึกษาสูงสุด คือ ปริญาญาตรี <br>"; break;
		case "3": echo "ระดับการศึกษาสูงสุด คือ ปริญาญาโท <br>"; break;
		case "4": echo "ระดับการศึกษาสูงสุด คือ ปริญาญาเอก <br>"; break;
	}

	if (($source1=="1") && ($source2=="2") && ($source3=="3")) {
		echo "ทราบเว็บไซต์จาก เพื่อน เเละ Search Engine" . "เเละ โฆษณา <br> ";
	} elseif (($source1=="1") && ($source2=="2")) {
		echo "ทราบเว็บไซต์จาก เพื่อน เเละ Search Engine <br>";
	} elseif (($source1=="1") && ($source3=="3")){
		echo "ทราบเว็บไซต์จาก เพื่อน เเละ โฆษณา <br> ";
	} elseif ($source1=="1") {
		echo "ทราบเว็บไซต์จาก เพื่อน <br>";
	} elseif (($source2=="2") && ($source2=="3")) {
		echo "Search Engine" . "เเละ โฆษณา <br> ";
	} elseif ($source2=="2") {
		echo "ทราบเว็บไซต์จาก Search Engine <br>";
	} elseif ($source2=="3") {
		echo "ทราบเว็บไซต์จาก โฆษณา <br>";
	} else {
		echo "ทราบเว็บไซต์จาก ไม่ได้เลือกตัวเลือกใด";
	}
	echo "คำเเนะนำสำหรับเว็บไซต์ คือ $comment";
 ?>