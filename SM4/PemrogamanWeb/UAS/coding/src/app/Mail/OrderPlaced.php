<?php
// File: app/Mail/OrderPlaced.php
// Ini adalah kelas yang hilang yang menyebabkan kode di controller Anda menjadi merah.

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Properti publik ini akan otomatis tersedia di dalam file view email.
     * Ini adalah cara kita mengirim data pesanan ke template email.
     */
    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        // Saat controller memanggil `new OrderPlaced($order)`,
        // data pesanan akan diterima dan disimpan di sini.
        $this->order = $order;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            // Ini adalah subjek email yang akan diterima pelanggan.
            subject: 'Konfirmasi Pesanan - GarageAuto.id #' . $this->order->id,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            // Mengarahkan Laravel untuk menggunakan file blade ini sebagai isi email.
            view: 'emails.orders.placed',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}