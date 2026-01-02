<footer class="bg-black border-t border-gray-800 mt-auto">
  <div class="container mx-auto px-4 py-8 text-center text-gray-400 text-sm">
    @php(dynamic_sidebar('sidebar-footer'))
    <p class="mt-4">&copy; {{ date('Y') }} {{ get_bloginfo('name') }}</p>
  </div>
</footer>
