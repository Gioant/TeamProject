<?php
class Contact
{
    private $id;
    private $location;
    private $open_hours;
    private $email;
    private $call;

    public function __construct($array)
    {
        foreach ($array as $contact => $value) {
            $this->$contact = $value;
        }
    }

    // Getter and Setter
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    public function getOpenHours()
    {
        return $this->open_hours;
    }

    public function setOpenHours($open_hours)
    {
        $this->open_hours = $open_hours;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getCall()
    {
        return $this->call;
    }

    public function setCall($call)
    {
        $this->call = $call;

        return $this;
    }
}
