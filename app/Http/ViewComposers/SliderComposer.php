<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Slide;

class SliderComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $slides;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Slide $slides)
    {
        // Dependencies automatically resolved by service container...
        $this->slides = $slides;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('slides', $this->slides->orderBy('slide_number')->get());
    }
}