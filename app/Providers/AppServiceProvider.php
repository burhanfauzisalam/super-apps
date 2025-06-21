<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Menu;

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
        View::composer('*', function ($view) {
            $menus = Menu::whereNull('parent_id')->where('status', 1)
                                                 ->where('placement', 1)
                                                 ->with(['children' => function($query) {
                                                                        $query->where('status', 1);
                                                                        }])
                                                 ->orderBy('order')
                                                 ->get();
            $view->with('menus', $menus);
        });

        // Untuk navbar, menu yang berbeda
        View::composer('layouts.navbar', function ($view) {
            $navbarMenus = Menu::whereNull('parent_id')
                            ->where('status', 1)
                            ->where('placement', 2) // misalnya placement khusus untuk navbar
                            ->with(['children' => function ($query) {
                                $query->where('status', 1);
                            }])
                            ->orderBy('order')
                            ->get();

            $view->with('navbarMenus', $navbarMenus);
        });
    }
}
