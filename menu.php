<?php

include('simple_menu_item.php');

class Menu extends MenuItem {

    private $items = array();
    private $startup_command = null;
    private $before_select_command = null;
    private $tear_down_command = null;

    public function __construct($number = 0, $title = "") {
        parent:: __construct($number, $title);
    }

    public function setStartupCommand($startup_command) {
        $this->startup_command = $startup_command;
    }

    public function setBeforeSelectCommand($before_select_command) {
        $this->before_select_command = $before_select_command;
    }

     public function setTearDownCommand($tear_down_command) {
        $this->tear_down_command = $tear_down_command;
    }

    public function addItem($title, $command) {
        $menuItem = new SimpleMenuItem(count($this->items), $title, $command);
        $this->items[] = $menuItem;
    }

    public function addSubmenu($title) {
          $menu = new Menu(count($this->items),$title);
          $this->items[] = $menu;
          return $menu;
    }

    private function printMenu() {
        print("\n");
        foreach($this->items as $item) {
            $item->print();
        }
        print((count($this->items) + 1) . ". Exit\n");
    }

    private function select() {
        $number = readline("Введите номер пункта: ");
        while ($number <= 0 || ($number  > (count($this->items) + 1))){
            $number = readline("Введите номер пункта: ");
        }
        if( $number == (count($this->items) + 1)) {
            return false;
        } else {
            $this->items[$number - 1]->execute();
            return true;
        }
    }

    public function execute(){
        if($this->startup_command !== null) {
            $this->startup_command->execute();
        }

        do {
            if($this->before_select_command !== null) {
                $this->before_select_command->execute();
            }

            $this->printMenu();
        } while ($this->select());

        if($this->tear_down_command !== null) {
            $this->tear_down_command->execute();
        }
    }
}
