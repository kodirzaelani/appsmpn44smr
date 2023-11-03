<?php

namespace App\Http\Livewire\Template\Frontend\Nusantara\Contact;

use App\Models\Mediasocial;
use Livewire\Component;

class Contactindex extends Component
{
    public function render()
    {
        return view('livewire.template.frontend.nusantara.contact.contactindex', [
            'title' => 'Kontak Kami',
            'socialmedia' => Mediasocial::orderBy('created_at', 'asc')->get(),
        ]);
    }
}
