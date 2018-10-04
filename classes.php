<?php

class Area 
{
    public $id;
    public $name;   
}

class Goal
{
    public $id;
    public $name;   
    public $completed;  
    public $AreaID; 
}

class Project 
{
    public $name;   
    public $completed;
}

class Action 
{
    public $name;
    public $completed;
}