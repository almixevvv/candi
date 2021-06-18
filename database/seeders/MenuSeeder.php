<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    private array $menus = [];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addMenu(10, "Tour Listing", "", "tour-listing");
        $this->addMenu(11, "Show All Listing", "", "-", 'cms.listing.index', 10, 1);
        $this->addMenu(12, "Create Listing", "", "-", 'cms.listing.create', 10, 2);

        $this->addMenu(20, "Stories List", "", "stories-list");
        $this->addMenu(21, "Create Story", "", "-", null, 20, 1);
        $this->addMenu(22, "Show All Stories", "", "-", null, 20, 2);

        $this->addMenu(30, "Subscribers", "", "subscribers");
        $this->addMenu(31, "Show Subscribers", "", "subscribers", null, 30, 1);

        $this->addMenu(40, "Who Are We", "", "whoweare");
        $this->addMenu(41, "Edit Content", "", "-", 'cms.waw.index', 40, 1);

        $this->addMenu(50, "User", "", "users");
        $this->addMenu(51, "Create User", "", "-", null, 50, 1);
        $this->addMenu(52, "Show All User", "", "-", null, 50, 2);

        $this->addMenu(60, "User Group", "", "user-group");
        $this->addMenu(61, "Create New User Group", "", "-", null, 60, 1);
        $this->addMenu(62, "Show All User Group", "", "-", null, 60, 2);
        
        $this->addMenu(70, "Categories", "", "categories");
        $this->addMenu(71, "Categories", "", "-", null, 70, 1);
        $this->addMenu(72, "Categories", "", "-", null, 70, 2);

        Menu::truncate();
        Menu::createNew($this->menus, true);
    }

    public function addMenu(int $id,
                            string $name,
                            string $permission,
                            string $icon,
                            string $route = null,
                            int $child_of = 0,
                            int $position = 0): void
    {
        $this->menus[] = [
            'id' => $id,
            'name' => $name,
            'permission' => $permission,
            'icon' => $icon,
            'route' => $route,
            'child_of' => $child_of,
            'position' => $position,
            'created_at' => now(),
        ];
    }
}
