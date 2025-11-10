<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Lockout;

class ForgotRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
        ];
    }

    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 3)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey(): string
    {
        return Str::lower($this->input('email')).'|'.$this->ip();
    }

    public function validatedUser(): User
    {
        $email = $this->input('email');

        $user = User::where('email', $email)->first();

        if (! $user || ! $user->is_active || ! $user->email_verified_at) {
            RateLimiter::hit($this->throttleKey(),300);
            throw ValidationException::withMessages([
                'email' => ['This account is either inactive or not verified.'],
            ]);
        }

        return $user;
    }
}
