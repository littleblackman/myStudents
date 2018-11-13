<?php



class Student
{

    private $firstName;
    private $lastName;
    private $cardId;
    private $id;

    public function __construct($datas)
    {
        $this->cardId = rand(1,10000);

        $this->hydrate($datas);

    }


    public function hydrate($datas)
    {
        foreach($datas as $key => $value) // array( 'id' => 5)
        {
            $method = "set".ucfirst($key); // key = 'id'   // method = setId
            if(method_exists($method)) {  // check if setId
                $this->$method($value); // setId(5)
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



}