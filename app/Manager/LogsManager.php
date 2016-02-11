<?php

namespace Manager;

class LogsManager extends \W\Manager\Manager {

	public function loadSession($sessionId)
	{
		if (!is_numeric($sessionId)){
			return false;
		}

		$sql = 'SELECT id, firstname, lastname, email, password, birthday  FROM ' . $this->table . ' WHERE id = :id LIMIT 1';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $sessionId);
		$sth->execute();

		$result = $sth->fetch(\PDO::FETCH_ASSOC);
		return $result['id'];
	}


}