<?php

namespace ViewiLaravel\Adapters;

use App\Http\Kernel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Viewi\Routing\RouteAdapterBase;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class ViewiLaravelAdapter extends RouteAdapterBase
{
    public function register($method, $url, $component, $defaults)
    {
        $action = function (Request $request) use ($component) {
            return (new $component)($request->route()->parameters());
        };
        if ($url === '*') {
            Route::fallback($action);
        } else {
            $route = Route::match([$method], $url, $action);
            if ($defaults !== null) {
                $route->setDefaults($defaults);
            }
            $route->name(trim($url," /"));
        }
    }

    public function handle($method, $url, $params = null)
    {
        $request = Request::create($url, strtoupper($method), [], $_COOKIE);
        $kernel = resolve(Kernel::class);
        $response = $kernel->handle($request);
        if ($response instanceof JsonResponse) {
            return $response->original;
        } else {
            /** @var Response $response */
            return $response->getContent();
        }
    }
}
