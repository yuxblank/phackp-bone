<?php
/**
 * Created by IntelliJ IDEA.
 * User: yuri.blanc
 * Date: 12/04/2016
 * Time: 16:36
 */

namespace controller;


use yuxblank\phackp\api\EventDrivenController;
use yuxblank\phackp\core\Controller;
use yuxblank\phackp\core\View;

class Error extends Controller implements EventDrivenController
{
    public function onBefore()
    {
        // TODO: Implement onBefore() method.
    }

    public function onAfter()
    {

    }

    /**
     * What you want to do for non existing routes?
     */
    public function notFound404() {
        http_response_code(404);
        echo "<p> 404 not found </p>";
    }

    /**
     * Occur on exception if an ErrorHandlerProvider is registered
     * @param $ex
     */
    public function onError($ex){
        echo "<h3 style=\"color:darkred;\">Runtime exception detected</h3>";
        die("<br><pre>" . var_dump($ex)."</pre>");
    }

}