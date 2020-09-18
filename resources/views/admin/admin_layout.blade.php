@include('admin.partials.header')

@guest

@yield('admin_content')
            
@else

@include('admin.partials.navbar')
@include('admin.partials.sidebar')
@yield('admin_content')


@endguest

</div>

@include('admin.partials.footer')
