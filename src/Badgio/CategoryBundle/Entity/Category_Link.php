<?php

namespace Badgio\CategoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category_Link
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Badgio\CategoryBundle\Entity\Category_LinkRepository")
 */
class Category_Link
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
     * @var \DateTime
     *
     * @ORM\Column(name="add_date", type="datetime")
     */
    private $addDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_category", type="integer")
     */
    private $idCategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_link", type="integer")
     */
    private $idLink;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;


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
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return Category_Link
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

    /**
     * Set idCategory
     *
     * @param integer $idCategory
     * @return Category_Link
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
     * Set idLink
     *
     * @param integer $idLink
     * @return Category_Link
     */
    public function setIdLink($idLink)
    {
        $this->idLink = $idLink;
    
        return $this;
    }

    /**
     * Get idLink
     *
     * @return integer 
     */
    public function getIdLink()
    {
        return $this->idLink;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Category_Link
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
}
