<footer class="bg-red-800 border-t border-red-700 mt-16">
  <div class="container mx-auto px-4 py-8 text-center text-gray-400 text-sm">
    @php(dynamic_sidebar('sidebar-footer'))
    <p class="mt-4">&copy; {{ date('Y') }} {{ get_bloginfo('name') }}</p>
  </div>
</footer>
