<?php

class Atm{

    public $location;
    public $managedby;

    public function identifies(){
        return false;
    }

    public function transactions(){
        return false;
    }
}

