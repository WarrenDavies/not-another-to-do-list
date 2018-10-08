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
    public $id;
    public $name;   
    public $completed;
    public $GoalID;
}

class Action 
{
    public $id;
    public $name;
    public $completed;
}