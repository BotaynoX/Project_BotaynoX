<?php

class product
{
    private $idP;
    private $name;
    private $price;
    private $genre;
    private $tags;

    public function __construct($idP, $name, $price, $genre, $tags)
    {
        $this->idP = $idP;
        $this->name = $name;
        $this->price = $price;
        $this->genre = $genre;
        $this->tags = $tags;
    }

    public function getIdP()
    {
        return $this->idP;
    }

    public function setIdP($idP)
    {
        $this->idP = $idP;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags($tags)
    {
        $this->tags = $tags;
    }



}