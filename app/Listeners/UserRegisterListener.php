<?php

namespace App\Listeners;

use App\Events\UserRegisterEvent;
use App\Mail\UserWelcomeMail;
use App\Notifications\WelcomeMailNotification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserRegisterListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegisterEvent $event): void
    {
        //
/*         $token=Str::random(40);
        //Ön bellekte 60 dakika boyunca sakla
        Cache::put("_verify_token_" . $token, $event->user->id, 3600);
        $event->user->notify(new WelcomeMailNotification($token)); */
/*         Mail::to(users: $event->user->email)->send(new UserWelcomeMail($event->user, $token));
 */   }
}