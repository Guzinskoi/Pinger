<?php
require_once('command.php');
require_once('domain.php');
require_once('command/domain_registry.php');
require_once('brief_print_visitor.php');
require_once('edit_context.php');

class SelectDomainCommand implements Command {

    public function execute() {
        if(DomainRegistry::getInstance()->getDomainCount() !== 0) {
            $domain_list = new BriefPrintVisitor();
            DomainRegistry::getInstance()->visitDomain($domain_list);

            $number = readline("Введите номер домена: ");
            EditContext::getInstance()->domain = DomainRegistry::getInstance()->getDomain($number - 1);
        } else {
            echo "Доменов нет\n";
        }
    }
}
