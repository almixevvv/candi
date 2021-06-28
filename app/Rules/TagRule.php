<?php

namespace App\Rules;

use App\Models\ListingTag;
use Illuminate\Contracts\Validation\Rule;

class TagRule implements Rule
{
    private $invalidTag = [];
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $tagData = collect(json_decode($value))->map(fn ($val) => $val->value);
        foreach ($tagData as $tag) {
            $listingTag = ListingTag::where('name', $tag)->first();
            if (!$listingTag) {
                $this->invalidTag[] = $tag;
            }
        }

        if (count($this->invalidTag) > 0) {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'These :attribute cannot be found : '. implode(", ", $this->invalidTag);
    }
}
