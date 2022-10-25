<?php

/**
 * Router
 */
class Router 
{
    protected $routes = [];
    protected $params = [];
    
    /**
     * Add a route to the routing table
     */
    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    /**
     * Get all the routes from the routing table
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Match the route to the routes in the routing table, setting the $params
     */
    public function match($url)
    {
        foreach ($this->routes as $route => $params) {
            if ($url == $route) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    /**
     * Get the currently matched parameters
     */
    public function getParams()
    {
        return $this->params;
    }
}