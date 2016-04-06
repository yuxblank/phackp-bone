<?php
class App extends yuxblank\phackp\core\controller
{
    /**
     * App constructor. Here you can run the code you many need in any method execution.
     * For example, if the page has a restricted access or you have to build a dynamic menu.
     */
    public function __construct()
    {

    }

    /**
     * The action App@Index configured in the routes.json will point to this method after calling class constructor.
     * URL: /
     */
    public function index () {

        $Welcome = new Welcome();
        $View = View();

        $View->renderArgs("welcome", $Welcome->getHelloWorld());
        $View->render();
    }
}