<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Account') }}
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

                /* Accordion */
                @charset "UTF-8";
                body {
                color: #2c3e50;
                background: #ecf0f1;
                padding: 0 1em 1em;
                }

                h1 {
                margin: 0;
                line-height: 2;
                text-align: center;
                }

                h2 {
                margin: 0 0 0.5em;
                font-weight: normal;
                }

                input {
                position: absolute;
                opacity: 0;
                z-index: -1;
                }

                .row {
                display: flex;
                }
                .row .col {
                flex: 1;
                }
                .row .col:last-child {
                margin-left: 1em;
                }

                /* Accordion styles */
                .tabs {
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 4px 4px -2px rgba(0, 0, 0, 0.5);
                }

                .tab {
                width: 100%;
                color: white;
                overflow: hidden;
                background-color: inherit !important;
                }
                .tab-label {
                display: flex;
                justify-content: space-between;
                padding: 1em;
                background: #2c3e50;
                font-weight: bold;
                cursor: pointer;
                /* Icon */
                }
                .tab-label:hover {
                background: #1a252f;
                }
                .tab-label::after {
                content: "❯";
                width: 1em;
                height: 1em;
                text-align: center;
                transition: all 0.35s;
                }
                .tab-content {
                max-height: 0;
                padding: 0 1em;
                color: #2c3e50;
                background: white;
                transition: all 0.35s;
                }
                .tab-close {
                display: flex;
                justify-content: flex-end;
                padding: 1em;
                font-size: 0.75em;
                background: #2c3e50;
                cursor: pointer;
                }
                .tab-close:hover {
                background: #1a252f;
                }

                input:checked + .tab-label {
                background: #1a252f;
                }
                input:checked + .tab-label::after {
                transform: rotate(90deg);
                }
                input:checked ~ .tab-content {
                max-height: 100vh;
                padding: 1em;
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
            <div class="card" style="height: auto;">
                    <h3 class="card-title">Event</h3>
                    <div class="row">
                    <div class="col">
                        <h2>Open <b>multiple</b></h2>
                        <div class="tabs">
                        <div class="tab">
                            <input type="checkbox" id="chck1">
                            <label class="tab-label" for="chck1">Event 1</label>
                            <div class="tab-content">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="chck2">
                            <label class="tab-label" for="chck2">Event 2</label>
                            <div class="tab-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A, in!
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <h2>Open <b>one</b></h2>
                        <div class="tabs">
                        <div class="tab">
                            <input type="radio" id="rd1" name="rd">
                            <label class="tab-label" for="rd1">Item 1</label>
                            <div class="tab-content">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, facilis.
                            </div>
                        </div>
                        <div class="tab">
                            <input type="radio" id="rd2" name="rd">
                            <label class="tab-label" for="rd2">Item 2</label>
                            <div class="tab-content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, aut.
                            </div>
                        </div>
                        <div class="tab">
                            <input type="radio" id="rd3" name="rd">
                            <label for="rd3" class="tab-close">Close others &times;</label>
                        </div>
                        </div>
                    </div> -->
                    </div>
                                        
                    <!-- <a href="https://ui.glass">Read more</a> -->
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