<?php

namespace Badgio\FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeedCache
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Badgio\FeedBundle\Entity\FeedCacheRepository")
 */
class FeedCache
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_rss", type="integer")
     */
    private $idRss;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pub_date", type="datetime")
     */
    private $pubDate;

    /**
     * @var string
     *
     * @ORM\Column(name="image_src", type="string", length=255)
     */
    private $imageSrc;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idRss
     *
     * @param integer $idRss
     * @return FeedCache
     */
    public function setIdRss($idRss)
    {
        $this->idRss = $idRss;
    
        return $this;
    }

    /**
     * Get idRss
     *
     * @return integer 
     */
    public function getIdRss()
    {
        return $this->idRss;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return FeedCache
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return FeedCache
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return FeedCache
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    
        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set pubDate
     *
     * @param \DateTime $pubDate
     * @return FeedCache
     */
    public function setPubDate($pubDate)
    {
        $this->pubDate = $pubDate;
    
        return $this;
    }

    /**
     * Get pubDate
     *
     * @return \DateTime 
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * Set imageSrc
     *
     * @param string $imageSrc
     * @return FeedCache
     */
    public function setImageSrc($imageSrc)
    {
        $this->imageSrc = $imageSrc;
    
        return $this;
    }

    /**
     * Get imageSrc
     *
     * @return string 
     */
    public function getImageSrc()
    {
        return $this->imageSrc;
    }
}
