<?php
class Monster {
    private $id;
    private $name;
    private $physicalStrength = 0;
    private $fearFactor = 0;
    private $killingPower = 0;
    private $horrorRating = 0;

    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPhysicalStrength()
    {
        return $this->physicalStrength;
    }

    /**
     * @param int $physicalStrength
     */
    public function setPhysicalStrength($physicalStrength)
    {
        $this->physicalStrength = $physicalStrength;
    }

    /**
     * @return int
     */
    public function getFearFactor()
    {
        return $this->fearFactor;
    }

    /**
     * @param int $fearFactor
     */
    public function setFearFactor($fearFactor)
    {
        $this->fearFactor = $fearFactor;
    }

    /**
     * @return int
     */
    public function getKillingPower()
    {
        return $this->killingPower;
    }

    /**
     * @param int $killingPower
     */
    public function setKillingPower($killingPower)
    {
        $this->killingPower = $killingPower;
    }

    /**
     * @return int
     */
    public function getHorrorRating()
    {
        return $this->horrorRating;
    }

    /**
     * @param int $horrorRating
     */
    public function setHorrorRating($horrorRating)
    {
        $this->horrorRating = $horrorRating;
    }



}