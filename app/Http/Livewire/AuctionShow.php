<?php

namespace App\Http\Livewire;

use App\Models\Auction;
use Livewire\Component;

class AuctionShow extends Component
{
    public $auction;

    public function mount($slug)
    {
        $this->auction = Auction::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.auction-show')->layout('layouts.guest');
    }
}
