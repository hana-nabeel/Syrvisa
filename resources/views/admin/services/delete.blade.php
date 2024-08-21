@extends('admin.services.app2')

@section('content')
    <form action="{{route('adminCategoryDestroy',$category->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">هل أنت متأكد من حذف خدمة:   {{$category->service_name}}</label>
          </div>
          <div class="mb-3">
         <input type="submit" value="Delete">
          </div>
    </form>
@endsection