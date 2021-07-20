<?php

namespace App\Rules;

use App\Models\Listing;
use Illuminate\Contracts\Validation\Rule;

class TopDestinationRule implements Rule
{
    private $listing = null;
    private int $max_top_destination = 1;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(Listing $listing = null)
    {
        $this->listing = $listing;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (!$value) return true;

        $listings = Listing::where('top_destination', true);
        if ($this->listing && $this->listing->top_destination) {
            $listings = $listings->where('id', "<>", $this->listing->id);
        }

        return $listings->count() < $this->max_top_destination;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "Top destination cannot more than {$this->max_top_destination}.";
    }
}
