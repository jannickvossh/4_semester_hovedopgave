<?php

namespace App\Http\Controllers;
use App\Models\Route;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        if (Auth::check()) :
            $routes = Route::orderBy('created_at', 'DESC')->get();

            $keyStatistics = [
                'totalVisits' => count($routes),
                'commonRouteGroup' => [
                    'name' => '',
                    'count' => 0,
                    'commonUserType' => [
                        'name' => '',
                        'count' => 0
                    ]
                ],
                'commonUserType'    => [
                    'name' => '',
                    'count' => 0,
                    'commonRouteGroup' => [
                        'name' => '',
                        'count' => 0
                    ]
                ]
            ];

            $ksRouteGroups = [];
            $ksUserTypes = [];
            $commonRouteGroup = [];
            $commonUserType = [];

            foreach ($routes as $route) :
                $ksRouteGroups[$route->route_group] ??= [];
                $ksRouteGroups[$route->route_group][$route->user_type] ??= 0;
                $ksRouteGroups[$route->route_group][$route->user_type]++;

                $ksUserTypes[$route->user_type] ??= [];
                $ksUserTypes[$route->user_type][$route->route_group] ??= 0;
                $ksUserTypes[$route->user_type][$route->route_group]++;
            endforeach;

            foreach ($ksRouteGroups as $group => $data) :
                $commonRouteGroup[$group] = array_sum($data);
                arsort($data);
            endforeach;

            foreach ($ksUserTypes as $type => $data) :
                $commonUserType[$type] = array_sum($data);
                arsort($data);
            endforeach;

            arsort($commonRouteGroup);
            $keyStatistics['commonRouteGroup']['name'] = key(array_slice($commonRouteGroup, 0, 1));
            $keyStatistics['commonRouteGroup']['count'] = array_values(array_slice($commonRouteGroup, 0, 1))[0];

            $keyStatistics['commonRouteGroup']['commonUserType']['name'] = key(array_slice($ksRouteGroups[$keyStatistics['commonRouteGroup']['name']], 0, 1));
            $keyStatistics['commonRouteGroup']['commonUserType']['count'] = array_values(array_slice($ksRouteGroups[$keyStatistics['commonRouteGroup']['name']], 0, 1))[0];

            arsort($commonUserType);
            $keyStatistics['commonUserType']['name'] = key(array_slice($commonUserType, 0, 1));
            $keyStatistics['commonUserType']['count'] = array_values(array_slice($commonUserType, 0, 1))[0];

            $keyStatistics['commonUserType']['commonRouteGroup']['name'] = key(array_slice($ksUserTypes[$keyStatistics['commonUserType']['name']], 0, 1));
            $keyStatistics['commonUserType']['commonRouteGroup']['count'] = array_values(array_slice($ksUserTypes[$keyStatistics['commonUserType']['name']], 0, 1))[0];

            return view('dashboard', [
                'routes'        => $routes,
                'keyStatistics' => $keyStatistics,
                'routeGroups'   => $ksRouteGroups,
                'userTypes'     => $ksUserTypes
            ]);
        endif;

        return view('auth.login');
    }
}
