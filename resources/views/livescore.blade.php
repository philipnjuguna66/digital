<x-guest-layout>
@section('title','footbool livescore ')
    @push('styles')
    <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/widgetCountries.css') }}">
        <script src="{{ asset('js/jquery.js') }}" ></script>
        <script src="{{ asset('js/jqueryGlobals.js') }}" ></script>
        <script src="{{ asset('js/jquery.widgetCountries.js') }}"  type="text/javascript"></script>

    @endpush
    <div class="headerMenuDisplay">
        <div class="container container-with-errors">
            <section id="widgetCountries"></section>
            <section id="widgetLeague"></section>
            <section id="widgetLiveScore"></section>
        </div>
    </div>


    @push('scripts')

        <script type="text/javascript">

            $(document).ready(function() {
                $('#widgetCountries').widgetCountries({
                    widgetLeagueLocation: '#widgetLeague',
                    widgetLiveScoreLocation: '#widgetLiveScore',
                    widgetWidth: '19%',
                    preferentialLeagues: ['8', '590', '589', '588', '468', '343', '262', '195', '176', '148']
                });

                var windowWidthSize = $(window).width();

                if (windowWidthSize < 769) {
                    $('.logo-img-size-index').hide();
                    $('.switchButton').css('margin', '0 auto');
                    $('.mainPageHeader').css('margin', '0');
                    $('.mainPageHeader').hide();
                }
                $('.switchButton').click(function() {
                    if ($('.widgetLeague').length) {
                        $('.widgetLiveScore').toggle();
                        $('.callendar-select-for-mobile').toggle();
                        $('.widgetLeague').toggle();
                        if ($('.widgetLeague').is(":visible")) {
                            $('.switchButton').html('Back to Live Score');
                        } else {
                            $('.switchButton').html('Back to League Details');
                        }
                    }
                });

            });

        </script>

    @endpush

</x-guest-layout>

