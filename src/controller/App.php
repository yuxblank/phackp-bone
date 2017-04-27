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

        $this->session->init();
        $this->session->setValue('tag', Tag::make()->findById(1));
        $Welcome = Welcome::make();
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


        /**
         * @var Tag $obj
         */
        $obj = $this->session->getValue('tag');

        /**
         * @var array $posts
         */
        $posts = $obj->posts();

        $id = filter_var($params['id'], FILTER_SANITIZE_NUMBER_INT);


        $this->session->getValue('prova');

        $post = Post::make();
        $post = $post->findById($id);
        if (!$post) {
            $this->view->renderArgs('post', null);
        } else {
            $this->view->renderArgs('post', $post->findById($id));
        }
        $this->view->render('app/post');

    }

    public function searchTag($params)
    {


    }

    public function posts()
    {
        $view = new View();
        $post = Post::make();
        $view->renderArgs('posts', $post->findAll());
        $view->render('app/posts');
    }

}