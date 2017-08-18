<?php
require_once('command.php');
require_once('domain.php');
require_once('command/domain_registry.php');

class AddDomainCommand implements Command {

    public function execute() {
        $domain = new Domain();
        $domain->$domain_name = readline("Введите имя домена: ");
        $domain->$domain_ip = readline("Введите ip домена: ");

//        StudentRegistry::getInstance()->addStudent($student);
//        StudentRegistry::getInstance()->save();
    }
}
