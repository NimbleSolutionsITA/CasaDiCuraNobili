<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Content;
use App;

class ContentComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $contents;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Content $contents)
    {
        // Dependencies automatically resolved by service container...
        $this->contents = $contents;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('contents', $this->contents->where('key', 'footer')->get());
    }
}