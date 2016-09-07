<?php
class Tamagotchi
{
//Properties
    private $name;
    private $food;
    private $attention;
    private $rest;
    private $actions;
    // private $life_stage;

//Constructor
    function __construct($name, $food = 4, $attention = 5, $rest = 6, $actions = 5)
    {
        $this->name = $name;
        $this->food = $food;
        $this->attention = $attention;
        $this->rest = $rest;
        $this->actions = $actions;
    }


//Getter and Setter Methods
    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }

    function getName()
    {
        return $this->name;
    }

    function setFood($new_food)
    {
        $this->food = (integer) $new_food;
    }

    function getFood()
    {
        return $this->food;
    }

    function setAttention($new_attention)
    {
        $this->attention = (integer) $new_attention;
    }

    function getAttention()
    {
        return $this->attention;
    }

    function setRest($new_rest)
    {
        $this->rest = (integer) $new_rest;
    }

    function getRest()
    {
        return $this->rest;
    }

    function setActions($new_action)
    {
        $this->rest = (integer) $new_action;
    }

    function getActions()
    {
        return $this->action;
    }


//General Methods

    function save()
    {
        //use _SESSION to save instanced object as variable
    }

    function delete()
    {
        //use _SESSION to delete instanced object as variable
    }

    function giveFood()
    {
        $this->food += 1;
        $this->actions -= 1;
    }

    function giveAttention()
    {
        $this->attention += 1;
        $this->actions -= 1;
    }
    function giveRest()
    {
        $this->rest += 1;
        $this->actions -= 1;
    }

    function timePasses()
    {
        $this->food -= rand(1, 2);
        $this->attention -= rand(1, 3);
        $this->rest -= rand(1, 4);
        $this->actions += 5;
    }



//Static Methods







}
?>
