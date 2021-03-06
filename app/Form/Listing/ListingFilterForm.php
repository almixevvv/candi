<?php
namespace App\Form\Listing;

use App\Models\Listing;
use App\Utils\Database;
use Illuminate\Http\Request;
use Gustiawan\FormBuilder\Form;
use Illuminate\Pagination\LengthAwarePaginator;

class ListingFilterForm extends Form
{
    public function handle() 
    {
        $this->text('title', 'Title');
        $this->textArea('address', 'Address');
        $this->text('lat', 'Lat');
        $this->text('long', 'Long');
        $this->number('low_price', 'Low Price');
        $this->number('high_price', 'High Price');
        $this->radio('top_destination', 'Top Destination', [1 => "Yes", 0 => "No"]);
        $this->radio('is_active', 'Active', [1 => "Yes", 0 => "No"]);

        $this->separator();
        $this->button('Search', 'btn-secondary');
    }

    public function filter(Request $request): LengthAwarePaginator
    {
        $listings = Listing::with('image', 'ratings.category')->orderBy('id', 'desc');

        if ($request->title) {
            $listings = Database::whereLike($listings, "title", $request->title, true);
        }

        if ($request->address) {
            $listings = Database::whereLike($listings, "address", $request->address, true);
        }

        if ($request->lat) {
            $listings = $listings->where('lat', $request->lat);
        }

        if ($request->low_price) {
            $listings = $listings->where('low_price', ">=", $request->low_price);
        }

        if ($request->high_price) {
            $listings = $listings->where('high_price', "<=", $request->high_price);
        }

        if ($request->top_destination) {
            $listings = $listings->where('top_destination', $request->top_destination);
        }

        if ($request->is_active) {
            $listings = $listings->where('is_active', $request->is_active);
        }

        return $listings->paginate(config('app.pagination_limit'));
    }
}
