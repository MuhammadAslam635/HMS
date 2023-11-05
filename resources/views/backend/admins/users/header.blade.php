<ul class="nav nav-tabs nav-tabs-solid mb-2 bg-danger" id="myHeader">
    @foreach(App\Jambasangsang\Helper::getRoles() as $key=>$role)
    <li class="nav-item">
        <a href="#" wire:click="getUserDataByRole('{{$role->name}}')" class="nav-link {{ Str::lower($role->name) == $currentUrl ? 'active' : '' }} text-light">
            {{ Str::upper(str_replace('-','',$role->name)) }}</a>
    </li>
    @endforeach
</ul>
