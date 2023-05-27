<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <section class="container">
            <style>
                        
                .main {
                    display: inline-block;
                    margin: 30px;
                    position: fixed;
                    width: 150px;
                    text-align: left;
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
                
                </style>
                <script>
                   function popmenu(){
                    document.getElementById("setgear").click();
                   }
                </script>
                {{-- <div class="logo">
                    <img src="assets/img/1676378715490.png" width="150" height="60" alt="Expedia">
                    <span class="settings">
                        <i style="color:#FFF" onclick="popmenu()" id="gear" class="bi bi-gear"></i>
                        <i class="bi bi-chat-left-dots"></i>
                    </span>
                    <div class="main" style="z-index: 9999;">
                        <input type="checkbox" id="drop-5" hidden>
                        <label style="display: none;" id="setgear" class="dropHeader dropHeader-5" for="drop-5">Click Me</label>
                        <div class="list list-5">
                        <div class="item"><a href="account.html">Account Settings</a></div>
                        <div class="item"><a href="support.html">Support</a></div>
                        <div class="item"><a href="security.html">Security</a></div>
                        <div class="item"><a href="">Log Out</a></div>
                        </div>
                    </div>
                </div> --}}

            <div class="warpper">
                <!-- <img class="shape" src="https://s3.us-east-2.amazonaws.com/ui.glass/shape.svg" alt=""> -->
                <div class="card">
                    <div class="trial__bal"><p>Referal Bonus $ @if($ref_bonus == 0) {{'0'}} @else {{$ref_bonus}} @endif</p></div>
                    <div class="balance">
                    <h3 class="card-title">Available Balance</h3>
                    <span>$ {{$bal}}</span>
                    </div>
                    <div class="no__of__task">
                        <span class="total__task">
                            <p style=" font-weight:800">Tasks</p>
                            <span>38</span> 
                            {{-- @if($totalTask = 0)
                            <span>38</span> 
                            @elseif($totalTask = 1)
                            <span>80</span> 
                            @elseif($totalTask = 2)
                            <span>170</span> 
                            @elseif($totalTask = 3)
                            <span>200</span> 
                            @elseif($totalTask = 4)
                            <span>500</span> 
                            @endif --}}
                        </span>
                        <span class="total__task">
                            <p style=" font-weight:800">Total Earning</p>
                            <span>$ {{$bal+$ref_bonus}}</span>
                        </span>
                        <span class="total__task">
                            <p style=" font-weight:800">Processing</p>
                            <span>0.000</span>
                        </span>
                    </div>
                    <!-- <a href="https://ui.glass">Read more</a> -->
                </div>


            
              
               <!-- <div class="balance">
                <p>Balance</p>
                
            </div> -->
            <!-- Use a button to open the snackbar -->
            <button style="display:none" id="snackk" onclick="myFunction()">Show Snackbar</button>

            <!-- The actual snackbar -->
            <div id="snackbar">Coming Soon...</div>

            <div class="wallet__items" style="display: flex;">
                <div class="button__group">
                    <button class="wallet__btn"><a href="{{route('topup')}}"> Top-up</a> </button>
                    <button class="wallet__btn"> <a href="{{route('wallet')}}">Withdraw </a></button>
                    <button id="rr" onclick="getrr()" class="wallet__btn">R & R</button>
                    <button id="record" onclick="details()" class="wallet__btn">Record</button>
                    <button id="rr" onclick="getrr()" class="wallet__btn">R & R</button>
                    {{-- <button id="details" onclick="details()" getWithdrawal class="wallet__btn">Details</button> --}}
                    <button id="details" class="wallet__btn"> <a href="{{route('getWithdrawal')}}">Details</a></button>
                </div>
                <div class="shap__house" style="margin-top:50px; position:relative">
                    <a href="{{route('order.index')}}">
                        <img class="shape" src="https://s3.us-east-2.amazonaws.com/ui.glass/shape.svg" alt="start">
                        <div class="start" style="z-index: 2; padding-top:30px">Start</div>
                    </a>
                </div>
                
            </div>
            </div>

        </section>
        <style>
            .menus{
                color: #fff;
                font-size: 0.9rem;
                text-decoration: none;font-family: sans-serif;
            }
            .start{
                position: absolute;
                top: 20%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 1;
                color: white;
                font-size: 24px;
                font-weight: bold;
                text-align: center;
            }
        </style>
</x-app-layout>