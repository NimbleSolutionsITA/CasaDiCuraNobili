<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Doctor;
use App;

class DoctorComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $doctors;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Doctor $doctors)
    {
        // Dependencies automatically resolved by service container...
        $this->doctors = $doctors;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('doctors', $this->doctors->all());
    }
}