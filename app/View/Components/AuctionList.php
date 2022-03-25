<?php

namespace App\View\Components;

use App\Models\Auction;
use Illuminate\View\Component;

class AuctionList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auction-list');
    }
    public function auctions()
    {
        $auctions = Auction::all();
        return $auctions;
    }

}
