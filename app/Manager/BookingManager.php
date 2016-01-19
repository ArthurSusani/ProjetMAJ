<?php
	
	namespace Manager;

	class BookingManager extends \W\Manager\Manager
	{
		public function create($id_user, $id_room, $begin, $end, $validate, $price)
		{
			if (!is_numeric($id_user) || !is_numeric($id_room) || empty($begin) || empty($end) || empty($validate) || empty($price)){
			return false;
		}
		$sql = 'INSERT INTO ' . $this->table . '( id_user, id_room, begin, end, validate, price ) VALUES(:id_user, :id_room, :begin, :end, :validate, :price)';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id_user', $id_user);
		$sth->bindValue(':id_room', $id_room);
		$sth->bindValue(':begin', $begin);
		$sth->bindValue(':end', $end);
		$sth->bindValue(':validate', $validate);
		$sth->bindValue(':price', $price);

		$sth->execute();
		echo "stfu";
		if(!empty($this->dbh->lastInsertId())){
			return $this->dbh->lastInsertId();
		}else{
			return false;
		}


		}
	}