<section class="container">
    <style>
                
        .main {
            display: inline-block;
            margin: 30px;
            right: 50px;
            position: absolute;
            width: 150px;
            text-align: left;
            z-index: 2 !important;
        }
        .list {
            width: 100%;
            position: absolute;
            z-index: 1;
            top: 15px;
            right: -90px;
            border-top: 1px solid #eee;
            visibility: hidden;
            z-index: 99999;
            opacity: 0;
            cursor: pointer;
            -webkit-transition: 0.2s ease-in-out;
            transition: 0.2s ease-in-out;
        }
        .item {
            width: 100%;
            line-height: 45px;
            padding-left: 20px;
            background-color: #fff;
            color: #000;
            -webkit-transition: 0.2s ease-in-out;
            transition: 0.2s ease-in-out;
            font-weight: 400;
        }
        .item:hover {
            background-color: #eee;
        }
        
        /**********
        ***********/
        
        .list-5 {
            -webkit-transform: translateX(-20px);
            transform: translateX(-20px);
            z-index: 99999;
        }
        #drop-5:checked~ .list-5 {
            visibility: visible;
            opacity: 2;
        }
        #drop-5:checked~ .list-5 {
            -webkit-transform: translateX(0px);
            transform: translateX(0px);
        }
        .logoimg{
            margin-left: 10px;
        }
        </style>
        <script>
           function popmenu(){
            document.getElementById("setgear").click();
           }
        </script>
        <div class="container" style="padding-top: 50px;">
            <div class="logo" style="margin-bottom: 100px; position: absolute; z-index: 9">
                <span class="logoimgs">
                    <img src="{{asset('assets/img/billsign.JPG')}}" style="border-radius:10px; margin:3px" class="logoimg" width="70" height="100" alt="Billsign">
                </span>
            
                <span class="settings">
                    <i style="color:#FFF" onclick="popmenu()" id="gear" class="bi bi-gear"></i>
                    {{-- <i class="bi bi-chat-left-dots"></i> --}}
                </span>
                <div class="main">
                    <input type="checkbox" id="drop-5" hidden>
                    <label style="display: none;" id="setgear" class="dropHeader dropHeader-5" for="drop-5">Click Me</label>
                    <div class="list list-5">
                    <div class="item"><a href="{{route('account')}}">Account Settings</a></div>
                    <div class="item"><a href="{{route('support')}}">Support</a></div>
                    <div class="item"><a href="{{route('getSecurity')}}">Security</a></div>
                    
                    <div class="item" style="margin-left: 2px">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
