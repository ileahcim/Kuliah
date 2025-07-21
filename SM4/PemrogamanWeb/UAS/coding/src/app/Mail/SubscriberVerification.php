<?php
// Langkah 2B: Jalankan `php artisan make:mail SubscriberVerification`
// Lalu buka file app/Mail/SubscriberVerification.php dan isi dengan kode ini.

namespace App\Mail;

use App\Models\VerifiedSubscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class SubscriberVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriber;

    public function __construct(VerifiedSubscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Verifikasi Alamat Email Anda - GarageAuto.id',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.subscribers.verify',
            with: [
                'verificationUrl' => URL::temporarySignedRoute(
                    'subscribe.verify', now()->addMinutes(60), ['subscriber' => $this->subscriber->id]
                ),
            ],
        );
    }
}