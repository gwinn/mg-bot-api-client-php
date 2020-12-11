<?php

/**
 * PHP version 7.1
 *
 * ChannelSettings entity
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Channel;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * Class ChannelSettings
 *
 * @package  RetailCrm\Mg\Bot\Model\Entity\Channel
 */
class ChannelSettings implements ModelInterface
{
    /**
     * @var ChannelSettingsStatus $status
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Channel\ChannelSettingsStatus")
     * @Accessor(getter="getStatus",setter="setStatus")
     */
    private $status;

    /**
     * @var bool $spamAllowed
     *
     * @Type("bool")
     * @Accessor(getter="getStatus",setter="setStatus")
     */
    private $spamAllowed;

    /**
     * @var ChannelSettingsItem $text
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Channel\ChannelSettingsItem")
     * @Accessor(getter="getText",setter="setText")
     * @SkipWhenEmpty()
     */
    private $text;

    /**
     * @var ChannelSettingsItem $product
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Channel\ChannelSettingsItem")
     * @Accessor(getter="getProduct",setter="setProduct")
     * @SkipWhenEmpty()
     */
    private $product;

    /**
     * @var ChannelSettingsItem $order
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Channel\ChannelSettingsItem")
     * @Accessor(getter="getOrder",setter="setOrder")
     * @SkipWhenEmpty()
     */
    private $order;

    /**
     * @var ChannelSettingsItem $image
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Channel\ChannelSettingsItem")
     * @Accessor(getter="getImage",setter="setImage")
     * @SkipWhenEmpty()
     */
    private $image;

    /**
     * @var ChannelSettingsItem $file
     *
     * @Type("RetailCrm\Mg\Bot\Model\Entity\Channel\ChannelSettingsItem")
     * @Accessor(getter="getFile",setter="setFile")
     * @SkipWhenEmpty()
     */
    private $file;

    /**
     * @return ChannelSettingsStatus|null
     */
    public function getStatus(): ?ChannelSettingsStatus
    {
        return $this->status;
    }

    /**
     * @param ChannelSettingsStatus $status
     */
    public function setStatus(ChannelSettingsStatus $status)
    {
        $this->status = $status;
    }

    /**
     * @return bool|null
     */
    public function isSpamAllowed(): ?bool
    {
        return $this->spamAllowed;
    }

    /**
     * @param bool $spamAllowed
     */
    public function setSpamAllowed(bool $spamAllowed)
    {
        $this->spamAllowed = $spamAllowed;
    }

    /**
     * @return ChannelSettingsItem|null
     */
    public function getText(): ?ChannelSettingsItem
    {
        return $this->text;
    }

    /**
     * @param ChannelSettingsItem $text
     */
    public function setText(ChannelSettingsItem $text)
    {
        $this->text = $text;
    }

    /**
     * @return ChannelSettingsItem|null
     */
    public function getProduct(): ?ChannelSettingsItem
    {
        return $this->product;
    }

    /**
     * @param ChannelSettingsItem $product
     */
    public function setProduct(ChannelSettingsItem $product)
    {
        $this->product = $product;
    }

    /**
     * @return ChannelSettingsItem|null
     */
    public function getOrder(): ?ChannelSettingsItem
    {
        return $this->order;
    }

    /**
     * @param ChannelSettingsItem $order
     */
    public function setOrder(ChannelSettingsItem $order)
    {
        $this->order = $order;
    }

    /**
     * @return ChannelSettingsItem|null
     */
    public function getImage(): ?ChannelSettingsItem
    {
        return $this->image;
    }

    /**
     * @param ChannelSettingsItem $image
     */
    public function setImage(ChannelSettingsItem $image)
    {
        $this->image = $image;
    }

    /**
     * @return ChannelSettingsItem|null
     */
    public function getFile(): ?ChannelSettingsItem
    {
        return $this->file;
    }

    /**
     * @param ChannelSettingsItem $file
     */
    public function setFile(ChannelSettingsItem $file)
    {
        $this->file = $file;
    }
}
