<?php

class EditContext {

    private static $instance = null;
    public $domain = null;

    private function __construct() {

    }

    public static function getInstance() {
        if(EditContext::$instance == null) {
            EditContext::$instance = new EditContext();
        }
        return EditContext::$instance;
    }
}
