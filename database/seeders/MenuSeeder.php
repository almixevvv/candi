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
        $this->addMenu(10, "Tour Listing", "employee", "tour-listing", ["position" => 1]);
        $this->addMenu(11, "Show All Listing", "employee", "-", ["route" => 'cms.listing.index', "child_of" => 10, "position" => 1]);
        $this->addMenu(12, "Create Listing", "employee", "-", ["route" => 'cms.listing.create', "child_of" => 10, "position" => 2]);

        $this->addMenu(20, "Stories List", "employee", "stories-list", ["position" => 2]);
        $this->addMenu(21, "Create Story", "employee", "-", ["route" => null, "child_of" => 20, "position" => 1]);
        $this->addMenu(22, "Show All Stories", "employee", "-", ["route" => null, "child_of" => 20, "position" => 2]);

        $this->addMenu(30, "Subscribers", "employee", "subscribers", ["position" => 3]);
        $this->addMenu(31, "Show Subscribers", "employee", "subscribers", ["route" => null, "child_of" => 30, "position" => 1]);

        $this->addMenu(40, "Who Are We", "employee", "whoweare", ["position" => 4]);
        $this->addMenu(41, "Edit Content", "employee", "-", ["route" => 'cms.waw.index', "child_of" => 40, "position" => 1]);

        $this->addMenu(50, "User", "superuser", "users", ["position" => 5]);
        $this->addMenu(51, "Create User", "superuser", "-", ["route" => 'cms.users.create', "child_of" => 50, "position" => 1]);
        $this->addMenu(52, "Show All User", "superuser", "-", ["route" => 'cms.users.index', "child_of" => 50, "position" => 2]);

        $this->addMenu(60, "User Group", "employee", "user-group", ["position" => 6]);
        $this->addMenu(61, "Create New User Group", "employee", "-", ["route" => null, "child_of" => 60, "position" => 1]);
        $this->addMenu(62, "Show All User Group", "employee", "-", ["route" => null, "child_of" => 60, "position" => 2]);
        
        $this->addMenu(70, "Categories", "employee", "categories", ["position" => 7]);
        $this->addMenu(71, "Categories", "employee", "-", ["route" => null, "child_of" => 70, "position" => 1]);
        $this->addMenu(72, "Categories", "employee", "-", ["route" => null, "child_of" => 70, "position" => 1]);

        Menu::truncate();
        Menu::createNew($this->menus, true);
    }

    public function addMenu(int $id, string $name, string $permission = "employee", string $icon = "", array $options = []): void
    {
        $this->menus[] = [
            'id' => $id,
            'name' => $name,
            'permission' => $permission,
            'icon' => $icon,
            'route' => array_key_exists("route", $options) ? $options['route'] : null,
            'child_of' => array_key_exists("child_of", $options) ? $options['child_of'] : 0,
            'position' => array_key_exists("position", $options) ? $options['position'] : 0,
            'created_at' => now(),
        ];
    }
}
