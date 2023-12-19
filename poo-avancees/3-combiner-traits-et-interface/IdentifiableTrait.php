<?php

trait IdentifiableTrait
{
    public function getHexId(): string
    {
        return bin2hex(random_bytes(8));
    }
}