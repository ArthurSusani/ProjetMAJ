<?php
	namespace Manager;

	class OpinionManager extends \W\Manager\Manager
	{
		public function insertopinion($id,$datestart,$dateend,$room,$rate,$comment)
		{
			if(empty($id) || empty($datestart) || empty($dateend) || empty($room) || empty($rate) || empty($comment)){
				return false;
			}

		$sql = 'INSERT INTO contact() VALUES (:id,:datestart,:dateend,:room,:rate,:comment)';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $id);
		$sth->bindValue(':datestart', $datestart);
		$sth->bindValue(':dateend', $dateend);
		$sth->bindValue(':room', $room);
		$sth->bindValue(':rate', $rate);
		$sth->bindValue(':comment', $comment);

		$sth->execute();
		}

		public function viewopinion(){
			$sql = 'SELECT * FROM opinion LEFT JOIN logs ON opinion.id_logs=logs.id';
			$sth = $this->dbh->prepare($sql);
			$sth->execute();

			$result = $sth->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		}

		/*public function findByListId($contactid){

			if(!is_numeric($contactid)){
				return false;
			}

			$sql = 'SELECT * FROM contact WHERE id=:id';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id', $contactid);
			$sth->execute();
			return $sth->fetchAll();
		}*/
	}
?>