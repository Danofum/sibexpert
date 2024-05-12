<form action="{{ $action }}" method="{{ $method !== 'GET' ? 'POST' : $method }}">
    @if($method !== 'GET')
        @csrf
        @method($method)
    @endif

    {{ $slot }}
</form>
