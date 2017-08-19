<?php
require_once ('menu.php');
require_once ('command/add_domain.php');
require_once ('command/list_domains.php');
require_once ('command/delete_domain.php');
require_once ('command/edit_name_domain.php');
require_once ('command/edit_domain_ip.php');
require_once ('command/select_domain.php');
require_once ('command/deselect_domain.php');
require_once ('command/show_selected.php');
require_once ('command/checking_domain.php');


$menu = new Menu();

$menu->addItem("Список доменов", new ListDomainsCommand());
$menu->addItem("Добавить домен", new AddDomainCommand());
$submenu = $menu->addSubmenu("Редактировать домен");
$menu->addItem("Проверка домена", new CheckingDomain());
$menu->addItem("Удалить домен", new DeleteDomainCommand());

$submenu->addItem("Изменить имя домена", new EditNameDomainCommand());
$submenu->addItem("Изменить адрес домена", new EditDomainIpCommand());

$submenu->setStartupCommand(new SelectDomainCommand());
$submenu->setBeforeSelectCommand(new ShowSelectedCommand());
$submenu->setTearDownCommand(new DeselectDomainCommand());

//DomainRegistry::getInstance()->load();
$menu->execute();
