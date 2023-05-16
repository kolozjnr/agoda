
<nav class="mobile-bottom-nav">
    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
        <a href="{{route('dashboard')}}" class="menus">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-house-door-fill"></i>
                Home
            </div>		
        </a>
    </div>
    <div class="mobile-bottom-nav__item">
        <a href="{{route('level')}}" class="menus">		
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-water"></i>
                Level
            </div>
        </a>
    </div>
    <div class="mobile-bottom-nav__item">
        <a href="{{route('task')}}" class="menus">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-building-fill-check"></i>
                Task
            </div>
        </a>		
    </div>
    
    <div class="mobile-bottom-nav__item">
        <a href="{{route('event')}}" class="menus">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-calendar-event-fill"></i>
                Event
            </div>
        </a>		
    </div>

    <div class="mobile-bottom-nav__item">
        <a href="{{route('wallet')}}" class="menus">
            <div class="mobile-bottom-nav__item-content">
                <i class="bi bi-currency-bitcoin"></i>
                Crypto
            </div>
        </a>		
    </div>

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