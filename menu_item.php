<?php

abstract class MenuItem {

    private $number, $title;

    public function __construct($number, $title) {
        $this->number = $number;
        $this->title = $title;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getTitle() {
        return $this->title;
    }

    public function print() {
        echo ($this->number+1).". ";
        echo $this->title."\n";
    }

    public abstract function execute();
}
