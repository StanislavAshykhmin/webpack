@extends('layouts.app')
@section('title', 'Blog')
@push('styles')
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
@endpush
@section('content')
	<div class="container">

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">About
						<strong>business casual</strong>
					</h2>
					<hr>
				</div>
				<div class="row">
					<div class="col-md-6 col-xl-6">
						<img class="img-responsive img-border-left" src="{{asset('img/intro-pic.jpg')}}" alt="">
					</div>
					<div class="col-md-6 col-xl-6">
						<p>This is a great place to introduce your company or project and describe what you do.</p>
						<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="sl_ctr">
		<div class="sldr">
			<img src="{{asset('img/intro-pic.jpg')}}" alt="">
			<img src="{{asset('img/intro-pic.jpg')}}" alt="">
			<img src="{{asset('img/intro-pic.jpg')}}" alt="">
			<img src="{{asset('img/intro-pic.jpg')}}" alt="">
		</div>
		<div class="prv_b carousel-control-prev-icon" ></div>
		<div class="nxt_b carousel-control-next-icon"></div>
	</div>
@endsection

@push('scripts')
	<script src="{{asset('js/app.js')}}"></script>
@endpush