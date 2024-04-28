<?php
namespace Patterns\Builder;

interface SQLBuilderInterface
{
    public function select(string $table, array $fields);

    public function where(string $field, string $value, string $operator = '=');

    public function limit(int $start, int $offset);

    public function getSQL();
}