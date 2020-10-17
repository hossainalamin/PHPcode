<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Api</title>
</head>
<?php  
if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']){
$to = $_POST['number'];
$token = "acd0069af0e40eb62acba975278c094e";
$message = $_POST['message'];
$url = "http://api.greenweb.com.bd/api.php";
$data= array(
'to'=>"$to",
'message'=>"$message",
'token'=>"$token"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);
echo $smsresult;
echo curl_error($ch);
}
?>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Number:</td>
				<td><input type="number" name="number" placeholder="Enter Your number"></td>
			</tr>
			<br>
			<tr>
				<td>Message:</td>
				<td><textarea name="message" placeholder="Message" cols="30" rows="10">
		</textarea>
				</td>
			</tr>
			<br>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Api</title>
</head>
<?php  
if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']){
$to = $_POST['number'];
$token = "acd0069af0e40eb62acba975278c094e";
$message = $_POST['message'];
$url = "http://api.greenweb.com.bd/api.php";
$data= array(
'to'=>"$to",
'message'=>"$message",
'token'=>"$token"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);
echo $smsresult;
echo curl_error($ch);
}
?>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Number:</td>
				<td><input type="number" name="number" placeholder="Enter Your number"></td>
			</tr>
			<br>
			<tr>
				<td>Message:</td>
				<td><textarea name="message" placeholder="Message" cols="30" rows="10">
		</textarea>
				</td>
			</tr>
			<br>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>