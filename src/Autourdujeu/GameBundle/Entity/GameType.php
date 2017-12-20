<?php

namespace Autourdujeu\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameType
 *
 * @ORM\Table(name="game_types")
 * @ORM\Entity(repositoryClass="Autourdujeu\GameBundle\Repository\GameTypeRepository")
 */
class GameType
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
     * @ORM\Column(type="string")
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;


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
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param string $identifiant
     * @return $this
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

