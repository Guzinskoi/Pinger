<?php

class Domain {

    public $domain_name, $domain_ip;

    public function printLong() {
        print("Имя домена: ".$this->domain_name."\n");
        print("Адрес домена: ".$this->domain_ip."\n");
    }

    public function printShort() {
        print($this->domain_name."\n");
    }
}
