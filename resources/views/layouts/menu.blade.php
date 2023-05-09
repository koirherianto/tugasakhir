<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('mindmaps.index') }}" class="nav-link {{ Request::is('mindmaps*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Mindmaps</p>
    </a>
</li>
