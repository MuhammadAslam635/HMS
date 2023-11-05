<div>
    <div class="d-flex">
        <div class="col-md-6 page-title mb-3">
            {{Request()->segment(2) ? Str::upper(Request()->segment(2)) : 'users'}}

        </div>
        <div class="col-md-6">
            <a href="{{route('users.create')}}" class="btn btn-success float-right">Add New User</a>
        </div>
    </div>
    @include('backend.admins.users.header')

    <div class="card">
        <div class="card-header">
            <div class="flex items-center justify-center float-left">
                <div class="flex items-center space-x-2 rtl:space-x-reverse">


                    <div class="flex items-center justify-center float-left">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <label for="perPage" class="text-sm font-medium">
                                per page
                            </label>
                            <x-jambasangsang.select-box wire="perPage" name="perPage" class="h-8 text-sm pr-8 pl-1 text-center leading-none transition duration-75 border-gray-200 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                                @foreach (App\Jambasangsang\Helper::getPerPageNumber() as $key => $perpage)
                                <option value="{{ $key }}">{{ $loop->first ? $perpage : $key }}</option>
                                @endforeach
                            </x-jambasangsang.select-box>

                            @isset($is_enable)
                            <label for="perPage" class="text-sm font-medium">
                                short
                            </label>
                            <x-jambasangsang.select-box wire="sortBy" name="" class="h-8 text-sm pr-8 pl-1 text-center leading-none transition duration-75 border-gray-200 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                                <option value="asc">{{ __('ASC') }}</option>
                                <option value="desc">{{ __('DESC') }}</option>
                            </x-jambasangsang.select-box>
                            @endisset

                        </div>
                    </div>

                    <label for="perPage" class="text-sm font-medium">
                        Sort By
                    </label>
                    <select name="sortBy" wire:model="sortBy" class="form-control">
                        <option value="asc">ASC</option>
                        <option value="desc">{{ __('DESC') }}</option>
                    </select>


                </div>
            </div>
            <div class="fles float-right">
                <x-jambasangsang.search-box name="search" />
            </div>
            <div class="btn-group">
                <button class="btn btn-success btn-flat" wire:click="BulkExport"><i class="fa fa-file-excel-o"></i>Bulk Export</button>
                <button class="btn btn-danger btn-flat" wire:click="openDeleteModal"><i class="fa fa-trash"></i>Bulk Delete</button>
            </div>
        </div>
        <div class="card-body">


            <table class="table mb-0">
                <thead>
                    <tr>
                        <th><input type="checkbox" name="selectAll" wire:model="selectAll"></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if(count($checked) > 0)
                    <tr>
                        <td colspan="12">
                            <div class="row">
                                <div class="col-md-9">
                                    You selected {{count($checked)}}
                                    {{Str::plural('Row',count($checked))}}
                                    &nbsp; Do You wan to select All &nbsp;
                                    <a href="javascript:()" class="btn btn-success btn-flat" wire:click="selectAllRecord()">Select All</a>
                                    <div class="col-md-3">
                                        <div class="btn-group">
                                            <button class="btn btn-success btn-flat" wire:click="BulkExport"><i class="fa fa-file-excel-o"></i>Bulk Export</button>
                                            <button class="btn btn-danger btn-flat" wire:click="BulkDelete"><i class="fa fa-file-trash"></i>Bulk Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endif

                    @foreach($users1 as $user)
                    <tr class="{{ $selectAll ==true || in_array($user->id,$checked) ? 'bg-green-100' : ''}}">
                        <td><input type="checkbox" name="select" wire:model="select"></td>
                        <td>
                            <h2 class="table-avatar">
                                <a href="#" class="avatar">
                                    <img src="" alt="" class="imag-round">
                                </a>
                                <a href="#">{{$user->name}}
                                    <span>


                                </a>
                            </h2>
                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>{{App\Jambasangsang\Helper::getGenderValue($user->gender)}}</td>
                        <td>
                            <div class="status-toggle">
                                <input type="checkbox" id="status{{$user->id}}" wire:click="changeStatus('{{$user->id}}',{{$user->status}})" class="check" {{App\Jambasangsang\Helper::getStatusValue($user->status)}}>
                                <label for="status{{$user->id}}" class="checktoggle">checkbox</label>
                            </div>
                        </td>
                        <td>

                            <div class="btn-group">
                                <a href="{{route('users.edit',[$user->id])}}"><i class="fa fa-edit fa-2x px-2"></i></a>
                                <a href="javascript:()" wire:click="openDeleteModal('{{$user->id}}')"><i class="fa fa-trash fa-2x text-danger"></i></a>
                            </div>

                        </td>
                    </tr>


                    @endforeach


                </tbody>

            </table>

            <x-not-found />

        </div>



    </div>
    <x-modals.delete :data="$user" />

</div>