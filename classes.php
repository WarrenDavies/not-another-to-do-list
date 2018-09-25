<?php

class Area 
{
    public $description;   
}

class Goal
{
    public $name;   
    public $completed;   
    public $area1;   
    public $area2;   
    public $area3;   
    public $area4;   
    public $area5;   
}

class Project 
{
    public $description;   
}

class Task 
{
    public $description;
    public $completed;
    public function silly() {
        echo $this->description . " THIS IS A METHOD DOING THIS HELLO I AM A METHOD";
    }
}