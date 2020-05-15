<?php


namespace BiiiiiigMonster\Relation\Annotation\Mapping;


class BelongsToMany
{
    private $related;
    private $table = '';
    private $foreignPivotKey = '';
    private $relatedPivotKey = '';
    private $parentKey = '';
    private $relatedKey = '';
    private $relation = '';
}
