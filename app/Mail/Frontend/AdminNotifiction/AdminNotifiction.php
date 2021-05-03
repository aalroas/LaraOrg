<?php

namespace App\Mail\Frontend\AdminNotifiction;

use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class AdminNotifiction.
 */
class AdminNotifiction extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var User
     */
    public $user;

    /**
     * AdminNotifiction constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
             return $this->to(config('mail.from.address'), config('mail.from.name'))
            ->view('frontend.mail.not')
            ->text('frontend.mail.not-text')
            ->subject(__('backend.pending_approval'), app_name())
            ->replyTo($this->user->email, $this->user->full_name_en);
    }
}
