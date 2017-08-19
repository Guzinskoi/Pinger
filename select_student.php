<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');
require_once('brief_print_visitor.php');
require_once('edit_context.php');

class SelectStudentCommand implements Command {

    public function execute() {
        if(StudentRegistry::getInstance()->getStudentCount() !== 0) {
            $student_list = new BriefPrintVisitor();
            StudentRegistry::getInstance()->visitStudents($student_list);

            $number = readline("Введите номер студента: ");
            EditContext::getInstance()->student = StudentRegistry::getInstance()->getStudent($number - 1);
        } else {
            echo "Студентов нет\n";
        }
    }
}
