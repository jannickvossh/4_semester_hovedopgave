<?php

namespace App\Http\Controllers;

use App\Models\Route;

class RouteGroupsController extends Controller
{
    private function sortByRouteGroups($routes)
    {
        $routeGroups = [];

        foreach ($routes as $route)
        {
            $routeGroups[$route->route_group] ??= [];
            $routeGroups[$route->route_group][] = $route->toArray();
        }

        return $routeGroups;
    }

    public function index()
    {
        return view('route-groups.index', [
            'routeGroups'   => $this->sortByRouteGroups(Route::all())
        ]);
    }
}
