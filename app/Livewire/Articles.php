<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Famille;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
// use Livewire\WithoutUrlPagination;
// use Livewire\WithPagination;

class Articles extends Component
{

    // use WithPagination, WithoutUrlPagination;

    public $articles = [];
    public $familles = [];
    public $famille_id = null;
    public $searchKey = "";
    public $sortBy = "id";


    public function mount(){
        $this->familles = Famille::all();
    }
    
    public function setFamilleId($id){
        $this->famille_id = $id;
    }
    
    public function render()
    {
        if($this->famille_id == null) {
            $this->articles = DB::table("articles")->where("designation", "like", "%".$this->searchKey."%")->get();
        }
        else {
            $this->articles = DB::table("articles")->where("famille_id", $this->famille_id)->where("designation", "like", "%".$this->searchKey."%")->get();
        }
        return view('livewire.articles');
    }
}
