{{--
  Template Name: Flexible Content
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @while(have_rows('fc')) @php(the_row())
      @include('modules.fc-'.get_row_layout())
    @endwhile
  @endwhile
@endsection