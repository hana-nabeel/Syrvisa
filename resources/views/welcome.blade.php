@extends('layouts.master')

@section('hanacontent')

<h1 style= 'text-align: center'>أهلاً بك في بوابة الخدمات الإلكترونية للتأشيرات في سوريا </h1>

<!-- product section -->
<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">أنواع</span> التأشيرات</h3>
					</div>
				</div>
			</div> <br><br>

			<div class="row">
@foreach ($categories as $category)
<div class="col-lg-4 col-md-6 text-center">
	<div class="single-product-item">
		<div class="product-image">
			<a href="single-product.html"><img style="width: 100px;height=100px;" src="{{Storage::url($category->service_image)}}" alt=""></a>
		</div>
		<h3>{{$category->service_name}}</h3>
	</div>
</div>
@endforeach

			</div>
		</div>
	</div>
	<!-- end product section -->
@endsection