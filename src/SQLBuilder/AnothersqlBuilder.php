<?php

namespace Patterns\Builder;

class AnothersqlBuilder extends MysqlBuilder
{
    public function limit(int $start, int $offset)
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}