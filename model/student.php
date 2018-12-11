<?php

class Student
{

    private $firstName;
    private $lastName;
    private $cardId;
    private $id;

    /**
     * Student constructor.
     * @param $datas
     */
    public function __construct($datas = null)
    {
        if($datas) $this->hydrate($datas);
    }


    public function hydrate($row)
    {

        foreach($row as $key => $value)
        {
            $elements = explode('_', $key);
            $method = "set";
            foreach($elements as $el)
            {
                $method .= ucfirst($el);
            }

            if(method_exists($this, $method)) {
                $this->$method($value);
            }

        }
    }


    public function getId()
    {
        return $this->id;
    }

    public function getFullId()
    {
        return sha($this->getId());
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFullName()
    {
        return $this->getLastName().' '.$this->getFirstName();
    }

    public function setFirstName($first)
    {
        $this->firstName = ucfirst($first);
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getCardId()
    {
        return $this->cardId;
    }

    public function setCardId($cardId)
    {
        $this->cardId = $cardId;
    }

    public function createCardId()
    {
      $this->setCardId(rand(1,1000));
    }



}
