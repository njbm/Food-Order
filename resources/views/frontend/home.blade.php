@extends('frontend.layouts.app')


@section('content')

   @include('frontend.sections.slider')
   @include('frontend.sections.category_slider')
   @include('frontend.sections.banner')
   @include('frontend.sections.product')
   @include('frontend.sections.recipe')
   @include('frontend.sections.client')

@endsection