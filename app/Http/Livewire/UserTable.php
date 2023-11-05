<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Jambasangsang\Flash\Facades\LaravelFlash;

class UserTable extends Component
{
    use WithPagination;
    public $currentUrl;
   
    public $selectAll = false;
    public $checked=[];
    public $select;
    public $search;
    public $sortBy='desc';
    public $perPage=5;
    public $user;
    public $users = [];
    //public $id;
    public function mount()
    {
        //$this->id=$id;
        $this->currentUrl = Route::current()->getName();
    
    }
    public function getUsersQueryProperty()
    {
        return User::search($this->search)->Role([Str::replaceFirst('users.', '', $this->currentUrl)])->orderBy('id', $this->sortBy)->paginate($this->perPage);
    }
    public function getUsersProperty()
    {
        return $this->usersQuery->paginate($this->perPage);
    }
    public function updatedSelectAll($value)
    {
        if($value)
        {
            $this->checked = $this->users->pluck('id')->map(fn($value) => (string) $value)->toArray();
        }else{
            $this->checked=[];
        }
    }
    public function updateChecked()
    {
        if(count($this->checked) == $this->perPage)
        {
            $this->selectAll= true;
        }
        else{
            $this->selectAll= false;
        }
    }
    public function selectAllRecord()
    {
        $this->checked = $this->usersQuery->pluck('id')->map(fn ($value) => (string) $value)->toArray();
        if (count($this->checked) == count($this->userss)) {
            $this->selectAll = true;
        } else {
            $this->selectAll = false;
        }
    }
    public function getUserDataByRole($role)
    {
        // User::Role(['doctor',$role])->get()->dd();
        //$this->currentUrl = $role;
        // User::Role([$role])->get(['id','name'])->dd($role);
        //User::Role([Str::replaceFirst('doctor.', '', $this->currentUrl), $role])->get()->dd();
        //
        $this->emit('urlChange', $this->currentUrl);
        $this->currentUrl = $role;
        

        // dd($this->currentUrl);
        //$this->users = User::role([$role])->get();
    }
    public function changeStatus($userId,$status)
    {
        $updatestatus = $status == 0 ? 1 : 0;
        User::find($userId)->update(['status'=>$updatestatus]);

    }
    public function openDeleteModal($userId)
    {
      if(!empty($userId))
      {
            $this->user = $userId;
      }
       $this->dispatchBrowserEvent('openModal');
    }
    public function deleteUser()
    {
        if(!empty($this->user))
        {
            User::find($this->user)->delete();
        }
        else{
            User::whereIn('id',$this->checked);
           
        }

        $this->dispatchBrowserEvent('hideModal');
        $this->selectedAll=false;
        $this->checked=[];
    }
    public function render()
    {
        if(!in_array($this->currentUrl,['users.index'])){
            $users1=User::search($this->search)->Role([Str::replaceFirst('users.', '', $this->currentUrl)])->orderBy('id', $this->sortBy)->paginate($this->perPage);
        }else{
        $users1 = User::search($this->search)->orderBy('id', $this->sortBy)->paginate($this->perPage);
        }
        return view('livewire.user-table',['users1'=>$users1]);
    }
}
