@guest
    <div class="float-right">
        <a class="btn-secondary btn-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
        @if (Route::has('register'))

            <a class="btn-secondary btn-sm" href="{{ route('register') }}">{{ __('Register') }}</a>

        @endif
    </div>
    <div class="clearfix"></div>
@endif
