<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{

    public $search = "";

    public function render()
    {
        $searchResults = [];
        if (strlen($this->search) > 2 ) {
            $searchResults = Http::get('https://restcountries.com/v3.1/name/'.$this->search)->json();
        }

        return view('livewire.search-dropdown',[
            'searchResults' => $searchResults
        ]);
}
}
