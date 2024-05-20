<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueForUser implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $user = auth()->user();
        if (!$user) {
            $fail("The user is not authenticated.");
        }
        
        if ($user->tasks()->where($attribute, $value)->exists()) {
            $fail("The $attribute has already been taken.");
        }
    }
}
