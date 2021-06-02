<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth_mem implements FilterInterface
{
    private $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        
    }
    public function before(RequestInterface $request, $arguments = null)
    {

        // Do something here
        // echo "by pass mem";
        // if (!$this->session->has('session_member')) {
        //     return redirect()->to(base_url('/Singin'));
        // }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
