<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Public routes that don't require authentication
        $publicRoutes = [
            '',           // Root URL
            'login',
            'signup',
            'moodboard',
            'roadmap'
        ];
            
        $currentRoute = trim($request->uri->getPath(), '/');
            
        // If not a public route and not logged in, redirect to login
        if (!in_array($currentRoute, $publicRoutes) && !session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Nothing to do after the request
    }
}