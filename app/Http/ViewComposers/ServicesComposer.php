<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Service;

class ServicesComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $services;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Service $services)
    {
        // Dependencies automatically resolved by service container...
        $this->services = $services;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('services', $this->services);
    }
}