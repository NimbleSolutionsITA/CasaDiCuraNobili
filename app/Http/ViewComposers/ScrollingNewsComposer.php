<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\News;
use App\Category;

class ScrollingNewsComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $news;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(News $posts)
    {
        // Dependencies automatically resolved by service container...
        $this->posts = $posts;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $catId = Category::where('slug', 'comunicati')->first()->id;
        $view->with('posts', $this->posts->where('category_id', $catId));
    }
}