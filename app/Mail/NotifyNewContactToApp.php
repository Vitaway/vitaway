<?php

    namespace App\Mail;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;

    class NotifyNewContactToApp extends Mailable {
        use Queueable, SerializesModels;

        public $payload;

        /**
         * Create a new message instance.
         *
         * @return void
         */
        public function __construct($payload) {
            $this->payload = $payload;
        }

        /**
         * Build the message.
         *
         * @return $this
         */
        public function build() {
            return $this->view('emails.notify_new_contact_to_app')
                        ->subject('New Contact Notification')
                        ->with('payload', $this->payload);
        }
    }
