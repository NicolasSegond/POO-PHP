<?php

namespace Postgres;

class Connection
{
    public string $dsn = 'postgre:dsn';

    public function connect(): string
    {
        return 'Connect to '.$this->dsn;
    }
}