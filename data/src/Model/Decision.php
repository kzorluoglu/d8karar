<?php

namespace D8Devs\D8Karar\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="decisions")
 */
class Decision
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     */
    protected $category;

    /**
     * @ORM\Column(type="string")
     */
    protected $text;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    protected $date;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isNext;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isAfter;



    /**
     * Set the value of Title
     *
     * @param mixed title
     *
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get the value of Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Category
     *
     * @param mixed category
     *
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Get the value of Category
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of Text
     *
     * @param mixed text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Get the value of Text
     *
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of Date
     *
     * @param mixed date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get the value of Date
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of Is Next
     *
     * @param mixed isNext
     */
    public function setIsNext($isNext)
    {
        $this->isNext = $isNext;
    }

    /**
     * Get the value of Is Next
     *
     * @return mixed
     */
    public function getIsNext()
    {
        return $this->isNext;
    }

    /**
     * Set the value of Is After
     *
     * @param mixed isAfter
     */
    public function setIsAfter($isAfter)
    {
        $this->isAfter = $isAfter;
    }

    /**
     * Get the value of Is After
     *
     * @return mixed
     */
    public function getIsAfter()
    {
        return $this->isAfter;
    }

}
