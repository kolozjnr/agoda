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

                /* select css */
                HTML CSSResult Skip Results Iframe
                EDIT ON
                /* class applies to select element itself, not a wrapper element */
                .select-css {
                display: block;
                font-size: 16px;
                font-family: sans-serif;
                font-weight: 700;
                color: #444;
                line-height: 1.3;
                padding: .6em 1.4em .5em .8em;
                width: 200px;
                max-width: 100%; /* useful when width is set to anything other than 100% */
                box-sizing: border-box;
                margin: 0;
                border: 1px solid #aaa;
                box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
                border-radius: .5em;
                -moz-appearance: none;
                -webkit-appearance: none;
                appearance: none;
                background-color: #fff;
                /* note: bg image below uses 2 urls. The first is an svg data uri for the arrow icon, and the second is the gradient. 
                    for the icon, if you want to change the color, be sure to use `%23` instead of `#`, since it's a url. You can also swap in a different svg icon or an external image reference
                    
                */
                background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
                    linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
                background-repeat: no-repeat, repeat;
                /* arrow icon position (1em from the right, 50% vertical) , then gradient position*/
                background-position: right .7em top 50%, 0 0;
                /* icon size, then gradient */
                background-size: .65em auto, 100%;
                }
                /* Hide arrow icon in IE browsers */
                .select-css::-ms-expand {
                display: none;
                }
                /* Hover style */
                .select-css:hover {
                border-color: #888;
                }
                /* Focus style */
                .select-css:focus {
                border-color: #aaa;
                /* It'd be nice to use -webkit-focus-ring-color here but it doesn't work on box-shadow */
                box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
                box-shadow: 0 0 0 3px -moz-mac-focusring;
                color: #222; 
                outline: none;
                }

                /* Set options to normal weight */
                .select-css option {
                font-weight:normal;
                }

                /* Support for rtl text, explicit support for Arabic and Hebrew */
                *[dir="rtl"] .select-css, :root:lang(ar) .select-css, :root:lang(iw) .select-css {
                background-position: left .7em top 50%, 0 0;
                padding: .6em .8em .5em 1.4em;
                }

                /* Disabled styles */
                .select-css:disabled, .select-css[aria-disabled=true] {
                color: graytext;
                background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22graytext%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
                    linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
                }

                .select-css:disabled:hover, .select-css[aria-disabled=true] {
                border-color: #aaa;
                }

                
                </style>
                <script>
                   function popmenu(){
                    document.getElementById("setgear").click();
                   }
                </script>
                <div class="logo">
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
                </div>
            <!-- <div class="withdrawal__card" style="text-align: center;">
                        <button class="withdrawal__btnn">Bind Account</button>
                    </div> -->
            <div class="warpper" id="card2_wallet">
            <input class="radio" id="one" name="group" type="radio" checked>
                <input class="radio" id="two" name="group" type="radio">
                <input class="radio" id="three" name="group" type="radio">
                <div class="tabs" >
                    <label class="tab" id="one-tab" for="one">Bank Card</label>
                    <label class="tab" id="two-tab" for="two">Crypto</label>
                    <!-- <label class="tab" id="three-tab" for="three">Prerequisites</label> -->
                </div>
                <div class="panels1" style="">
                <div class="panel" id="one-panel" style="">
                    <div class="withdrawal__card">
                        <button class="withdrawal__btnn">Bind Account</button>
                    </div>
                    <form action="" id="bank-bind">
                        <h2 style="font-family: sans-serif; font-weight:900; font-size:2rem">Skrill</h2>
                        <div class="form__group" style="width:350px !important">
                            <div class="" style="flex-direction:row; display:block; margin-bottom:5px; margin: 10px;">
                                <label for="payee Name">Payee Name:</label>
                                <input type="text" name="" id="" class="form__contro">
                            </div>
                            
                            <div class="" style="flex-direction:row; display:block;  margin-bottom:5px; margin: 10px;">
                                <label for="payee Name">Account No:</label>
                                <input type="text" name="" id="" class="form__contro">
                            </div>
                            
                            <div class="" style="flex-direction:row; display:block;  margin-bottom:5px; margin: 10px;">
                                <label for="payee Name">Sort Code:</label>
                                <input type="text" name="" id="" class="form__contro">
                            </div>

                             <div class="" style="flex-direction:row; display:block;  margin-bottom:5px; margin: 10px;">
                                <label for="payee Name">Phone Number:</label>
                                <input type="text" name="" id="" class="form__contro">
                            </div>

                            <span>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis fugit tenetur corrupti quo, accusamus iure corporis voluptatibus impedit minima.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis fugit tenetur corrupti quo, accusamus iure corporis voluptatibus impedit minima.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis fugit tenetur corrupti quo, accusamus iure corporis voluptatibus impedit minima.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis fugit tenetur corrupti quo, accusamus iure corporis voluptatibus impedit minima.</li>
                                </ul>
                            </span>

                            <div class="submit__btn">
                                <button class="withdrawal__btnn">Bind Account</button>
                            </div>

                            
                        </div>
                       
                    </form>
                </div>
                <div class="panel" id="two-panel">
                    <div class="withdrawal__card">
                        <button class="withdrawal__btnn">Bind Wallet</button>
                    </div>
                    <form action="" id="bank-bind">
                        <h2 style="font-family: sans-serif; font-weight:900; font-size:1.5rem">Crypto Wallet</h2>
                        <div class="form__group" style="width:350px !important">
                            <div class="" style=" margin-bottom:30px;">
                                <!-- <label for="payee Name">Payee Name:</label> -->
                                <select name="" id="" class="select-css" style="width: 230px;">
                                    <option value="" selected disabled>Select Coin Type</option>
                                    <option value="btc">BTC</option>
                                    <option value="eth">ETH</option>
                                    <option value="usdt">USDT</option>
                                </select>
                            </div>
                            
                            <div class="" style=" margin-bottom:30px;">
                                <!-- <label for="payee Name">Account No:</label> -->
                                <select name="" id="" class="select-css" style="width: 230px;">
                                    <option value="" selected disabled>Select Network Type</option>
                                    <option value="erc20">ERC-20</option>
                                    <option value="beb20">BEP-20</option>
                                    <option value="trc20">TRC-20</option>
                                </select>
                            </div>
                            
                            <div class="" style="flex-direction:row; display:block;  margin-bottom:30px;">
                                <label for="payee Name">Wallet Address:</label>
                                <input type="text" name="" id="" class="form__contro">
                            </div>

                             

                            <div class="submit__btn">
                                <button style="margin: auto;" class="withdrawal__btnn">Bind Wallet</button>
                            </div>

                            
                        </div>
                       
                    </form>
                    <!-- <div class="panel-title">Take-Away Skills</div>
                    <p>You will learn many aspects of styling web pages! You’ll be able to set up the correct file structure, edit text and colors, and create attractive layouts. With these skills, you’ll be able to customize the appearance of your web pages to suit your every need!</p> -->
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