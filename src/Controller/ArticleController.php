<?php

namespace App\Controller;

use function App\Controller\Add\calculateAdd;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Brick\Math\BigDecimal;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     * Стартовая страница приложения
     */
    public function homepage()
    {
        return new Response("Hi, this is calculator");
    }

    /**
     * @Route("/add", name="addition")
     * Сложение 2х или 3х чисел
     */
    public function addAction(Request $request)
    {
        //Принимаем параметры с формы
        $params = $request->request->all();
        $var1 = array('params' => $params);
        //Проверка - были ли переданы параметры
        if (sizeof($var1["params"]) > 0)
        {
            //Создаем экземпляр класса для сложения чисел
            $calc = new Add();
            $sum = 0;
            $calc->setOperandOne(BigDecimal::of($var1["params"]["param1"]));
            $calc->setOperandTwo(BigDecimal::of($var1["params"]["param2"]));
            //Сложение 3х чисел
            if ($var1["params"]["param3"]!= "")
            {
                $calc->setOperandThree(BigDecimal::of($var1["params"]["param3"]));
                $sum = $calc->calculateAddforThree($calc->getOperandOne(),$calc->getOperandTwo(),$calc->getOperandThree());
            }
            //Сложение 2х чисел
            else {
                $sum = $calc->calculateAdd($calc->getOperandOne(),$calc->getOperandTwo());
            }
            echo ($sum);
        }
        //Отображаем вид с формой и передаем туда полученные параметры.
        return $this->render('add.html.twig', array(
           'params' => $params
        ));
    }

    /**
     * @Route("/sub", name="subtraction")
     * Вычитание 2х чисел
     */
    public function subAction(Request $request)
    {
        //Принимаем параметры с формы
        $params = $request->request->all();
        $var1 = array('params' => $params);
        if (sizeof($var1["params"]) > 0)
        {
            $calc = new Subtraction();
            $calc->setOperandOne(BigDecimal::of($var1["params"]["param1"]));
            $calc->setOperandTwo(BigDecimal::of($var1["params"]["param2"]));
            $sub = $calc->calculateSub($calc->getOperandOne(),$calc->getOperandTwo());
            echo ($sub);
        }
        //Отображаем вид с формой и передаем туда полученные параметры.
        return $this->render('sub.html.twig', array(
            'params' => $params
        ));
    }

    /**
     * @Route("/mult", name="multiplication")
     * Умножение 2х чисел
     */
    public function multAction(Request $request)
    {
        //Принимаем параметры с формы
        $params = $request->request->all();
        $var1 = array('params' => $params);
        if (sizeof($var1["params"]) > 0)
        {
            $calc = new Multiplication();
            $calc->setOperandOne(BigDecimal::of($var1["params"]["param1"]));
            $calc->setOperandTwo(BigDecimal::of($var1["params"]["param2"]));
            $mult = $calc->calculateMult($calc->getOperandOne(),$calc->getOperandTwo());
            echo ($mult);
        }
        //Отображаем вид с формой и передаем туда полученные параметры.
        return $this->render('mult.html.twig', array(
            'params' => $params
        ));
    }
}