<?php
require_once('command.php');
//require_once('student_visitor.php');
require_once('domain.php');
require_once('command/domain_registry.php');
//require_once('detailed_print_visitor.php');

class ListDomainsCommand implements Command {

    public function execute() {
        $list_domains = new DetailedPrintVisitor();
    //    StudentRegistry::getInstance()->visitStudents($list_domains);
    }
}
