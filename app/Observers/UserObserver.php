<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\WelcomeMailNotification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        //
        $token=Str::random(40);
        //Ön bellekte 60 dakika boyunca sakla
        Cache::put("_verify_token_" . $token, $user->id, 3600);
        $user->notify(new WelcomeMailNotification($token));
    }

    /**
     * Handle the User "updated" event.
     */

    public function updated(Request $request, User $user): void
    {
        if($user->isDirty('email_verified_at')) {
            Cache::forget('_verify_token_' . $request->token);
        }
    }


    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
