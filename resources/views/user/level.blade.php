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
                <div class="logo">
                    <span class="logoimgs">
                        <img src="assets/img/1676378715490.png" class="logoimg" width="150" height="60" alt="Expedia">
                    </span>
                   
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

            <div class="warpper">
                <input class="radio" id="one" name="group" type="radio" checked>
                <input class="radio" id="two" name="group" type="radio">
                <input class="radio" id="three" name="group" type="radio">
                <div class="tabs">
                    <label class="tab" id="one-tab" for="one">Current</label>
                    <label class="tab" id="two-tab" for="two">Level Description</label>
                    <!-- <label class="tab" id="three-tab" for="three">Prerequisites</label> -->
                </div>
                <div class="panels">
                <div class="panel" id="one-panel">
                    <div class="panel-title">Why Learn CSS?</div>
                    <p>Without CSS, every web page would be drab plain text and images that flowed straight down the page. With CSS, you can add color and background images and change the layout of your page — your web pages can feel like works of art!</p>
                </div>
                <div class="panel" id="two-panel">
                    <div class="level" style="display: flex;">
                    <div class="vip0">
                        <div style="padding: 0;" class="contents">
                            <strong style="top:20px">VIP 0</strong>
                            <h5>$0-99</h5>
                            <img src="assets/img/qaww.PNG" width="50" height="50" alt="level">
                            <p style="padding: 0; font-size:0.7rem">The Commission rate is 0.65%</p>
                            <p>Daily task is:38</p>
                        </div>
                    </div>

                    <div class="vip0">
                        <div style="padding: 0;" class="contents">
                            <strong style="top:20px">VIP 1</strong>
                            <h5>$0-99</h5>
                            <img src="assets/img/qaww.PNG" width="50" height="50" alt="level">
                            <p style="padding: 0; font-size:0.7rem">The Commission rate is 0.65%</p>
                            <p>Daily task is:38</p>
                        </div>
                    </div>
                    </div>
                    <div class="level" style="display: flex;">
                    <div class="vip0">
                        <div style="padding: 0;" class="contents">
                            <strong style="top:20px">VIP 2</strong>
                            <h5>$0-99</h5>
                            <img src="assets/img/qaww.PNG" width="50" height="50" alt="level">
                            <p style="padding: 0; font-size:0.7rem">The Commission rate is 0.65%</p>
                            <p>Daily task is:38</p>
                        </div>
                    </div>

                    <div class="vip0">
                        <div style="padding: 0;" class="contents">
                            <strong style="top:20px">VIP 3</strong>
                            <h5>$0-99</h5>
                            <img src="assets/img/qaww.PNG" width="50" height="50" alt="level">
                            <p style="padding: 0; font-size:0.7rem">The Commission rate is 0.65%</p>
                            <p>Daily task is:38</p>
                        </div>
                    </div>
                    </div>
                    
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