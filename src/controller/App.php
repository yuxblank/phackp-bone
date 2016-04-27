<?php
namespace controller;
use model\Post;
use model\Tag;
use model\Welcome;
use yuxblank\phackp\api\EventDrivenController;
use yuxblank\phackp\core\Application;
use yuxblank\phackp\core\Controller;
use yuxblank\phackp\core\QueryBuilder;
use yuxblank\phackp\core\Router;
use yuxblank\phackp\core\View;

class App extends Controller implements EventDrivenController
{
    /**
     * App constructor. Here you can run the code you many need in any method execution.
     * For example, if the page has a restricted access or you have to build a dynamic menu.
     */
    public function __construct()
    {

    }

    /**
     * This is an example of onBefore() call. If defined, this method will run before other methods and right after constructor.
*/
    public function onBefore() {

    }

    /**
     * This is an example of onAfter() call. If defined, this method will run at last
     */

    public function onAfter() {

    }


    /**
     * The action App@Index configured in the  will point to this method after calling class constructor.
     * URL: /
     */
    public function index() {

        $Welcome = new Welcome();
        $View = new View();

        $View->renderArgs("message", $Welcome->getHelloWorld());
        $View->render('app/index');
    }

    public function showPost($params){
        $view = new View();
        $id = filter_var($params['GET']['id'],FILTER_SANITIZE_NUMBER_INT);


        $post = new Post();
        if (Application::getConfig()['USE_DATABASE']) {
            $post =  $post->findById($id);
            if (!$post) {
                Router::notFound();
            } else {
                $view->renderArgs('post', $post->findById($id));
            }
        } else {
            $view->renderArgs('post', $post->setExampleNoDbPost());
        }
        $view->render('app/post');

    }

    public function searchTag($params) {


    }

}