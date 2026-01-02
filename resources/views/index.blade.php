@extends('layouts.app')

@section('content')
  <div class="container mx-auto px-4 py-12 max-w-4xl">
    @if (! have_posts())
      <div class="text-center py-16">
        <p class="text-gray-400 text-lg">{{ __('No content found.', 'sage') }}</p>
      </div>
    @endif

    <div class="space-y-8">
      @while(have_posts()) @php(the_post())
        <article class="bg-gray-800 rounded-lg p-6 hover:bg-gray-700 transition-colors">
          <h2 class="text-2xl font-semibold mb-3 text-white">
            <a href="{{ get_permalink() }}" class="hover:text-gray-300 transition-colors">
              {!! get_the_title() !!}
            </a>
          </h2>
          <div class="text-gray-400 text-sm mb-4">
            <time datetime="{{ get_post_time('c', true) }}">
              {{ get_the_date() }}
            </time>
          </div>
          <div class="text-gray-300 leading-relaxed">
            @php(the_excerpt())
          </div>
        </article>
      @endwhile
    </div>

    @if (get_the_posts_navigation())
      <div class="mt-12 text-center">
        {!! get_the_posts_navigation() !!}
      </div>
    @endif
  </div>
@endsection
