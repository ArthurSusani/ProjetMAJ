<?php
	
	namespace Manager;

	class BookingManager extends \W\Manager\Manager
	{
		public function create($id, $id_user, $id_room, $begin, $end, $validate, $price)
		{
			if (!is_numeric($id_user) || !is_numeric($id_room) ||!is_numeric($id) || empty($todoName)){
			return false;
		}

		$sql = 'INSERT INTO ' . $this->table . '(name, id_list) VALUES(:todoname, :idlist)';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':todoname', $todoName);
		$sth->bindValue(':idlist', $todoListId);
		$sth->execute();

		return $this->dbh->lastInsertId();
		}
	}