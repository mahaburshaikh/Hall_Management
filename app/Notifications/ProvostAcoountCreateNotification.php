<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\Model\admin\admin;

class ProvostAcoountCreateNotification extends Notification
{
    use Queueable;

    Public $admin;
    public $password;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(admin $admin, $password)
    {
      $this->admin = $admin;
      $this->password = $password;
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
      ->greeting('Hello Sir !!')
      ->subject('Message From PSTU Controller' )
      ->line('Your teacher account of PSTU is created successfully.')
      ->line('Your Email : '.$this->admin->email)
      ->line('Your Password : '.$this->password)
      ->action('Login Now', route('admin.login'))
      ->line('You can login now with your credentials.')
      ->line('Thank you for staying with us !!');
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
