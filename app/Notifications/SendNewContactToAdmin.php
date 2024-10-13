<?php

    namespace App\Notifications;

    use App\Models\Contact;
    use Illuminate\Bus\Queueable;
    use Illuminate\Notifications\Messages\MailMessage;
    use Illuminate\Notifications\Notification;

    class SendNewContactToAdmin extends Notification {
        use Queueable;

        public $contact;

        /**
         * Create a new notification instance.
         *
         * @return void
         */
        public function __construct(Contact $contact) {
            $this->contact = $contact;
        }

        /**
         * Get the notification's delivery channels.
         *
         * @param  mixed  $notifiable
         * @return array
         */
        public function via($notifiable) {
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
                        ->subject('New Contact Notification - Vitaway')
                        ->line('You have received a new contact.')
                        ->line('**Name:** ' . $this->contact->name)
                        ->line('**Email:** ' . $this->contact->email)
                        ->line('**Message:** ' . $this->contact->message);
        }
    }
