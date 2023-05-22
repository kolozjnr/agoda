
<nav class="mobile-bottom-nav" style="position: fixed">
    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
        <a href="{{route('dashboard')}}" class="menus {{ (request()->is('dashboard*')) ? 'active' : ''}}">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-house-door-fill"></i>
                Home
            </div>		
        </a>
    </div>
    <div class="mobile-bottom-nav__item">
        <a href="{{route('level')}}" class="menus {{ (request()->is('level*')) ? 'active' : ''}}">		
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-water"></i>
                Level
            </div>
        </a>
    </div>
    <div class="mobile-bottom-nav__item">
        <a href="{{route('task')}}" class="menus {{ (request()->is('task*')) ? 'active' : ''}}">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-building-fill-check"></i>
                Task
            </div>
        </a>		
    </div>
    
    <div class="mobile-bottom-nav__item">
        <a href="{{route('event')}}" class="menus {{ (request()->is('event*')) ? 'active' : ''}}">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-calendar-event-fill"></i>
                Event
            </div>
        </a>		
    </div>
    <div class="mobile-bottom-nav__item">
        <a href="{{route('wallet')}}" class="menus {{ (request()->is('wallet*')) ? 'active' : ''}}">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-currency-bitcoin"></i>
                Crypto
            </div>
        </a>		
    </div>
   @if(Auth::user()->hasRole('administrator'))
    <div class="mobile-bottom-nav__item">
        <a href="{{url('user')}}" class="menus {{ (request()->is('user*')) ? 'active' : ''}}">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-currency-bitcoin"></i>
                Users
            </div>
        </a>		
    </div>

    <div class="mobile-bottom-nav__item">
        <a href="{{route('order.create')}}" class="menus {{ (request()->is('order*')) ? 'active' : ''}}">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-list-task"></i>
                Create Task
            </div>
        </a>		
    </div>
@endif

    {{-- <div class="mobile-bottom-nav__item">
        <a href="welfare.html" class="menus">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-hospital-fill"></i>
                Welfare
            </div>	
        </a>	
    </div> --}}

    <div class="mobile-bottom-nav__item">
        <a href="{{route('support')}}" class="menus">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-headset"></i>
                Support
            </div>	
        </a>	
    </div>
</nav>