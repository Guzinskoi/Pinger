<?php
require_once ('menu.php');
require_once ('command/add_domain.php');
require_once ('command/list_domain.php');


$menu = new Menu();

$menu->addItem("Список доменов", new ListStudentsCommand());
$menu->addItem("Добавить домен", new AddStudentCommand());
$submenu = $menu->addSubmenu("Редактировать домен");
$menu->addItem("удалить домен", new DeleteStudentCommand());

$submenu->addItem("Изменить имя домена", new EditLastNameCommand());
$submenu->addItem("Изменить адрес домена", new EditFirstNameCommand());

//StudentRegistry::getInstance()->load();
$menu->execute();
