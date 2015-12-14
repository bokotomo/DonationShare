<?php
// connect DB
class PDOManager
{
	private $PDO;
	
	function __construct()
	{
		$this->getPDO();
	}


	function getPDO(){
		if (is_null($this->PDO)) {
			try {

				//ローカル環境用
				$DB_name = "donationshare";
				$host_name = "localhost";
				$DSN = "mysql:dbname=".$DB_name.";host=".$host_name.";charset=utf8";
				$username = "atom";
				$pass = "takatom";
				$this->PDO = new PDO($DSN, $username, $pass);
				//エラーモードとプリペアドステートメントを設定
				$this->PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$this->PDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

			} catch (PDOException $exception) {

				die("SQL接続エラー:".$exception->getMessage());
			}
		}
		return $this->PDO;
	}
}
?>