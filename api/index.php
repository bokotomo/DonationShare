<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>トップ</title>
</head>
<body>
<h1>テストページ</h1>
<?php
$client_id = 1;
$result = file_get_contents('getClientProject.php?client_id=1');
// $result = file_get_contents('getClientProject.php', false, stream_context_create(
// 	array('http'=>array(
// 		'method'=>'POST',
// 		'header' => implode(
//           "\r\n",
//           array(
//             'Content-Type: application/x-www-form-urlencoded'
//           )
//         ),
//         'content'=>http_build_query(array('client_id'=>$client_id))))));
echo $result;
?>
</body>
</html>