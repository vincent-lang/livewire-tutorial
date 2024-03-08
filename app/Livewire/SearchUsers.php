<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('search')]
class SearchUsers extends Component
{
    public $search = '';

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.search-users', [
            'users' => DB::table('users')->where('name', 'like', '%' . $this->search . '%')->paginate(6),
        ]);
    }
}
