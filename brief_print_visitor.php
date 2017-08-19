<?php

require_once('domain_visitor.php');
require_once('domain.php');
require_once('command/domain_registry.php');

class BriefPrintVisitor implements DomainVisitor {

        public $flag;

    public function startVisit() {
            $this->flag = false;
         }

    public function visitDomain($number, $domain) {
        $this->flag = true;
        $number ++;
        echo "$number. ";
        $domain->printShort();
    }

    public function finishVisit() {
        if(!$this->flag) {
            echo "Доменов нет\n";
        }
    }
}
