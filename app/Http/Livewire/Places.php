<?php

namespace App\Http\Livewire;



use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use App\Models\Actions;
use App\Models\Comment;
use App\Models\Place;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use phpDocumentor\Reflection\Types\Null_;


class Places extends Component
{
    use WithPagination;
    use WithFileUploads;
    

    protected $paginationTheme = 'bootstrap';

    public $currentPage = 1 ;
    public $file;
    public $user;
    
    public $post;
    public $post_id;
    public $content;
    public $user_id;
    public $title;
    
    public $location;
    public $addLocationConfirm=false;


    protected $rules = [
        
        'title' => 'required | min:2',
        
        
       
        
    ];

    
    
    

    // public function paginationView()
    // {
    //     return 'bootstrap';
    // }

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $posts;
        // $search = '%' . $this->search . '%';
        return view('livewire.places',[
            'places' => Place::paginate(50),
            'users' => User::where('name','like','%%')->orderBy('name','asc')->paginate(1)
        ]);
        
    }

    public function setPage($url)
    {
        $this->currentPage = explode('page=',$url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });

    }

}
