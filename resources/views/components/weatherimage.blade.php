@switch($main)
    @case('Clouds')
        <img alt="logo" width="50px" height="50px" src="{{ URL::asset('/img/weather/Clouds.png') }}">
        @break
    @case('Clear')
        <img alt="logo" width="50px" height="50px" src="{{ URL::asset('/img/weather/Clouds.png') }}">
        @break
    @default
        <img alt="logo" width="50px" height="50px" src="{{ URL::asset('/img/weather/Clouds.png') }}">
@endswitch

