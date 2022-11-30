<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $navItems = [
            [
                'name' => 'Home',
                'route' => 'home',
                'ordering' => 1,
            ],
            [
                'name' => 'Companies',
                'route' => 'companies',
                'ordering' => 2,
            ],
            [
                'name' => 'Employees',
                'route' => 'employees',
                'ordering' => 3,
            ]
        ];
  
        foreach ($navItems as $key => $navItem) {
            Navbar::create($navItem);
        }
    }
}
