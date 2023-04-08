@extends('layout')
  
@section('content')
<style>
ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #eee;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><ul class="breadcrumb">
  
  <li><a href="{{ route('login') }}">Home</a></li>
  <li>Profile</li>
</ul></div>
  
                <div class="card-body">


                    <form action="update" method="POST">
                        @csrf()
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <label>Dob</label>
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <label>Gender</label><br>
                            <input type="radio" name="gender" value="male" required>Male<br>
                            <input type="radio" name="gender" value="male" required>FeMale<br>
                        </div>
                      
                         <div class="form-group">
                            <input type="hidden" name="uid" value="{{Auth::user()->id}}">
                            <input type="submit" name="" class="btn btn-primary" value="Update" required>
                        </div>
                    </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection