<?php


class Pages extends Controller
{
    public function __construct()
    {
        // echo 'Pages loaded';

    }

    public function index()
    {
        if ((isLoggedIn())) {
            redirect('posts');
        }
        $data = [
            'title' => 'Welcome',
            'description' => 'Simple social network built on the NiceAppMVC PHP framework'

        ];

        $this->view('pages/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'Simple social network built on the NiceAppMVC PHP framework'
        ];
        $this->view('pages/about', $data);
    }
}