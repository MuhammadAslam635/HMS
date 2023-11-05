<div class="card">
    <div class="card-header">
        <h2>Create New User</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="title">Title</label>

                    <select name="title" id="title" class="form-control">
                        <option value="1">Mr</option>
                        <option value="2">Dr</option>
                        <option value="3">Mrs</option>
                    </select>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" value="{{  isset($user) ? $user->name : old('name') }}" name="name" id="name" placeholder="Enter Full Name" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" value="{{  isset($user) ? $user->username : old('username') }}" name="username" id="username" placeholder="Enter User Name" class="form-control">
                </div>
            </div>
        </div>
        <!-- step 2 -->
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="gender">Gender</label>

                    <select name="gender" id="gender" class="form-control">
                        @foreach(App\Jambasangsang\Helper::getGender() as $key => $gender)
                        <option value="{{$key}} " {{  isset($user) ? App\Jambasangsang\Helper::Selected($key , $user->gender) : old('gender')}}>{{$gender}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value="{{  isset($user) ? $user->email : old('email') }}" name="email" id="email" placeholder="Enter email" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="mobile">Phone</label>
                    <input type="text" value="{{  isset($user) ? $user->mobile : old('mobile') }}" name="mobile" id="mobile" placeholder="Enter Phone" class="form-control">
                </div>
            </div>
        </div>
        <!-- step 3 -->
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="religion">Religion</label>

                    <select name="religion" id="religion" class="form-control">
                        @foreach(App\Jambasangsang\Helper::getReligion() as $key => $religion)
                        <option value="{{$key}}" {{  isset($user) ? App\Jambasangsang\Helper::Selected($key , $user->religion) : old('religion')}}>{{$religion}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <x-flatpickr name="dob" value="{{isset($user)  ? ($user->dob) : old('dob')}}" />

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="status">Status</label>
                    <div class="check-toggle">
                        <input type="checkbox" name="status" id="status" placeholder="Enter Phone" class="check" {{  isset($user) ? App\Jambasangsang\Helper::getStatusValue($user->status) : old('status')}}>
                        <label for="status" class="checktoggle"></label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="role_id">Role</label>

                    <select name="role_id" id="role_id" class="form-control">
                        @foreach(App\Jambasangsang\Helper::getRoles() as $key => $role)
                        <option style="text-transform:capitalize;" value="{{$role->name}}" {{  isset($user) ? App\Jambasangsang\Helper::Selected($role->name , $role->name) : old('role_id')}}>{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <!-- step 4 -->
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="address_1">Address 1</label>
                    <textarea name="address_1" id="address_1" cols="20" rows="2" class="form-control">
                    {{ isset($user) ? $user->address_1 : old('address_1') }}
                    </textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address_2">Address 2</label>
                    <textarea name="address_2" id="address_2" cols="20" rows="2" class="form-control">
                    {{ isset($user) ? $user->address_2 : old('address_2') }}
                    </textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="btn-group float-right">
            <button class="btn btn-success btn-lg btn-flat">Submit</button>
        </div>
    </div>
</div>