<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;

class CheckoutMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $_order ;
    protected $_orderDetail ;

    /**
     * Create a new message instance.
     */
    public function __construct($order, $orderDetail)
    {
        $this->_order = $order;
        $this->_orderDetail = $orderDetail;
      
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Shop Male Fashion',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.checkout',
            with:  [
                'order' => $this->_order,
                'orderDetail' => $this->_orderDetail,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
