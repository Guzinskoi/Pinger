<?php
require_once('command.php');
require_once('domain.php');
require_once('command/domain_registry.php');

class DeleteDomainCommand implements Command {

    public function execute() {
        $list_students = new BriefPrintVisitor();
        DomainRegistry::getInstance()->visitDomain($list_domains);

        $number = readline("Введите номер домена: ");
        DomainRegistry::getInstance()->visitDomain($number - 1);
    }
}
