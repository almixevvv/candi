<?php
namespace App\Form\Contact;

use App\Utils\Utils;
use App\Models\Contact;
use App\Models\Purpose;
use App\Utils\Database;
use Illuminate\Http\Request;
use Gustiawan\FormBuilder\Form;
use Illuminate\Pagination\LengthAwarePaginator;

class ContactFilterForm extends Form
{
    public function handle() 
    {
        $this->text('email', 'Email');
        $this->text('name', 'Name');
        $this->checkBox('purpose', 'Purpose', Utils::createModelChoices(Purpose::all(), "id", "name"));
    }

    public function filter(Request $request): LengthAwarePaginator
    {
        $contacts = Contact::with('purpose')->orderBy('id', 'desc');

        if ($request->email) {
            $contacts = $contacts->orWhere("email", $request->email);
        }

        if ($request->name) {
            $contacts = Database::whereLike($contacts, 'name', $request->name);
        }

        if ($request->purpose) {
            $contacts = $contacts->whereIn('purpose_id', $request->purpose);
        }

        return $contacts->paginate(config('app.pagination_limit'));
    }
}
