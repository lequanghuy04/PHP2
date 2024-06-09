<?php
namespace Admin\BaseWd18407\Models;
use Admin\BaseWd18407\Commons\Model;
class User extends Model 
{
    protected string $tableName = 'users';

    public function findByEmail($email)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('email = ?')
            ->setParameter(0, $email)
            ->fetchAssociative();
    }
}