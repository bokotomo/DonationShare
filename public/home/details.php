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


<div style="padding:50px 0px;background:#f2f2f2;">

<div style="width:1000px;margin:auto;">
	<div style="font-size:30px;font-weight: bold;color:#333;margin-bottom:20px;">
		<div style="float:left;">医療製品SUOD</div>
		<div style="margin-left:20px;background: #41cbea;color:#fff;width:120px;height:40px;line-height:40px;text-align: center;float: left;border-radius: 5px;font-size: 18px;font-weight: 100;cursor: pointer;">編集する</div>
		<div class="clear-fix"></div>
	</div>
	<div style="background-image: url('img/t1.jpg');width:500px;height:333px;background-size: 100% auto;float:left;"></div>
	<div style="width:480px;height:333px;float:right;color:#333;">
		<p  style="font-size: 23px;">達成率 25%</p>
		<div class="barchart">
			<div class="date1" style="width:25%"></div>
		</div>
		<div style="width:49%;float:left;">
			<p style="font-size: 23px;margin-top: 20px;border-bottom: 1px solid #ddd;"><i class="fa fa-share"></i> シェア数</p>
			<p style="font-size: 18px;margin-top:10px;">250シェア</p>
		</div>
		<div style="width:49%;float:right;">
			<p style="font-size: 23px;margin-top: 20px;border-bottom: 1px solid #ddd;"><i class="fa fa-clock-o"></i> 日数</p>
			<p style="font-size: 18px;margin-top:10px;">10日目</p>
		</div>
		<div class="clear-fix"></div>
		<p style="font-size: 23px;margin-top: 20px;border-bottom: 1px solid #ddd;"><i class="fa fa-paper-plane-o"></i> 寄付先</p>
		<p style="font-size: 18px;margin-top: 10px;"><a href="http://www.slow.gr.jp" target="_blank">森のライフスタイル研究所</a></p>
	</div>
	<div class="clear-fix"></div>
	
	<div style="border-top:1px solid #ddd;margin-top:50px;">
		<p>ないようだよ！</p>
	</div>
	
	<div style="cursor: pointer;margin:50px auto 20px;border-radius: 10px;background:#3b5998;text-align: center;color: #fff;padding:10px 0px;">
		FaceBookでシェアする
	</div>
	
</div>



</div>
<?php include("../footer.php");?>

<!-------------- page end -------------->
</div>
<!-- コメント -->
</body>
</html>
