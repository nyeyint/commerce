<?php

namespace App\Listeners;

use App\Events\GenerateInvoices;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GenerateInvoicesListener implements ShouldQueue
{
    /**
     * DomPDF Wrapper.
     *
     * @return mixed.
     */

    protected $pdf;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->pdf = app('dompdf.wrapper');
    }

    /**
     * Handle the event.
     *
     * @param  GenerateInvoices  $event
     * @return void
     */
    public function handle(GenerateInvoices $event)
    {
        $data = [
            'user' => $event->user,
            'order' => $event->order
        ];

        $html = $this->pdf->loadView('pdf.invoices', compact('data'));
        $html->setOptions(['dpi' => 108])
             ->setPaper('a4', 'portrait')
             ->save($event->path);
    }
}
