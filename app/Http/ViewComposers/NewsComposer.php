<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\News;

class NewsComposer
{
    /**
     * The user repository implementation.
     *
     * @var NewsRepository
     */
    protected $news;

    /**
     * Create a new profile composer.
     *
     * @param  NewsRepository  $news
     * @return void
     */
    public function __construct(News $news)
    {
        // Dependencies automatically resolved by service container...
        $this->news = $news;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('news', $this->news->orderBy('created_at', 'desc')->get());
    }
}