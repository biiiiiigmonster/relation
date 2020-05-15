<?php


namespace BiiiiiigMonster\Relation\Annotation\Mapping;


class HasOneThrough
{
    private $related;
    private $through;
    private $firstKey = '';
    private $secondKey = '';
    private $localKey = '';
    private $secondLocalKey = '';
}
