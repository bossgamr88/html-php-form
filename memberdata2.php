<?php 
	echo "ชื่อ-นามสกุล คือ " . $_POST['name']. "<br>";
	if (isset($_POST['sex'])) {
		echo "เพศ " . $_POST['sex'] . "<br>";
	} else {
		echo "เพศ ไม่ระบุ <br>";
	}
	echo "ระดับการศึกษาสูงสุด คือ " . $_POST['education'] . "<br>";
	echo "ข้าพเจ้าทราบมาจาก ";
	if (isset($_POST['source1'])) {
		echo $_POST['source1'];	
	}
	if (isset($_POST['source2'])) {
		echo " เเละ " . $_POST['source2'];	
	}
	if (isset($_POST['source3'])) {
		echo " เเละ " . $_POST['source3'];	
	}
	echo "<br>";
	echo "คำเเนะนำสำหรับเว็บไซต์ คือ " . $_POST['comment'];
 ?>