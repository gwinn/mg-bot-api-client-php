<?php

/**
 * PHP version 7.1
 *
 * MessageQuantity entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * MessageQuantity class
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Message
 */
class MessageQuantity implements ModelInterface
{
    /**
     * @var float $value
     *
     * @Type("float")
     * @Accessor(getter="getValue",setter="setValue")
     * @SkipWhenEmpty()
     */
    private $value;

    /**
     * @var string $unit
     *
     * @Type("string")
     * @Accessor(getter="getUnit",setter="setUnit")
     *
     * @Assert\Currency
     */
    private $unit;

    /**
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue(float $value)
    {
        $this->value = $value;
    }

    /**
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     */
    public function setUnit(string $unit)
    {
        $this->unit = $unit;
    }
}
