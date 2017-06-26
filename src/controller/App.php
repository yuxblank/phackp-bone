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
    private $router;
    private $view;
    private $session;

    /**
     * App constructor.
     * All objects are injected by the container. You can decide of the create your application controllers by specifying your dependencies here.
     * @param Router $router
     * @param View $view
     * @param Session $session
     * @param ServerRequestInterface $serverRequest
     */
    public function __construct(Router $router, View $view, Session $session, ServerRequestInterface $serverRequest)
    {
        parent::__construct();
        $this->router = $router;
        $this->view = $view;
        $this->session = $session;
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
     * @tutorial -> all methods dependencies are injected from the container, ServerRequest (managed by framework lifecycle) and model instances too.
     * URL: /
     * @param ServerRequestInterface $serverRequest
     * @param Welcome $welcome
     * @param Tag $tag
     */
    public function index(ServerRequestInterface $serverRequest, Welcome $welcome, Tag $tag)
    {

        $this->session->init();
        $this->session->setValue('tag', $tag->findById(1));
        $this->view->renderArgs("message", $welcome->getHelloWorld());
        $this->view->render('app/index');
    }

    /**
     * App@showPost route points here.
     * And there's a parameter called {id} you can retrive from
     * @tutorial -> we now use model::make() factory to get object. They are not injected, but located via
     * service locator pattern. (use DI instead of make)
     * @param ServerRequestInterface $serverRequest
     * @internal param $params ['id']
     * @internal param $params
     */

    public function showPost(ServerRequestInterface $serverRequest)
    {


        /**
         * @var Tag $obj
         */
        $obj = $this->session->getValue('tag');
        /**
         * @var array $posts
         */
        $posts = $obj->posts();

        $id = filter_var($serverRequest->getQueryParams()['id'], FILTER_SANITIZE_NUMBER_INT);


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

    public function searchTag(ServerRequestInterface $serverRequest)
    {

    }

    /**
     * @tutorial -> now we use new keywork on the model. This is equal of using make(). Always consider DI.
     * @param ServerRequestInterface $serverRequest
     */
    public function posts(ServerRequestInterface $serverRequest)
    {
        $post = new Post();
        $this->view->renderArgs('posts', $post->findAll());
        $this->view->render('app/posts');
    }

}