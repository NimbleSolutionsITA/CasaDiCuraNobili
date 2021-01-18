<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Doctor;

class AutocompleteComposer
{
    /**
     * The user repository implementation.
     *
     * @var Doctor
     */
    protected $doctorList;

    /**
     * Create a new profile composer.
     *
     * @param  Doctor  $doctorList
     * @return void
     */
    public function __construct(Doctor $doctorList)
    {
        // Dependencies automatically resolved by service container...
        $this->doctorList = $doctorList->get(['id as url', 'fullname as value']);
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('doctorList', $this->doctorList);
    }
}