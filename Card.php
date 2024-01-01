<?php

class Card
{
    private $id;
    private $name;
    private $number;
    private $exp_date;
    private $cvv;
    private $personId;

    public function __construct($name, $number, $exp_date, $cvv, $personId)
    {
        $this->name = $name;
        $this->number = $number;
        $this->exp_date = $exp_date;
        $this->cvv = $cvv;
        $this->personId = $personId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getExpDate()
    {
        return $this->exp_date;
    }

    public function setExpDate($exp_date)
    {
        $this->exp_date = $exp_date;
    }

    public function getCvv()
    {
        return $this->cvv;
    }

    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    public function getPersonId()
    {
        return $this->personId;
    }

    public function setPersonId($personId)
    {
        $this->personId = $personId;
    }


}