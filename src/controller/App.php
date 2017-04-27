<?php
namespace controller;

use model\Customer;
use model\Post;
use model\Tag;
use model\Welcome;
use Psr\Http\Message\ServerRequestInterface;
use yuxblank\phackp\api\EventDrivenController;
use yuxblank\phackp\core\Application;
use yuxblank\phackp\core\Controller;
use yuxblank\phackp\core\Router;
use yuxblank\phackp\core\Session;
use yuxblank\phackp\core\View;
use Zend\Diactoros\Response\Serializer;

class App extends Controller implements EventDrivenController
{
    public function __construct(ServerRequestInterface $request, Router $router)
    {
        parent::__construct($request, $router);

    }


    /**
     * This is an example of onBefore() call. If defined, this method will run before other methods and right after constructor.
     */
    public function onBefore()
    {

    }

    /**
     * This is an example of onAfter() call. If defined, this method will run at last
     */

    public function onAfter()
    {

    }


    /**
     * The action App@Index configured in the  will point to this method after calling class constructor.
     * URL: /
     */
    public function index($data)
    {

        $tag = Tag::make();


        $customer = Customer::make();


        $customer->findById(1);

        $this->session->init();
        $this->session->setValue('prova', "pippo");
        $this->session->setValue('test', $obj);


        $Welcome = Welcome::make();



        $this->session->setValue('prova',1);

        $this->view->renderArgs("message", $Welcome->getHelloWorld());
        $this->view->render('app/index');
    }

    /**
     * App@showPost route points here.
     * And there's a parameter called {id} you can retrive from @param $params ['id']
     * @param $params
     */

    public function showPost($params)
    {



        Session::_getValue('prova');
        /**
         * @var Tag $obj
         */
        $obj = Session::_getValue('test');

        /**
         * @var array $posts
         */
        $posts = $obj->posts();
        $view = new View();
        $id = filter_var($params['id'], FILTER_SANITIZE_NUMBER_INT);





        Session::_getValue('prova');

        $post = Post::make();
        if (Application::getConfig()['USE_DATABASE']) {
            $post = $post->findById($id);
            if (!$post) {
                $view->renderArgs('post', null);
            } else {
                $view->renderArgs('post', $post->findById($id));
            }
        } else {
            $view->renderArgs('post', $post->setExampleNoDbPost());
        }
        $view->render('app/post');

    }

    public function searchTag($params)
    {


    }

    public function posts(){
        $view = new View();
        $post = Post::make();
        $view->renderArgs('posts',$post->findAll());
        $view->render('app/posts');
    }

}