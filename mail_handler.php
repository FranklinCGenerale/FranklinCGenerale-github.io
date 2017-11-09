?php
	if(isset($_POST['submit'])){
		$name=$POST['name'];
		$email=$POST['email'];
		$phone=$POST['phone'];
		$msg=$POST['msg'];

		$to='malilgenerale@gmail.com';
		$message='Form Submission';
		$message="Name: ".$name."\n".'Phone: ".$phone."\n".  "Wrote the following: "."\n\n".$msg;
		$headers="From: ".#email;

		if(mail($to, $subject, $message, $heeaders)){
			echo "<h1>Sent Succesfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong";
		}
	}
?>