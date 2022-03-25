<?php

namespace App\Http\Livewire;

use App\Models\Auction;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Auctions extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $title;
    public $body;
    public $file1;
    public $number=null;
    public $start_at;
    public $finish_at;
    public $auctionId = null;
    public $newFile1;
    public $showModalForm = false;

    public function showCreateAuctionModal()
    {
        $this->showModalForm = true;
    }
    public function updatedShowModalForm()
    {
        $this->reset();
    }
    public function storeAuction()
    {
        $this->validate([
            'title' => 'required',
            'body'  => 'required',
            //'number'  => 'required',
        ]);

        if ($this->file1) {
            $extension = $this->file1->getClientOriginalExtension();
            $fileNameToStore =  time() . '_' . date('Y-m-d') . '.' . $extension ;
            $this->file1->storeAs('public/documents/', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }
        $auction = new Auction();
        $auction->user_id = auth()->user()->id;
        $auction->title = $this->title;
        $auction->slug = Str::slug($this->title);
        $auction->body = $this->body;
        $auction->file1 = $fileNameToStore;
        $auction->save();
        $this->reset();
        return redirect('/admin/auctions')->with('save', 'Auction successfully created!');
    }
    public function updateAuction()
    { 
        $this->validate([
            'title' => 'required',
            'body'  => 'required',
            'number'  => 'required',
            'image' => 'required|image|max:1024',
            'file1' => 'required'
        ]);
        if ($this->file1) {
            if ($this->file1 != 'noimage.png') {
                $this->newFile1 = $this->file1->getClientOriginalName();
                $this->file1->storeAs('public/photos/', $this->newFile1);
            } else {

                unlink('storage/photos/' . $this->newFile1);
            }
            Storage::delete('public/photos/', $this->newFile1);
            $this->newFile1 = $this->file1->getClientOriginalName();
            $this->file1->storeAs('public/photos/', $this->newFile1);
        }

        Auction::find($this->auctionId)->update([
            'title' => $this->title,
            'body'  => $this->body,
            'file1' => $this->newFile1
        ]);
        $this->reset();
        return redirect('/admin/auctions')->with('info', 'Auction updated Successfully!');
    }
    public function deleteAuction($id)
    {
        $auction = Auction::find($id);
        if ($auction->file1) {
            unlink('storage/documents/' . $auction->file1);
        }
        Storage::delete('public/documents/', $auction->file1);
        $auction->delete();
        //session()->flash('alert', 'Auction deleted Successfully!');
        return redirect('/admin/auctions')->with('alert', 'Auction deleted Successfully!');
    }
    public function showEditAuctionModal($id)
    {
        $this->reset();
        $this->showModalForm = true;
        $this->auctionId = $id;
        $this->loadEditForm();
    }
    public function loadEditForm()
    {
        $auction = Auction::findOrFail($this->auctionId);
        $this->title = $auction->title;
        $this->body = $auction->body;
        $this->newFile1 = $auction->image;
    }
    public function render()    
    {
        return view('livewire.auctions', [
            'auctions' => Auction::orderBy('created_at', 'DESC')->paginate(6)
        ]);
    }
}
