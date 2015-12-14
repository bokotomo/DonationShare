<?php
require_once("ProjectManager.php");

if (!isset($_POST["client_id"])) die("[client_id] is empty");
$unescaped_client_id = $_POST["client_id"];
$client_id = htmlspecialchars($unescaped_client_id);

$ProjectManager = new ProjectManager();

echo $ProjectManager->getClientProject($client_id);
echo "string";
?>