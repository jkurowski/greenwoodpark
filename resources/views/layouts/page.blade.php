<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {!! settings()->get('scripts_head') !!}

    <title>
        @hasSection('seo_title')
            @yield('seo_title')@else{{ settings()->get('page_title') }} - @yield('meta_title')
        @endif
    </title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="@hasSection('seo_description')
@yield('seo_description')@else{{ settings()->get('page_description') }}
@endif">
    <meta name="robots"
        content="@hasSection('seo_robots')
@yield('seo_robots')@else{{ settings()->get('page_robots') }}
@endif">
    <meta name="author" content="{{ settings()->get('page_author') }}">

    @hasSection('opengraph')
        @yield('opengraph')
    @endif
    @hasSection('schema')
        @yield('schema')
    @endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Prefetching --}}
    <link rel="DNS-prefetch" href="//fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Styles -->
    <link href="{{ asset('/css/styles.min.css') }}?v05112025b" rel="stylesheet">

    <link rel='preload' as='style' href="{{ asset('/css/styles.min.css') }}">
    @stack('style')
</head>

<body class="{{ !empty($body_class) ? $body_class : '' }}" data-lazy-background="{{ asset('images/kreski-tlo.png') }}"
    style="background-position: center -16rem, center 1900px; background-repeat: no-repeat;">
    {!! settings()->get('scripts_afterbody') !!}

    <div id="pagecontent">
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')
    </div>

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/slick.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/bundle.min.js') }}" charset="utf-8"></script>

    @stack('scripts')

    @if (settings()->get('popup_exit_status') == 1)
        <div class="modal" tabindex="-1" id="popModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {!! settings()->get('popup_exit_text') !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <script type="text/javascript">
        $(document).ready(function() {
            @if (settings()->get('popup_exit_status') == 1)
                $(document).mousemove(function(e) {
                    if (e.pageY <= 5) {
                        const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
                            keyboard: false
                        });
                        const trueFalse = ($('body').hasClass('modal-open'));
                        if (trueFalse === false) {
                            popModal.show();
                            setTimeout(function() {
                                popModal.hide();
                            }, 6000);
                        }
                    }
                });
            @endif
        });
    </script>
    {!! settings()->get('scripts_beforebody') !!}
</body>

</html>
