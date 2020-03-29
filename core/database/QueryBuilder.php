<?php

namespace App\Core\Database;

class QueryBuilder
{
    protected $pdo;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':'.implode(', :', array_keys($parameters))
        );
        $statement = $this->pdo->prepare($sql);
        $statement->execute($parameters);
    }
    
}