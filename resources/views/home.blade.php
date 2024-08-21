@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('إدارة خدمات الموقع') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __(' أنت مسجل هنا مرحبا بك ') }}
                    <table class="table">
						<thead>
                          <tr>
                            <td colspan="5">
                            <button type="button"><a href="{{route('adminCreateCategory')}}">Create</a> 
                            </button>    
                            </td>
                          </tr>
						  <tr>
							<th scope="col">الرقم</th>
							<th scope="col">الخدمة</th>
							<th scope="col">صورة </th>
							<th scope="col">تاريخ الانشاء </th>
							<th scope="col">الحدث</th>
						  </tr>
						</thead>
                        <tbody>
						  @foreach ($categries as $category)
						  <tr>
							<th scope="row">{{$category->id}}</th>
							<td>{{$category->service_name}}</td>
							<td><img  style="width: 100px;height=100px;" src="{{Storage::url($category->service_image)}}" alt=""></td>
							<td>{{$category->created_at}}</td>
							<td>
                            <button type="button"><a href="{{route('adminEditCategory',$category->id)}}">Edit</a> </button>
                            <button type="button"><a href="{{route('adminDeleteCategory',$category->id)}}">Delete</a> </button>
                            </td>
						  </tr>
						  @endforeach
						</tbody>
						
					</table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
