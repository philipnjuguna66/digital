<x-guest-layout>
@section('title','footbool livescore ')

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
</x-guest-layout>
