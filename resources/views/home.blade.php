@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Profile Information</div>
                <div class="panel-body">
                    <div style="border-bottom: 1px solid gray;">
                        <table>
                            <tr>
                                <td><img src="https://bootdey.com/img/Content/avatar/avatar1.png" height="150px"></td>
                                <td style="padding-left: 10px;"><h5 class="text-danger">{{ Auth::user()->name }}</h5></td>
                            </tr>
                        </table>
                    </div>
                    <div class="row" >
                        <!-- Form Group (first name)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="inputFirstName">Complete name</label>
                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="inputLastName">Address</label>
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Birth Date</label>
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Age</label>
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Gender</label>
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Occupation</label>
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Contact Number</label>
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Email Address</label>
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                        </div>
                    </div>
                   <button  class="btn btn-xs btn-danger">Update</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="list-group list-group-flush account-settings-links">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Connections</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a>
          </div>
        </div>
    </div>
</div>
@endsection
