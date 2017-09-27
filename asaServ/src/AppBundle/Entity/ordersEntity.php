<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ordersEntity
 *
 * @ORM\Table(name="orders_entity")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ordersEntityRepository")
 */
class ordersEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="modofcar", type="string", length=255)
     */
    private $modofcar;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set modofcar
     *
     * @param string $modofcar
     *
     * @return ordersEntity
     */
    public function setModofcar($modofcar)
    {
        $this->modofcar = $modofcar;

        return $this;
    }

    /**
     * Get modofcar
     *
     * @return string
     */
    public function getModofcar()
    {
        return $this->modofcar;
    }
}

