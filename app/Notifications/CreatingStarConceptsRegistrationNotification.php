<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatingStarConceptsRegistrationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reg_code)
    {
        $this->reg_code = $reg_code;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Congratulations, your registration for Creating Stars Contest was successful.')
            ->line('Your Contestant ID is ' . $this->reg_code)
            ->line('The next stage of the contest would be communicated to you shortly.')
            ->line('Kindly follow our social media handles for updates')
            ->line('https://www.instagram.com/creatingstarsconcept/')
            ->line('https://web.facebook.com/Creating-Stars-Concept-101987579147010');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
