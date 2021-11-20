<?php

namespace App\Http\Livewire\Site;

use App\Models\User;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $tel;
    public $message;

    protected  $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required|string',
        'tel' => 'required',
        'message' => 'required|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {

        $this->validate();

        $message = $this->message;

        $message .= "\nname: $this->name";
        $message .= "\nemail: $this->email";
        $message .= "\ntel: $this->tel";

        \Mail::raw($message,function ($mail){
            $mail->to('info@digitalmarketingkenya.com')
                ->subject($this->subject);
        });
    }
    public function render()
    {
        return view('livewire.site.contact-form');
    }
}
