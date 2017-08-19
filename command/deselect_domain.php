<?php
require_once('command.php');
require_once('domain.php');
require_once('command/domain_registry.php');
require_once('edit_context.php');

class DeselectDomainCommand implements Command {

    public function execute() {
        EditContext::getInstance()->domain = null;
    }
}
