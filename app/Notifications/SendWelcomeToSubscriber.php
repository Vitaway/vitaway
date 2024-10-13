<?php

    namespace App\Notifications;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Notifications\Messages\MailMessage;
    use Illuminate\Notifications\Notification;

    class SendWelcomeToSubscriber extends Notification {
        use Queueable;

        /**
         * Create a new notification instance.
         *
         * @return void
         */
        public function __construct()
        {
            //
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
        public function toMail($notifiable) {
            return (new MailMessage)
                        ->subject('Welcome to Our Community!')
                        ->greeting('Hello!')
                        ->line('Thank you for subscribing to our newsletter. We are excited to have you on board.')
                        ->line('Stay tuned for the latest updates, news, and exclusive offers.')
                        ->action('Visit Our Website Blogs', url('/blogs'))
                        ->line('Thank you for being a part of our community!');
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
