<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use \DateTime;

abstract class EntityAbstract
{
    /**
     * @ORM\Column(name="date_created", type="datetime")
     */
    protected $dateCreated;

    /**
     * @ORM\PrePersist
     */
    public function setNowOnCreate()
    {
        $this->dateCreated = new DateTime();
    }

    /**
     * @ORM\Column(name="date_updated", type="datetime", nullable=true)
     */
    protected $dateUpdated;

    /**
     * @ORM\PreUpdate()
     */
    public function setNowOnUpdate()
    {
        $this->dateUpdated = new DateTime();
    }

    /**
     * Returns the date when this post was created.
     * @return string
     */
    public function getDateCreated()
    {
        $this->dateCreated->setTimezone(
            new \DateTimeZone('America/Sao_Paulo'));

        return $this->dateCreated;
    }

    /**
     * Sets the date when this post was created.
     * @param string $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Returns the date when this post was created.
     * @return string
     */
    public function getDateUpdated()
    {
        $this->dateUpdated->setTimezone(
            new \DateTimeZone('America/Sao_Paulo'));

        return $this->dateUpdated;
    }

    /**
     * Sets the date when this post was created.
     * @param string $dateUpdated
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    }
}