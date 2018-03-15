<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body class="fix-header">
@include('layouts.preloader')

<div id="wrapper">
    @include('layouts.topmenu')
    @include('layouts.sidebar')
    <div id="page-wrapper">
        <div class="container-fluid">

          @yield('content')


        </div>
       @include('layouts.footer')
    </div>
</div>
@include('layouts.scripts')
</body>

</html>
