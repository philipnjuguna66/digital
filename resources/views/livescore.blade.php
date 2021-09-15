<x-guest-layout>
@section('title','footbool livescore ')
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#widgetCountries').widgetCountries({
                    widgetLeagueLocation: '#widgetLeague',
                    widgetLiveScoreLocation: '#widgetLiveScore'
                    widgetWidth: '19%',
                    preferentialLeagues: ['8634', '590']
                });
            });
        </script>
    @endpush

</x-guest-layout>

