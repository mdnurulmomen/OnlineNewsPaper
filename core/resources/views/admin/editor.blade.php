@extends('admin.layout.app')
@section('contents')
<div class="content p-4">
    <h2 class="mb-4"> Profile Setting </h2>
    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Profile Updating Form
        </div>
        <div class="card-body">
            <form method="POST" action = "{{ route('admin.createdEditorSubmit') }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name:</label>
                    <div class="col-sm-5">
                        <input type="text" name="editorFirstName" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="editorLastName" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="editorUserName" class="form-control" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" name="editorPassword" class="form-control" placeholder="Chosse a Suitable Password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" name="editorEmail" class="form-control" placeholder="Email Address">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Categories Selection:</legend>
                        <div class="col-sm-10">
                            @foreach($allCategories as $category)
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="gridRadios1">
                                    <input type="checkbox" class="form-check-input" name="editorCategories[]" value="{{$category->id}}">{{$category->name}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Picture:</label>
                    <div class="col-sm-10">
                        <input type="file" name="editorPic" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone / Mobile:</label>
                    <div class="col-sm-10">
                        <input type="tel" name="editorPhone" class="form-control" placeholder="Phone or Mobile Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAddress2" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="editorAddress" class="form-control" placeholder="Apartment, studio, or floor">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-4">
                        <label for="inputCity" class="col-sm-2 col-form-label">City</label>
                        <input type="text" name="editorCity" class="form-control" placeholder="City Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState" class="col-sm-2 col-form-label">State</label>
                        <input type="text" name="editorState" class="form-control" placeholder="State Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip" class="col-sm-2 col-form-label">Country</label>
                        <input type="text" name="editorCountry" class="form-control" placeholder="Country Name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-block btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop