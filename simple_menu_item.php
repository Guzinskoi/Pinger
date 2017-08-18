<?php
include('menu_item.php');

class SimpleMenuItem extends MenuItem {

    private $command;

    public function __construct($number, $title, $command){
        parent:: __construct($number, $title);
        $this->command = $command;
    }

    public function execute() {
        $this->command->execute();
    }
}
