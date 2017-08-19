<?php

require_once('domain.php');
require_once('command.php');

class DomainRegistry {

    private $domain_list = array();
    private static $instance = null;

    private function __construct() {

    }

    public static function getInstance() {
        if(DomainRegistry::$instance == null) {
            DomainRegistry::$instance = new DomainRegistry();
        }
        return DomainRegistry::$instance;
    }

    public function addDomain($domain) {
        $this->domain_list[] = $domain;
    }

    public function getDomain($number) {
        return $this->domain_list[$number];
    }

    public function removeDomain($number) {
        if(is_int($number))
            unset($this->domain_list[$number]);
        else {
            if(($domain_key = array_search($domain, $domain_list)) !== false) {
                unset($domain_list[$domain_key]);
            }
        }
    }

    public function getDomainCount() {
        return count($this->domain_list);
    }

    public function visitDomain($visitor) {
        $visitor->startVisit();
        for($i = 0; $i < count($this->domain_list); $i++) {
            $visitor->visitDomain($i, $this->domain_list[$i]);
        }
        $visitor->finishVisit();
    }
/*
    public function save() {
        $students = array();
        for($i = 0; $i < $this->getStudentCount(); $i++) {
           $s = $this->getStudent($i);
           $stud = array("last_name" => $s->last_name, "first_name" => $s->first_name, "middle_name" => $s->middle_name, "group" => $s->group, "marks"  => $s->marks);
           $students[] = $stud;
        }
        $f = fopen("config.json", "w");
        fwrite($f, json_encode($students));
        fclose($f);
    }

    public function load() {

        $f = fopen("config.json", "r");
        $students =  fread($f, filesize("config.json"));
        $students = json_decode($students);
        fclose($f);
        foreach($students as $value) {
            $student = new Student();
            $student->last_name = $value->last_name;
            $student->first_name = $value->first_name;
            $student->middle_name = $value->middle_name;
            $student->group = $value->group;
            $student->marks = array();
            foreach($value->marks as $subject => $mark){
                $student->marks[$subject] = $mark;
            }

            $this->addStudent($student);
        }

    }
    */
}
