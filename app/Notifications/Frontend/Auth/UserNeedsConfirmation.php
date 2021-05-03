<?php

namespace App\Notifications\Frontend\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

/**
 * Class UserNeedsConfirmation.
 */
class UserNeedsConfirmation extends Notification
{
    use Queueable;

    /**
     * @var
     */
    protected $status;


    /**
     * UserNeedsConfirmation constructor.
     *
     * @param $status
     */
    public function __construct($status)
    {
        $this->status = $status;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        if ($this->status == 1) {
            return (new MailMessage())
                ->subject(app_name() . ': ' . __('backend.account_approved'))
                ->line(__('backend.your_account_has_been_approved'))
                ->action(__('backend.login'), URL('login'))
                ->line(__('backend.thank_you_for_joing_us'));
        } else {
            return (new MailMessage())
                ->subject(app_name() . ': ' . __('backend.account_deactivated'))
                ->line(__('backend.your_account_has_been_deactivated'));

        }
    }
}
