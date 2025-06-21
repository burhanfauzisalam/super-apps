<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('menus')->insert([
            [
                'title' => 'Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'url' => '/',
                'order' => 1,
                'parent_id' => null
            ],
            [
                'title' => 'Widgets',
                'icon' => 'fas fa-th',
                'url' => '/widgets',
                'order' => 2,
                'parent_id' => null
            ],
            [
                'title' => 'Charts',
                'icon' => 'fas fa-chart-pie',
                'url' => null,
                'order' => 3,
                'parent_id' => null
            ],
            [
                'title' => 'ChartJS',
                'icon' => 'far fa-circle',
                'url' => '/charts/chartjs',
                'order' => 1,
                'parent_id' => 3
            ],
            [
                'title' => 'Flot',
                'icon' => 'far fa-circle',
                'url' => '/charts/flot',
                'order' => 2,
                'parent_id' => 3
            ],
            [
                'title' => 'Inline',
                'icon' => 'far fa-circle',
                'url' => '/charts/inline',
                'order' => 3,
                'parent_id' => 3
            ],
        ]);
    }
}
