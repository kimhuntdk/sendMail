<meta charset="utf-8">
<?php
require_once('PHPMailer/PHPMailerAutoload.php');
    $mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls"; //ตรงส่วนนี้ผมไม่แน่ใจ ลองเปลี่ยนไปมาใช้งานได้
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;  //ตรงส่วนนี้ผมไม่แน่ใจ ลองเปลี่ยนไปมาใช้งานได้
	$mail->isHTML();
	$mail->CharSet = "utf-8"; //ตั้งเป็น UTF-8 เพื่อให้อ่านภาษาไทยได้
	$mail->Username = "graduate@msu.ac.th"; //ให้ใส่ Gmail ของคุณเต็มๆเลย
	$mail->Password = "Grad@123456789"; // ใส่รหัสผ่าน
	$mail->SetFrom = ('graduate@msu.ac.th'); //ตั้ง email เพื่อใช้เป็นเมล์อ้างอิงในการส่ง ใส่หรือไม่ใส่ก็ได้ เพราะผมก็ไม่รู้ว่ามันแาดงให้เห็นตรงไหน
	$mail->FromName = "บัณฑิตวิทยาลัย มมส"; //ชื่อที่ใช้ในการส่ง
	$mail->Subject = "[Admission GS]";  //หัวเรื่อง emal ที่ส่ง
	$mail->Body = "เรียน  เจ้าหน้าที่ผู้รับผิดชอบงานคัดเลือก/ผู้สมัครเข้าศึกษา/To officials responsible for selection/ applicants
<br>เรื่อง สมัครเรียนระดับปริญญาโท/เอก <br>
ระบบ Admission Graduate School

ระบบได้รับข้อมูลการสมัครเข้าศึกษาเรียบร้อยแล้ว ท่านสามารถตรวจสอบข้อมูล/พิมพ์ใบสมัคร ตามลิงค์ด้านล่างนี้


<br><br>
จึงเรียนมาเพื่อโปรดทราบ <br>
งานระบบสารสนเทศ บัณฑิตวิทยาลัย มหาวิทยาลัยมหาสารคาม <br>
สอบถามเพิ่มเติมได้ที่ 043-754412 ต่อ 1638 <br>
 email : admission.gs@msu.ac.th  
 
<br><br>
<br>Subject:  Master / Doctoral degree application <br>

The system has already received the application info. You are able to review your information/ print the application form with a provided link below:


<br><br>
Please be informed accordingly. <br>
Graduate School Information System, Mahasarakham University <br>
For more info, contact 043-754412 ext. 1638 <br>
Email : admission.gs@msu.ac.th  

"; //รายละเอียดที่ส่ง
	//$mail->AddAddress('graduate@msu.ac.th','เจ้าหน้าที่'); //อีเมล์และชื่อผู้รับ
    $mail->addBCC("jakkrid.b@msu.ac.th");
	//ส่วนของการแนบไฟล์ ซึ่งทดสอบแล้วแนบได้จริงทั้งไฟล์ .rar , .jpg , png ซึ่งคงมีหลายนามสกุลที่แนบได้
	//$mail->AddAttachment("files/1.rar");
	//ตรวจสอบว่าส่งผ่านหรือไม่
	if ($mail->Send()){
	echo "ข้อความของคุณได้ email";
	}else{
	echo "การส่งไม่สำเร็จ";
	}
?>