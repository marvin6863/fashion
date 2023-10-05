<!DOCTYPE html>
<html lang="en">

@include('layouts.top')

<body>

    <!-- Pre Header -->
    <div id="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Suspendisse laoreet magna vel diam lobortis imperdiet</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    @include('layouts.header')

    <!-- Page Content -->
    @yield('content')

    @include('layouts.footer')

    @include('layouts.bottom')


</body>

</html>
