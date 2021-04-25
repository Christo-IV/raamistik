<?php


class Pages extends Controller
{
    /**
     * pages constructor.
     */
    public function __construct()
    {
        $this->pagesModel = $this->model('Page');
    }

    public function index() {
        //echo 'index method is loaded <br>';
        $data = array(
            'title' => 'Welcome to the internet!',
            'content' => 'Lorem ipsum lorem');
        $this->view('pages/index', $data);
    }

    public function about() {
        // model test
        // $this->pagesModel->addUser();
        // $user = $this->pagesModel->getOneUser();
        // print_r($user);

        //echo 'about method is loaded <br>';
        $data = array(
            'title' => 'Pages - a review',
            'content' => 'May I interest you in some pages?');
        $this->view('pages/about', $data);
    }
}