<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use App\Models\Listing;
use Livewire\Component;

class ListingFaq extends Component
{
    public Listing $listing;
    public array $faqs = [];

    public function mount(Listing $listing) 
    {
        $this->listing = $listing;
        if ($listing->faqs) {
            $faqs = [];
            foreach ($listing->faqs as $faq) {
                $faqs[] = [
                    "question" => $faq->question,
                    "answer" => $faq->answer,
                    "listing_id" => $listing->id
                ];
            }

            $this->faqs = $faqs;
        } else {
            $this->faqs[] = [
                "question" => "",
                "answer" => "",
                "listing_id" => $listing->id
            ];
        }
    }

    public function addNewFaq() {
        $this->faqs[] = [
            "question" => "",
            "answer" => "",
            "listing_id" => $this->listing->id
        ];
    }

    public function delete(int $key) 
    {
        unset($this->faqs[$key]);
        $this->faqs = array_values($this->faqs);
    }

    public function validateData()
    {
        foreach($this->faqs as $faq) {
            if (! ($faq['question'] && $faq['answer'])) {
                session()->flash('error_message', 'Please check the input');
                return false;
            }
        }
        return true;
    }

    public function save() 
    {
        $validated = $this->validateData();
        $this->listing->faqs()->delete();

        if ($validated) {
            foreach ($this->faqs as $key => $faq) {
                $faq['position'] = $key +1;
                Faq::create($faq);
            }

            return redirect()->route('cms.listings.show', $this->listing);
        }
    }

    public function render()
    {
        return view('livewire.listing-faq');
    }
}
