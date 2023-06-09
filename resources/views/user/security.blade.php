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
            <!-- <div class="withdrawal__card" style="text-align: center;">
                        <button class="withdrawal__btnn">Bind Account</button>
                    </div> -->
            <div class="warpper">

                <div class="card" style="max-width: 320px; min-width:280px; height:auto; margin:10px">
                {{-- <input class="radio" id="one" name="group" type="radio" checked> --}}
                <input class="radio" id="two" name="group" style="display: none" type="radio" checked>
                <input class="radio" id="three" name="group" style="display: none" type="radio">
                <div class="tabs" style="">
                    {{-- <label class="tab" style="width:150px; font-size:0.9rem; padding:5px" id="one-tab" for="one">Change Paasword</label> --}}
                    <label class="tab" style="width:150px; font-size:0.9rem; padding:5px" id="two-tab" for="two">Set Withdrawal Pin</label>
                    <!-- <label class="tab" id="three-tab" for="three">Prerequisites</label> -->
                </div>
                <div class="panels1" style="margin-bottom:20px">
                {{-- <div class="panel" id="one-panel" >
                    <div class="withdrawal__card" style="margin-bottom: 20px;">
                        <button class="withdrawal__btnn">Change Password</button>
                    </div>
                    
                    <form action="" id="bank-bind">
                        <div class=" accounts" style="">
                            <div class="" style="flex-direction:row; display:flex; margin-bottom:30px; right:0">
                                <label  style="" for="payee Name">Current Password:</label>
                                <input type="password" name="" id="" class="form__contro" value="">
                            </div>
                            <hr>
                            
                            <div class="" style="flex-direction:row; display:flex;  margin-bottom:30px;">
                                <label  style="" for="payee Name">New Password:</label>
                                <input type="password" name="" id="" class="form__contro">
                            </div>
                            <hr>
                            <div class="" style="flex-direction:row; display:flex;  margin-bottom:30px;">
                                <label  style="" for="payee Name">Confirm New Password</label>
                                <input type="password" name="" id="" class="form__contro">
                            </div>
                            <hr>
                            <div class="login__btn">
                            <!-- HTML !-->
                                <button class="button-31" role="button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div> --}}
                <div class="panel" id="two-panel">
                    <div class="withdrawal__card" style="margin-bottom: 20px;">
                        <button class="withdrawal__btnn">Set Withdrawal Pin</button>
                    </div>
                    <form action="{{route('postSecurity', auth()->user()->id)}}" method="post" id="bank-bind" >
                        @csrf
                        <div class=" accounts" style="">
                            <div class="" style=" display:flex; flex-direction:column; margin-bottom:30px;">
                                {{-- <label  style="" for="payee Name" style="margin-left:3px">New Pin:</label> --}}
                                <input type="password" name="pin" id="" placeholder="4 digits Pin" max="4"  class="form__contro" value="" required>
                            </div>
                            <hr>
                            
                            <div class="" style=" display:inline-block; margin-bottom:30px;">
                                {{-- <label  style="" for="payee Name">Confirm Pin:</label> --}}
                                <input type="password" name="confirm_pin" placeholder="Comfirm Pin" id="" style="" class="form__contro" style="border-radius:6px" required>
                            </div>
<hr>
                            <div class="" style=" display:inline-block; margin-bottom:30px;">
                                {{-- <label  style="" for="payee Name">Confirm Pin:</label> --}}
                                <input type="password" name="password" placeholder="Password" id="" style="" class="form__contro" style="border-radius:6px" required>
                            </div>

                            
                            <div class="login__btn">
                            <!-- HTML !-->
                                <button class="button-31" role="button">Confirm</button>
                            </div>

                        </div>
                       
                    </form>
                    <!-- <div class="panel-title">Take-Away Skills</div>
                    <p>You will learn many aspects of styling web pages! You’ll be able to set up the correct file structure, edit text and colors, and create attractive layouts. With these skills, you’ll be able to customize the appearance of your web pages to suit your every need!</p> -->
                </div>
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
        </style>
</x-app-layout>