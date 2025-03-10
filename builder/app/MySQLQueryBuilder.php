<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface {
    private array $fields = [];
    private ?string $table = null;
    private array $conditions = [];

    public function select(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table): self
    {
        $this->table = $table;
        return $this;
    }

    public function where(string $condition): self
    {
        $this->conditions[] = $condition;
        return $this;
    }

    public function getQuery(): string
    {

        $sql = "SELECT " . implode(", ", $this->fields) . " FROM " . $this->table;

        if (!empty($this->conditions)) {
            $sql .= " WHERE " . implode(" AND ", $this->conditions);
        }

        return $sql . ";";
    }
}