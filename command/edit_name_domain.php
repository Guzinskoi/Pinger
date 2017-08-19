<?php
require_once('command.php');
require_once('domain.php');
require_once('command/domain_registry.php');

class EditNameDomainCommand implements Command {

    public function execute() {
        EditContext::getInstance()->domain->domain_name = readline("Введите имя домена: ");
    }
}
