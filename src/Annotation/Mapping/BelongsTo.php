<?php


namespace BiiiiiigMonster\Relation\Annotation\Mapping;

use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Doctrine\Common\Annotations\Annotation\Required;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * Class BelongsTo
 * @package BiiiiiigMonster\Relation\Annotation\Mapping
 * @Annotation
 * @Target({"CLASS"})
 * @Attributes(
 *     @Attribute("related",type="string"),
 *     @Attribute("foreignKey",type="string"),
 *     @Attribute("ownerKey",type="string"),
 *     @Attribute("relation",type="string"),
 * )
 */
final class BelongsTo
{
    /**
     * @var string
     * @Required()
     */
    private $related;

    /**
     * @var string
     */
    private $foreignKey = '';

    /**
     * @var string
     */
    private $ownerKey = '';

    /**
     * @var string
     */
    private $relation = '';

    /**
     * BelongsTo constructor.
     * @param array $values
     */
    public function __construct(array $values)
    {
        if (isset($values['value'])) {
            $this->related = $values['value'];
        }
        if (isset($values['related'])) {
            $this->related = $values['related'];
        }
        if (isset($values['foreignKey'])) {
            $this->foreignKey = $values['foreignKey'];
        }
        if (isset($values['ownerKey'])) {
            $this->ownerKey = $values['ownerKey'];
        }
        if (isset($values['relation'])) {
            $this->relation = $values['relation'];
        }
    }

    /**
     * @return string
     */
    public function getRelated(): string
    {
        return $this->related;
    }

    /**
     * @return string
     */
    public function getForeignKey(): string
    {
        return $this->foreignKey;
    }

    /**
     * @return string
     */
    public function getOwnerKey(): string
    {
        return $this->ownerKey;
    }

    /**
     * @return string
     */
    public function getRelation(): string
    {
        return $this->relation;
    }
}
