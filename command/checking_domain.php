<?php
require_once('command.php');
require_once('domain.php');
require_once('command/domain_registry.php');

class CheckingDomain implements Command {

  public $starttime;
  public $file;
  public $status;

  public function execute() {
      $starttime = microtime(true);
      $file      = @fsockopen ($domain, 80, $errno, $errstr, 10);
      $stoptime  = microtime(true);
      EditContext::getInstance()->domain->status = 0;

      if (!$file) $status = -1;  // Site is down
      else {
          @fclose($file);
          $status = ($stoptime - $starttime) * 1000;
          $status = floor($status);
      }

      return EditContext::getInstance()->domain->status;
  }
}

//EditContext::getInstance()->domain->domain_ip
