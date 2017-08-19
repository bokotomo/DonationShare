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
<link rel='stylesheet' type='text/css' href='../design.css'>
<link rel="stylesheet" href="../font/font-awesome/css/font-awesome.min.css"/><script src="../js/jquery-2.0.2.min.js" type="text/javascript"></script>
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



<div style="padding:50px 0px 50px 0px;background:#f2f2f2;">

<div style="width:1000px;margin:auto;background: #fff;border-radius: 10px;">
	<div style="padding:20px 20px;">
		<p style="text-align: center;font-size:30px;font-weight: bold;padding:20px 0px;">プロジェクトの追加</p>
		<form action="details.php" method="post" enctype="multipart/form-data">
			
			<p style="font-size:20px;">プロジェクト名</p>
			<input type="text" name="name" placeholder="DunationShareリリース" style="margin-top:10px;width:100%;box-sizing: border-box;height:30px;line-height:30px;font-size:16px;color:#333;">
			
			<p style="font-size:20px;margin-top:20px;">達成シェア数<span style="font-size:16px;">(※目標数分までの寄付しかされません。)</span></p>
			<input type="number" name="share" placeholder="1000" style="margin-top:10px;width:100%;box-sizing: border-box;height:30px;line-height:30px;font-size:16px;color:#333;">
			
			<p style="font-size:20px;margin-top:20px;">寄付先<a href="" target="_blank" style="font-size:16px;">(寄付先を詳しくみる)</a></p>
			<select name="dunation" style="cursor:pointer;margin-top:10px;width:100%;box-sizing: border-box;height:30px;line-height:30px;font-size:16px;color:#333;">
				<option value="">a</option>
				<option value="">b</option>
				<option value="">c</option>
				<option value="">d</option>
				<option value="">e</option>
			</select>
			
			<p style="font-size:20px;margin-top:20px;">サムネイル画像</p>
			<input type="file" name="file" style="margin-top:10px;">
			
			<input type="submit" value="登録する" style="margin-top:20px;font-size: 20px; width:100%;box-sizing: border-box;height:40px;line-height:40px;border:none;background:#ff9131;color:#fff;border-radius: 5px;cursor: pointer;">
		</form>
		<p></p>
	</div>
</div>

</div>
<?php include("../footer.php");?>

<!-------------- page end -------------->
</div>
<!-- コメント -->
</body>
</html>
