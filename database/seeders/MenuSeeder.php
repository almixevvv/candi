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
        $this->addMenu(20, "Listings", "employee", "stories-list", ["position" => 2]);
        $this->addMenu(21, "Listing Categories", "employee", "-", ["route" => 'cms.listing-categories.index', "child_of" => 20, "position" => 1]);
        $this->addMenu(22, "Listing Tags", "employee", "-", ["route" => 'cms.listing-tags.index', "child_of" => 20, "position" => 2]);
        $this->addMenu(23, "Listing", "employee", "-", ["route" => 'cms.listings.index', "child_of" => 20, "position" => 3]);
        $this->addMenu(24, "Rating Category", "employee", "-", ["route" => 'cms.rating_categories.index', "child_of" => 20, "position" => 4]);

        $this->addMenu(30, "Blog", "employee", "subscribers", ["position" => 3]);
        $this->addMenu(31, "Blog Categories", "employee", "subscribers", ["route" => 'cms.blog-categories.index', "child_of" => 30, "position" => 1]);
        $this->addMenu(32, "Blog List", "employee", "subscribers", ["route" => 'cms.blog.index', "child_of" => 30, "position" => 2]);

        $this->addMenu(40, "Who Are We", "employee", "whoweare", ["position" => 4]);
        $this->addMenu(41, "Edit Content", "employee", "-", ["route" => 'cms.waw.index', "child_of" => 40, "position" => 1]);

        $this->addMenu(50, "User", "superuser", "users", ["position" => 5]);
        $this->addMenu(51, "User", "superuser", "-", ["route" => 'cms.users.index', "child_of" => 50, "position" => 1]);
        $this->addMenu(52, "Roles", "superuser", "-", ["route" => 'cms.roles.index', "child_of" => 50, "position" => 2]);
        
        $this->addMenu(60, "Pages", "employee", "categories", ["position" => 6]);
        $this->addMenu(61, "Pages", "employee", "-", ["route" => 'cms.pages.index', "child_of" => 60, "position" => 1]);

        $this->addMenu(70, "Contact", 'employee', 'contact', ['position' => 7]);
        $this->addMenu(71, "Purpose", "employee", "-", ["route" => 'cms.purposes.index', "child_of" => 70, "position" => 1]);
        $this->addMenu(72, "Contact", "employee", "-", ["route" => 'cms.contacts.index', "child_of" => 70, "position" => 2]);
        $this->addMenu(73, "Subscription", "employee", "-", ["route" => 'cms.subscriptions.index', "child_of" => 70, "position" => 3]);

        $this->addMenu(90, "Promotions", 'employee', 'promotion', ['position' => 8]);
        $this->addMenu(91, "Promotions", "employee", "-", ["route" => 'cms.promotions.index', "child_of" => 90, "position" => 1]);

        $this->addMenu(100, "Advertise With Us", 'employee', 'promotion', ['position' => 8]);
        $this->addMenu(101, "Edit Content", "employee", "-", ["route" => 'cms.adv.edit', "child_of" => 100, "position" => 1]);

        $this->addMenu(80, "Settings", "superuser", "settings", ["position" => 9]);
        $this->addMenu(81, "Profile", "superuser", "-", ["route" => 'cms.profile.index', "child_of" => 80, "position" => 1]);
        $this->addMenu(82, "Menu", "superuser", "-", ["route" => 'cms.menus.index', "child_of" => 80, "position" => 2]);


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
