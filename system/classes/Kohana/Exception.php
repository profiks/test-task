<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Exception extends Kohana_Kohana_Exception {
    
    
     /**
     * Generate a Response for all Exceptions without a more specific override
     *
     * The user should see a nice error page, however, if we are in development
     * mode we should show the normal Kohana error page.
     *
     * @return Response
     */
    public static function response(Exception $e)
    {
        if (Kohana::$environment >= Kohana::DEVELOPMENT)
        {
            // Show the normal Kohana error page.
            return parent::response();
        }

        $view = View::factory('index');
        $view->content = View::factory('error');
        $view->title = 'Error';
        $view->content->message = 'Please contact thr administrator to fix issue with database';

        $response = Response::factory()
            ->status(500)
            ->body($view->render());

        return $response;
    }
    
}
