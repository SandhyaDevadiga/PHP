<?php
class Teachers{
    private function questionPaper(){
        return "imp";
    }
    function exam(){
        $this->questionPaper(); // only inside the class only this method is accessible
    }
    protected function marks(){
        echo "student marks";
    }
}
$t1=new Teachers();
// $t1->questionPaper();   //-----> this is not possible bcz method is private  
$t1->exam();
$t1->marks();

class Management extends teachers{
    function reviewExam(){
        $this->marks();
    }
}

$m1=new Management();
echo $m1->reviewExam();
?>