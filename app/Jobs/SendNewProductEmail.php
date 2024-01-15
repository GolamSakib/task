<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\NewProductCreated;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendNewProductEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function handle()
    {
        $users = User::all();
        foreach($users as $user){
            Mail::to($user->email)->send(new NewProductCreated($this->product));
        }
    }
}
