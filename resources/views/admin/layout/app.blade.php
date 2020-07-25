<!DOCTYPE html>
<html>
@include('admin.partial._header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('admin.partial._navbar')
    @include('admin.partial._sidebar')
    @yield('content')
    @include('admin.partial._footer')
</div>
<!-- ./wrapper -->
@include('admin.partial._script')
<!-- REQUIRED SCRIPTS -->
</body>
</html>
