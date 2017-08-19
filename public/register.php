<!DOCTYPE html>
<html lang="ja"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DonationShare</title>
<meta name="keywords" content="寄付とPRを賢くする。" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<link href="" rel="shortcut icon" type="image/x-icon">
<link rel='stylesheet' type='text/css' href='design.css'>
<link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css"/><script src="js/jquery-2.0.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
//jQuery
$(document).ready(function(){

});
</script>
</head>
<!------------------------------------------ body ----------------------------------------->
<body>
<div id="page">
<?php include("header.php"); ?>
<div style="height: 80px;"></div>

<div style="background: #f2f2f2;padding:50px 0px;">
	
	
	
<div style="width:500px;border-radius: 5px;background: #fff;margin:auto;">
<div style="padding:20px 20px;">
	
	<form action="home/" method="get">
		<p style="font-size:30px;font-weight: bold;text-align: center;"><i class="fa fa-sign-in"></i> 新規登録</p>
		
		<p  style="font-size: 18px;margin:10px 0px 5px 0px;">メールアドレス</p>
		<input type="text" name="mail" placeholder="info@tomotomo.com" style="width:100%;box-sizing: border-box;height:30px;line-height:30px;font-size:16px;color:#333;">
						
		<p  style="font-size: 18px;margin:10px 0px 5px 0px;">お名前</p>
		<input type="text" name="mail" placeholder="高橋 篤樹" style="width:100%;box-sizing: border-box;height:30px;line-height:30px;font-size:16px;color:#333;">
		
		<p  style="font-size: 18px;margin:10px 0px 5px 0px;">パスワード</p>
		<input type="password" name="pass" placeholder="password" style="width:100%;box-sizing: border-box;height:30px;line-height:30px;font-size:16px;color:#333;">
		
		
		<input type="submit" value="登録する" style="margin-top:20px;font-size: 20px; width:100%;box-sizing: border-box;height:40px;line-height:40px;border:none;background:#ff9131;color:#fff;border-radius: 5px;cursor: pointer;">
	</form>
	
</div>
</div>


</div>

<?php include("footer.php");?>

<!-------------- page end -------------->
</div>
<!-- コメント -->
</body>
</html>
