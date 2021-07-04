<?php
namespace App\Form\Listing;

use App\Utils\Utils;
use App\Models\Listing;
use App\Models\ListingTag;
use App\Models\ListingCategory;
use Gustiawan\FormBuilder\Form;
use App\Models\ListingTagCategory;

class ListingCreateForm extends Form
{
    public function handle() 
    {
        $this->text('title', 'Title');
        $this->text('address', 'Address');
        $this->upload('image', 'Image');
        $this->number('lat', 'Lat');
        $this->number('long', 'Long');
        $this->number('low_price', 'Low Price');
        $this->number('high_price', 'High Price');
        $this->radio('category_id', 'Category', Utils::createModelChoices(ListingCategory::all(), "id", "name"));
        $this->text('tags', 'Tags', ["class" => "taglify taglify-tags"]);
        $this->textArea('details', 'Details', ["class" => "wysiwyg"]);
        $this->extra['taglify'] = collect([
            "tags" => ListingTag::all()->map(fn ($value) => $value->name)
        ]);

        $this->separator('Metadata');

        $this->textArea('description', 'Meta Description');
        $this->text('keywords', 'Meta Keywords (comma separated)');
        $this->text('canonical', 'Meta Canonical');
        $this->text('robots', 'Robots');
    }
}
