<?php

header('Content-Type:text/json;charset=utf-8');

/**
 * 计算四则运算表达式
 */



//$exp = '1+2*3+5/4';
class Main{

    function calcexp($exp){

        $arr_n = array();
        $arr_op = array();
        $main=new Main();
        while (($s = array_pop($exp)) != '') {

            if ($s == '*' || $s == '/') {
                $n2 = array_pop($exp);
                $op = $s;
                $n1 = array_pop($arr_n);
                $result = $main->operation($n1, $op, $n2);
                array_push($arr_n, $result);
            }else if ($s == '+' || $s == '-') {

                array_push($arr_op, $s);

            } else if (is_numeric($s)){
                array_push($arr_n, $s);
            }
        }
        $n2 = array_pop($arr_n);
        while (($op = array_pop($arr_op)) != '') {
            $n1 = array_pop($arr_n);
            $n2 = $main->operation($n1, $op, $n2);
        }
        return $n2;
    }
    function operation($n1, $op, $n2){

        switch ($op) {
            case '+':
                return $n1 + $n2;
                break;
            case '-':
                return $n1 - $n2;
                break;
            case '*':
                return $n1 * $n2;
                break;
            case '/':
                return intval($n1/$n2);
                break;
        }
    }




}



?>