<?php
require_once('command.php');
require_once('domain.php');
require_once('command/domain_registry.php');
require_once('edit_context.php');

class ShowSelectedCommand implements Command {

    public function execute() {
      if(DomainRegistry::getInstance()->getDomainCount() !== 0) {
        EditContext::getInstance()->domain->printLong();
      }
    }
}
