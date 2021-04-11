<?php


class Pages extends Controller
{
    /**
     * pages constructor.
     */
    public function __construct()
    {
        //echo "pages class is loaded <br>";
    }

    public function index() {
        //echo 'index method is loaded <br>';
        $data = array(
            'title' => 'Welcome to the internet!',
            'content' => 'Lorem ipsum lorem');
        $this->view('pages/index', $data);
    }

    public function about() {
        //echo 'about method is loaded <br>';
        $data = array('content' => 'Lorem ipsum lorem');
        $this->view('pages/about', $data);
    }
}