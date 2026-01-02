<header class="bg-red-800 border-b border-red-700">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between">
    <a class="text-xl font-bold text-white hover:text-gray-300 transition-colors" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-6', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</header>
