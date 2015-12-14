<?php
require_once("PDO_manager.php");
/**
* 
*/
class ProjectManager extends PDOManager
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getClientProject($client_id)
	{
		if (!$client_id) $user_id = 0;

		try {
			$PDO = $this->getPDO();
			$sql_statement = "SELECT id, title, donate_rate, donate_max, donate_period, image_url, share_num, donate_sum FROM project WHERE client_id=:client_id";
			$stmh = $PDO->prepare($sql_statement);
			$stmh->bindValue(':client_id', $client_id);
			$stmh->execute();
			$results = $stmh->fetchAll(PDO::FETCH_ASSOC);
			$json_results = json_encode($results, JSON_UNESCAPED_UNICODE);
			return $json_results;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}


?>