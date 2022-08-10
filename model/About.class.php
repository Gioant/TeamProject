<?php
class About {
    private $id; 
    private $text;
    private $picture;

    public function __construct ($array){
        foreach ($array as $about => $value) {
            $this->$about = $value;
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

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

}