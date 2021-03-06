<?php
	
	namespace Manager;

	class IntroductManager extends \W\Manager\Manager
	{
		public function room(){
			$sql = 'SELECT * FROM rooms LIMIT 5';
			$sth = $this->dbh->prepare($sql);
			$sth->execute();

			$result = $sth->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		}

		public function findByListId($id){

			if(!is_numeric($id)){
				return false;
			}

			$sql = 'SELECT * FROM rooms WHERE id=:id';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id', $id);
			$sth->execute();
			return $sth->fetchAll();
		}

		public function findByBookingId($id){

			if(!is_numeric($id)){
				return false;
			}

			$sql = 'SELECT * FROM rooms WHERE id =:id';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id', $id);
			$sth->execute();
			return $sth->fetchAll();
		}
	}