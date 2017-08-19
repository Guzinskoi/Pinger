<?php
require_once('command.php');
require_once('domain.php');
require_once('command/domain_registry.php');

class EditDomainIpCommand implements Command {

    public function execute() {
        EditContext::getInstance()->domain->domain_ip = readline("Введите адрес домена: ");
    }
}
