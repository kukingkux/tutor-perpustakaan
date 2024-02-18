<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer(['index','pages.katalog','admin.pages.book.index'], function($view){
            $books = Book::all();
            $categories = BookCategory::all();

            $view->with('books', $books)->with('categories', $categories);
        });
    }
}
