<?php

namespace Autourdujeu\GameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="games")
 * @ORM\Entity(repositoryClass="Autourdujeu\GameBundle\Repository\GameRepository")
 */
class Game
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
    private $title;

    /**
     * @var ArrayCollection
     *
     */
    private $photos;

    // @TODO: Add rules to game (upload multiple PDF Files)
    //private $rules;

    /**
     * @var GameType
     * @ORM\ManyToOne(targetEntity="Autourdujeu\GameBundle\Entity\GameType", cascade={"persist"})
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $editor;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
     private $content;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $player_min;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $player_max;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $player_recommanded;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $player_age;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $time;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     *
     * 1-100%
     */
    private $complexity;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     *
     * 1-100%
     */
    private $zen;

    /**
     * @return array
     */
    public static function getArrayLang(){
        return array(
            1 => 'Français',
            2 => 'Anglais',
            3 => 'Allemand',
            4 => 'Breton'
        );
    }

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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param ArrayCollection $photos
     * @return $this
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
        return $this;
    }

    /**
     * @return GameType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param GameType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param int $lang
     * @return $this
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @return string
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param string $editor
     * @return $this
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayerMin()
    {
        return $this->player_min;
    }

    /**
     * @param int $player_min
     * @return $this
     */
    public function setPlayerMin($player_min)
    {
        $this->player_min = $player_min;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayerMax()
    {
        return $this->player_max;
    }

    /**
     * @param int $player_max
     * @return $this
     */
    public function setPlayerMax($player_max)
    {
        $this->player_max = $player_max;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayerRecommanded()
    {
        return $this->player_recommanded;
    }

    /**
     * @param int $player_recommanded
     * @return $this
     */
    public function setPlayerRecommanded($player_recommanded)
    {
        $this->player_recommanded = $player_recommanded;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayerAge()
    {
        return $this->player_age;
    }

    /**
     * @param int $player_age
     * @return $this
     */
    public function setPlayerAge($player_age)
    {
        $this->player_age = $player_age;
        return $this;
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param int $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return int
     */
    public function getComplexity()
    {
        return $this->complexity;
    }

    /**
     * @param int $complexity
     * @return $this
     */
    public function setComplexity($complexity)
    {
        $this->complexity = $complexity;
        return $this;
    }

    /**
     * @return int
     */
    public function getZen()
    {
        return $this->zen;
    }

    /**
     * @param int $zen
     * @return $this
     */
    public function setZen($zen)
    {
        $this->zen = $zen;
        return $this;
    }
}

