<?php
/**
 * Created by IntelliJ IDEA.
 * User: yuri.blanc
 * Date: 12/04/2016
 * Time: 16:36
 */

namespace controller;


use yuxblank\phackp\core\Controller;
use yuxblank\phackp\core\View;

class Error extends Controller
{

    public function notFound404() {
        /*$view = new View();
        $view->render();*/
        echo "<p> 404 not found </p>";
    }

}