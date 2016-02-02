<?php
	namespace Manager;

	class OpinionManager extends \W\Manager\Manager
	{
		public function insertopinion($id,$datestart,$dateend,$room,$rate,$comment)
		{
			if(empty($id) || empty($datestart) || empty($dateend) || empty($room) || empty($rate) || empty($comment)){
				echo "toujours pas .";
				die();
			}

			$sql = 'INSERT INTO opinions(id_logs, datestart, dateend, room, rate, comment) VALUES (:id,:datestart,:dateend,:room,:rate,:comment)';
			$sth = $this->dbh->prepare($sql);
			$sth->bindParam(':id', $id);
			$sth->bindParam(':datestart', $datestart);
			$sth->bindParam(':dateend', $dateend);
			$sth->bindParam(':room', $room);
			$sth->bindParam(':rate', $rate);
			$sth->bindParam(':comment', $comment);

			return $sth->execute();
		}

		public function viewopinion(){
			$sql = 'SELECT * FROM opinions LEFT JOIN logs ON opinions.id_logs = logs.id  ';
			$sth = $this->dbh->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		}
<<<<<<< HEAD


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
=======
>>>>>>> 37f9ea48e75cbd9dffb339153f4f1b0df57526fd
	}
?>