<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.layout.partials.head')
</head>
<body>
	<section id="container" class="">
    
        @include('admin.layout.partials.header')

        @include('admin.layout.partials.sidebar')
        <div class="main">
            @yield('content')
        </div>
        @include('admin.layout.partials.footer')
        
	</section>
    @include('admin.layout.partials.javascript')
</body>
</html>