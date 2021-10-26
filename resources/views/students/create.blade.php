@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status')}}
                        </div>
                        @endif

                <form action="students" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control"
                required="required" name="nim"></br>
                    </div>
                    <div class="form-group">
                        <label for ="name"></br>
                        </div>
                        <div class="form-group">
                        <label for="name">NAME</label>
                        <input type="text" class="form-control"
                required="required" name="name"></br>
                    </div>
                    <div class="form-group">
                        <label for ="class"></br>
                        </div>
                        <div class="form-group">
                        <label for="class">CLASS</label>
                        <input type="text" class="form-control"
                required="required" name="class"></br>
                    </div>
                    <div class="form-group">
                        
                    <label for="departement">DEPARTMENT</label>
                    <input type="text" class="form-control"
                required="required" name="department"></br>
                    </div>
                    <div class="from-group">
                        <label for="phone_number">PHONE NUMBER</label>
                        <input type="text" class="form-control"
                required="required" name="phone_number"></br>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary
                float-right">Add Data</button>
                </form>       
            </div>
        </div>
    </div>
</div>
@endsection

        

