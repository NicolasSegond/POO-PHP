<?php

namespace MySql;

class Connection
{
    public string $dsn = 'mysql:dsn';

    public function connect(): string
    {
        return 'Connect to '.$this->dsn;
    }
}