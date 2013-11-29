<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::after(function($request, $response)
{
    if (App::Environment() != 'local' && Config::get('minifyhtml::enabled'))
    {
        if ($response instanceof Illuminate\Http\Response)
        {
            $response->setContent(
            	preg_replace(
            		'%(?>[^\S]\s*|\s{2,})(?=(?:(?:[^<]++|<(?!/?(?:textarea|pre)\b))*+)(?:<(?>textarea|pre)\b|\z))%ix',
            		' ',
            		$response->getContent()
            	)
            );
        }
    }
});
