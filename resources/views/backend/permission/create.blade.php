@extends('backend.layouts.app')
@section('content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="{{ route('permissions.index') }}"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2" aria-hidden="true"></i>Back</a></h6>
    </div>
    <div class="card-body">
      <form class="form-inline" action="{{ route('permissions.store') }}" method="POST">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
          <label for="permission" class="sr-only-custom">Permission name</label>
          <input type="text" name="name" class="form-control" id="permission" placeholder="Permission name">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Save</button>
      </form>
    </div>
  </div>
  @endsection
  @section('script')
  <script>
    $(document).ready(function() {
    });
  </script>
  @endsection