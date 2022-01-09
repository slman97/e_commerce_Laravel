<?php

namespace App\Http\Livewire;

use App\Profile;
use App\User;
use Livewire\Component;

class SearchDrop extends Component
{
   public $searchTerm;
   public $users;
    public function render()
    {
        $searchTerm = '%'. $this->searchTerm.'%';
        $this->users = Profile::where('title','like',$searchTerm)->get();
        return view('livewire.search-drop');
    }
}
