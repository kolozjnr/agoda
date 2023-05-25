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







                /* [SLIDER] */
                        #slider,  #slider .slide{
                        width: 320px;
                        /* height: 250px; */
                        }
                        #slider {
                        overflow: hidden;
                        margin: 0 auto;
                        font-size: 1.2em;
                        /* background: #ffd7d1; */
                        }
                        #slider .container {
                        position: relative;
                        width: 9000px; /* Assign an insanely large width */
                        top: 0;
                        right: 0;
                        animation: slide-animation 25s infinite;
                        }
                        #slider .slide {
                        position: relative;
                        float: left;
                        box-sizing: border-box;
                        padding: 10px 20px;
                        }

                        /* [ANIMATION] */
                        @keyframes slide-animation {
                        0% { 
                            opacity: 0;
                            right: 0;
                        }
                        11% {
                            opacity: 1;
                            right: 0; 
                        }
                        22% { right: 100%; }
                        33% { right: 100%; }
                        44% { right: 200%; }
                        55% { right: 200%; }
                        66% { right: 300%; }
                        77% { right: 300%; }
                        88% {
                            opacity: 1;
                            right: 400%; 
                        }
                        100% {
                            opacity: 0;
                            right: 400%;
                        }
                        }

                        /* [DOES NOT MATTER] */

                        h1 {
                        text-align: center;
                        }
                        .evnts-head{

                        }
                        .evnts{
                            padding: 10px;
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

            <div class="warpper" style="position: fixed;">
            <div class="card" style="height: auto; background-color:#ecf0f1">
                    <h3 class="card-title">Event</h3>

                      <div id="slider">
                        <div class="container">
                          <div class="slide">
                            <h4 style="font-family: sans-serif; font-weight:900; font-size:1rem; color:#631313; padding-bottom:10px;">ACCUMULATE TOP-UP REWARD</h4>
                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                $60 or £60 rebate for a cumulative $3,000
                                or £3,000 recharge
                            </p>
                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                $160 or £160 rebate for a cumulative $8.000
                                or £8,000 recharge
                            </p>
                                

                                <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                    $300 or £300 rebate for a cumulative $15,000
                                    or £15,000 recharge
                                </p>
                               
                                
                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                $1000 or £1000 rebate for a cumulative $50,000
                                or £50,000 recharge
                            </p>
                               

                                
                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                $1600 or £1600 rebate for a cumulative $80,000
                                or £80,000 recharge
                            </p>
                               
                                
                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                $2400 or £2400 rebate for a cumulative $120,000
                                or £120,000 recharge
                            </p>
                              
                                
                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                Notes: Each member can only redeem the
                                rewards once on the same day.
                            </p>
                               
                           
                          </div>
                          <div class="slide">
                            <h4 class="evnts-head" style="font-family: sans-serif; font-weight:900; font-size:1rem; color:#631313; padding-bottom:10px;">RESET EVALUATION REWARD</h4>
                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                First reset can get an extra bonus
                                of 5% of the current reload amount
                               
                            </p>

                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                Second reset can get an extra bonus
                                of 8% of the current reload amount
                            </p>


                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                Third reset can get an extra bonus
                                of 10% of the current reload amount
                            </p>


                           

                            
                             
                            
                          </div>
                          <div class="slide">
                            <h4 style="font-family: sans-serif; font-weight:900; font-size:1rem; color:#631313; padding-bottom:10px;">RECHARGE REWARD</h4>
                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                Every recharge of $300 or £300 more will
                                automatically get $15 or £15 bonus
                            </p>
                            <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                Every recharge of $1,000 or £1,000 above will
                                automatically receive $50 or £50
                                reward
                            </p>
                               

                                <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                    Every recharge of $2,500 or £2,500 above will
                                    automatically receive $200 or £200 reward
                                </p>
                                

                                <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                    Every recharge of $5,000 or £5,000 above will
                                    automatically receive $600 or £600 reward
                                </p>
                                

                                <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                    Every recharge of $10,000 or £10,000 above will
                                    automatically receive $1,200 or £1,200 reward
                                </p>
                               

                                <p class="evnts" style="font-family: sans-serif; font-size:1rem">
                                    Every recharge of $20,000 or £20,000 above will
                                    automatically receive $2,500 or £2,500 reward
                                </p>
                                

                               
                          </div>
                          {{-- <div class="slide">
                            <h3>Slide 4</h3>
                            <p>
                              A distributed actor pilots the null pencil. The wild wolfs a damp cage inside the breach. The blank toes the line underneath the arc. The sheep migrates within the transcript.
                            </p>
                          </div>
                          <div class="slide">
                            <h3>Slide 5</h3>
                            <p>
                              The suspected book hums opposite the unacceptable urge. The warning goodbye searches the substitute. This damp loses before the president. The slave elects the north inside an exciting salt.
                            </p>
                          </div> --}}
                        </div>
                      </div>
                    {{-- <div class="row">
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
                    </div> --}}
                                        
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