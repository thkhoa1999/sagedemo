@extends('layouts.app')
@section('content')
  <div class="space-100"></div>
  @while (have_posts()) @php the_post() @endphp
    @if (have_rows('c8_templates'))
      @php $i=0; @endphp
      @while (have_rows('c8_templates')) @php the_row()@endphp
        @include('template-parts.page.module-'.get_row_layout(), ['data' => Page::getDataModule($c8_templates[$i])])
        @php
        $i++;
        @endphp
        <div class="space-100"></div>
      @endwhile
    @endif
  @endwhile
@endsection

{{-- @include('partials.page-header')
@include('partials.content-page') --}}
