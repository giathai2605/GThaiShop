<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.tailadmin.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 17:33:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
     Dashboard
    </title>
    <link rel="icon" href="favicon.ico">
  @include('admin.layout.style')
</head>
<body
    x-data="{ page: 'analytics', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
  >

@include('admin.layout.sidebar')
@include('admin.layout.header')


@yield('content')
@include('admin.layout.script')
</body>

<!-- Mirrored from demo.tailadmin.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 17:34:31 GMT -->
</html>
