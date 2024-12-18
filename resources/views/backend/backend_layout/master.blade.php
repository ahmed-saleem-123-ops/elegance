@include('backend.backend_layout.header')
@include('backend.backend_layout.sidebar')
@include('backend.backend_layout.navbar')


@yield('content')

@include('backend.backend_layout.script', ['brands' => isset($brands) ? $brands : [], 'categories' => isset($categories) ? $categories : []])
