@php
  $image = get_sub_field('sample_image');
  $cta = get_sub_field('sample_cta');    
@endphp

<section class="fc-sample-module">
  <div class="container">
    {!! get_sub_field('sample_text') !!}
    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
    <a href="{{ $cta['url'] }}" title="{{ $cta['title'] }}" target="{{ $cta['target'] }}">{{ $cta['title'] }}</a>
  </div>
</section>