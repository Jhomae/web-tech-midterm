

<li class="nav-item">
    <a href="{{ route('riceInfoInPhils.index') }}"
       class="nav-link {{ Request::is('riceInfoInPhils*') ? 'active' : '' }}">
        <p>Rice Info In Phils</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


