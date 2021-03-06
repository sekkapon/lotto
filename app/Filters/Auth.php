<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    private $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->language = service('request')->getLocale(); //deafult language
    }
    public function before(RequestInterface $request, $arguments = null)
    {

        // Do something here
        if (!$this->session->has('session_admin')) {
            return redirect()->to(base_url('/login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
