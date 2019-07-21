<!DOCTYPE html>

  @include('includes.head')

    <body>

      @include('includes.navbar')

      <div id="main">
        <div class="container my-3 py-3">

         @yield('title')

         <div class="my-4 mx-2 list-group">

           @yield('cards')

        </div>
      </div>

      @include('includes.footer')
    </body>

</html>
