<?php

namespace App\Model;

use Framework\Model;
use \PDO;

class AccountModel extends Model
{
    public function getAll()
    {
        $db = $this->getDb();
        $stmt = $db->query('SELECT * FROM account');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAccount($id)
    {
        $db = $this->getDb();
        $stmt = $db->query('SELECT * FROM account WHERE id =' . $id);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}