@extends('backend.layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="{{ route('users.index') }}">
                <i aria-hidden="true" class="fas fa-sign-out-alt fa-sm fa-fw mr-2">
                </i>
                Back
            </a>
        </h6>
    </div>
    <div class="card-body">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>
                Whoops!
            </strong>
            There were some problems with your input.
            <br>
                <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </br>
            </br>
        </div>
        @endif
      {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>
                        Name:
                    </strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'required')) !!}
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>
                        User Name:
                    </strong>
                    {!! Form::text('username', null, array('placeholder' => 'User Name','class' => 'form-control', 'required')) !!}
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>
                        Phone:
                    </strong>
                    {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control', 'required')) !!}
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>
                        Email:
                    </strong>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control', 'required')) !!}
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>
                        Password:
                    </strong>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control', 'required')) !!}
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>
                        Confirm Password:
                    </strong>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control', 'required')) !!}
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>
                        Role:
                    </strong>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control', 'required')) !!}
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                <button class="btn btn-success" type="submit">
                    Submit
                </button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
  @section('script')
<script>
    $(document).ready(function() {
    });
</script>
@endsection
