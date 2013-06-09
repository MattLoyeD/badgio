<?php

namespace Badgio\CategoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category_Feed
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Badgio\CategoryBundle\Entity\Category_FeedRepository")
 */
class Category_Feed
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
     * @ORM\Column(name="id_category", type="integer")
     */
    private $idCategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_feed", type="integer")
     */
    private $idFeed;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_seen", type="datetime")
     */
    private $lastSeen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="add_date", type="datetime")
     */
    private $addDate;


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
     * Set idCategory
     *
     * @param integer $idCategory
     * @return Category_Feed
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
    
        return $this;
    }

    /**
     * Get idCategory
     *
     * @return integer 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set idFeed
     *
     * @param integer $idFeed
     * @return Category_Feed
     */
    public function setIdFeed($idFeed)
    {
        $this->idFeed = $idFeed;
    
        return $this;
    }

    /**
     * Get idFeed
     *
     * @return integer 
     */
    public function getIdFeed()
    {
        return $this->idFeed;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Category_Feed
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set lastSeen
     *
     * @param \DateTime $lastSeen
     * @return Category_Feed
     */
    public function setLastSeen($lastSeen)
    {
        $this->lastSeen = $lastSeen;
    
        return $this;
    }

    /**
     * Get lastSeen
     *
     * @return \DateTime 
     */
    public function getLastSeen()
    {
        return $this->lastSeen;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return Category_Feed
     */
    public function setAddDate($addDate)
    {
        $this->addDate = $addDate;
    
        return $this;
    }

    /**
     * Get addDate
     *
     * @return \DateTime 
     */
    public function getAddDate()
    {
        return $this->addDate;
    }
}
