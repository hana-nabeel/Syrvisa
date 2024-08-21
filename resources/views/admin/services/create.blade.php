@extends('admin.services.app2')

@section('content')

<div class="container">
    <form action="{{route('adminCategoryStore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Service Name</label>
            <input type="text" name="service_name" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Service Image</label>
            <input type="file" name="service_image" id="">
          </div>
          <div class="mb-3">
         <input type="submit" value="Create">
          </div>
    </form>
</div>    
@endsection