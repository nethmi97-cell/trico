<aside class="col-md-3">
    <nav class="list-group">
        <a class="list-group-item {{ shortHandIfOptional(Request::segment(2), 'overview', 'active', '') }}" href="{{ route('client.account.index') }}"> Account overview </a>
        {{-- <a class="list-group-item {{ shortHandIfOptional(Request::segment(2), 'address', 'active', '') }}" href="{{ route('account.address') }}"> My Address </a>
        <a class="list-group-item {{ shortHandIfOptional(Request::segment(2), 'order', 'active', '') }}" href="{{ route('account.order') }}"> My Orders </a>
        <a class="list-group-item {{ shortHandIfOptional(Request::segment(2), 'setting', 'active', '') }}" href="{{ route('account.setting') }}"> Settings </a> --}}
        <a class="list-group-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Log out </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </nav>
</aside>
