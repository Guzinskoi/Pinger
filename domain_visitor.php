<?php

interface DomainVisitor {

    public function startVisit();
    public function visitDomain($number, $domain);
    public function finishVisit();
}
