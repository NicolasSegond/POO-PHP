<?php

trait Printable
{
    public function getClassName():string
    {
        return strtolower(getClassName());
    }
}