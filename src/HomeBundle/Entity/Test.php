<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\TestRepository")
 */
class Test
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
     * @ORM\Column(name="Band", type="string", length=255)
     */
    private $band;

    /**
     * @var string
     *
     * @ORM\Column(name="song", type="string", length=255)
     */
    private $song;


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
     * Set band
     *
     * @param string $band
     *
     * @return Test
     */
    public function setBand($band)
    {
        $this->band = $band;

        return $this;
    }

    /**
     * Get band
     *
     * @return string
     */
    public function getBand()
    {
        return $this->band;
    }

    /**
     * Set song
     *
     * @param string $song
     *
     * @return Test
     */
    public function setSong($song)
    {
        $this->song = $song;

        return $this;
    }

    /**
     * Get song
     *
     * @return string
     */
    public function getSong()
    {
        return $this->song;
    }
}

