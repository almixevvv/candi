<?php
namespace App\Form\Listing;

use App\Models\City;
use App\Utils\Utils;
use App\Models\Listing;
use App\Models\District;
use App\Models\Province;
use App\Models\ListingTag;
use App\Models\ListingCategory;
use Gustiawan\FormBuilder\Form;
use App\Models\ListingTagCategory;

class ListingCreateForm extends Form
{
    public function handle() 
    {
        $this->text('title', 'Title');
        $this->text("slug", "Slug (Url)");
        $this->textArea('address', 'Address');
        $this->text('phone_number', 'Phone Number');
        $this->text('website', 'Website');
        $this->upload('image', 'Image');
        $this->number('lat', 'Lat');
        $this->number('long', 'Long');
        $this->number('low_price', 'Low Price');
        $this->number('high_price', 'High Price');
        $this->radio('top_destination', 'Top Destination', [1 => "Yes", 0 => "No"]);
        $this->radio('category_id', 'Category', Utils::createModelChoices(ListingCategory::all(), "id", "name"));
        $this->radio('is_active', 'Active', [1 => "Yes", 0 => "No"]);
        $this->text('tags', 'Tags', ["class" => "taglify taglify-tags"]);
        $this->textArea('details', 'Details', ["class" => "wysiwyg"]);
        $this->separator('Area');
        $this->select('province_id', 'Province', Utils::createModelChoices(Province::all(), "id", "name"), [
            "load" => [
                "url" => route('cms.cities'). "?province_id={city_id}",
                "field" => "city_id"
            ]
        ]);
        $this->select('city_id', 'City', Utils::createModelChoices(City::all(), "id", "name"), [
            "load" => [
                "url" => route('cms.districts'). "?city_id={district_id}",
                "field" => "district_id"
            ]
        ]);
        $this->select('district_id', 'District', Utils::createModelChoices(District::all(), "id", "name"));

        $this->extra['taglify'] = collect([
            "tags" => ListingTag::all()->map(fn ($value) => $value->name)
        ]);

        $this->separator('360 Image');
        $this->text('image_360_url', '360 Image');

        $this->separator('Metadata');

        $this->textArea('description', 'Meta Description');
        $this->text('keywords', 'Meta Keywords (comma separated)');
        $this->text('canonical', 'Meta Canonical');
        $this->text('robots', 'Robots');
    }
}
