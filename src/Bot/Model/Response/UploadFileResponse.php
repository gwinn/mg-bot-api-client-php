<?php

/**
 * PHP version 7.1
 *
 * UploadFileResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 */

namespace RetailCrm\Mg\Bot\Model\Response;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\Entity\FileMeta;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * UploadFileResponse class
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 */
class UploadFileResponse implements ModelInterface
{
    use CommonFields;

    /**
     * @var string $createdAt
     *
     * @Type("string")
     * @Accessor(getter="getCreatedAt",setter="setCreatedAt")
     * @SkipWhenEmpty()
     */
    private $createdAt;

    /**
     * @var string $hash
     *
     * @Type("string")
     * @Accessor(getter="getHash",setter="setHash")
     * @SkipWhenEmpty()
     */
    private $hash;

    /**
     * @var string $id
     *
     * @Type("string")
     * @Accessor(getter="getId",setter="setId")
     * @SkipWhenEmpty()
     */
    private $id;

    /**
     * @var FileMeta $meta
     *
     * @Type("FileMeta")
     * @Accessor(getter="getMeta",setter="setMeta")
     * @SkipWhenEmpty()
     */
    private $meta;

    /**
     * @var string $mimeType
     *
     * @Type("string")
     * @Accessor(getter="getMimeType",setter="setMimeType")
     * @SkipWhenEmpty()
     */
    private $mimeType;

    /**
     * @var int $size
     *
     * @Type("int")
     * @Accessor(getter="getSize",setter="setSize")
     * @SkipWhenEmpty()
     */
    private $size;

    /**
     * @var string $time
     *
     * @Type("string")
     * @Accessor(getter="getSourceUrl",setter="setSourceUrl")
     * @SkipWhenEmpty()
     */
    private $sourceUrl;

    /**
     * @var string $type
     *
     * @Type("string")
     * @Accessor(getter="getType",setter="setType")
     * @SkipWhenEmpty()
     */
    private $type;

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash)
    {
        $this->hash = $hash;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return FileMeta|null
     */
    public function getMeta(): ?FileMeta
    {
        return $this->meta;
    }

    /**
     * @param FileMeta $meta
     */
    public function setMeta(FileMeta $meta)
    {
        $this->meta = $meta;
    }

    /**
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     */
    public function setMimeType(string $mimeType)
    {
        $this->mimeType = $mimeType;
    }

    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return string|null
     */
    public function getSourceUrl(): ?string
    {
        return $this->sourceUrl;
    }

    /**
     * @param string $sourceUrl
     */
    public function setSourceUrl(string $sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }
}
