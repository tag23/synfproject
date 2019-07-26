<?php


namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ORM;

/**
 * Class Car
 * @package App\Entity
 * @ORM\Document
 */
class Car
{
    /**
     * @var int
     * @ORM\Id
     */
    protected $id;

    /**
     * @var string
     * @ORM\Field(type="string")
     */
    protected $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


}