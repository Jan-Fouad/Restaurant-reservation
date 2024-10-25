<!doctype html>
<html lang="en">

@include('admin.partials.head')

{{-- <body class="vertical  light  @if (LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif"> --}}
<body class="vertical light">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                @include('admin.partials.sidebar') <!-- الشريط الجانبي على اليسار -->

                <div class="col-md-9 ms-sm-auto col-lg-10 px-4"> <!-- عمود المحتوى الرئيسي -->
                    @include('admin.partials.navbar') <!-- شريط التنقل -->
                    
                    <main role="main" class="main-content">
                        @yield('content')
                    </main> <!-- main -->
                </div> <!-- .col-md-9 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </div> <!-- .wrapper -->

    @include('admin.partials.script')
    <script>
        // function confirmDelete(id) {
        //     if (confirm('Are you sure you want to delete this record ?')) {
        //         document.getElementById('deleteForm-' + id).submit();
        //     }
        // }
    </script>

</body>

</html>
