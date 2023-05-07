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


                /* CSS */
.button-28 {
  appearance: none;
  background-color: transparent;
  border: 2px solid #1A1A1A;
  border-radius: 15px;
  box-sizing: border-box;
  color: #3B3B3B;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 16px;
  font-weight: 600;
  line-height: normal;
  margin: 3px;
  min-height: 60px;
  min-width: 0;
  outline: none;
  padding: 16px 24px;
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 140px;
  will-change: transform;
}
.button-28:disabled {
  pointer-events: none;
}

.button-28:hover {
  color: #fff;
  background-color: #1A1A1A;
  box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
  transform: translateY(-2px);
}

.button-28:active {
  box-shadow: none;
  transform: translateY(0);
}


/* CSS */
.button-37 {
  background-color: #13aa52;
  border: 1px solid #13aa52;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
  font-size: 16px;
  font-weight: 400;
  outline: none;
  outline: 0;
  padding: 10px 25px;
  text-align: center;
  transform: translateY(0);
  transition: transform 150ms, box-shadow 150ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-37:hover {
  box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
  transform: translateY(-2px);
}

@media (min-width: 768px) {
  .button-37 {
    padding: 10px 30px;
  }
}
                </style>
                <script>
                   function popmenu(){
                    document.getElementById("setgear").click();
                   }

                   
                </script>

            <div class="warpper">
            <div class="card" style="height: auto; padding:20px">
                <h3 class="card-title">Submit for Comfirmation</h3>
                <div class="options d-flex" style="margin:0.5px 1px">
                       
                </div>
                @php
                    
                $wallet = "123hegfdvsfwf33v2v2";
                @endphp


                <form action="">
                    <!-- HTML !-->
                    <button class="button-37" role="button">Submit </button>

                <span class="network" id="network"></span>
                <span class="value" id="value" style="color:#000; font-size:1.5rem"></span>
                
                <input type="password" name="real-amount" value="osoosoziozioz" class="form-control" size="40" placeholder="real amount" id="real-amount">
                </form>
                
            </div>

        </section>
        <style>
            .menus{
                color: #fff;
                font-size: 0.9rem;
                text-decoration: none;font-family: sans-serif;
            }
        </style>
        <script>

            // var crypt = document.getElementById("crypto")
            // var bank = document.getElementById("bank")
            // document.ready(function(){
            //     $("#usdt").show()
            //     $("#bankbtn").hide();
            // })

            document.addEventListener("DOMContentLoaded", () => {
                $("#usdt").show()
                $("#bankbtn").hide();
                });
                       
            function crypt(){
                $("#usdt").show()
                $("#bankbtn").hide();
            }
            function bank(){
                $("#usdt").hide()
                $("#bankbtn").show();
            }



            //var btn = document.getElementById("amountw")
            var btn1 = document.getElementById("amount1")
            var btn2 = document.getElementById("amoun2")
            var btn3 = document.getElementById("amoun3t")
            var btn4 = document.getElementById("amount4")
            var btn5 = document.getElementById("amount5")
            var btn6 = document.getElementById("amount6")
            var btn7 = document.getElementById("amount7")
            
            const buttons = document.querySelectorAll('#amount');
            
            var span = document.getElementById("value")
            
            buttons.forEach(function(button) {
                  // Code to be executed for each button goes here
                  button.addEventListener('click', function() {
                  //alert('Button ' + button.textContent + ' was clicked!');
                  span.textContent = button.textContent;
                  document.getElementById("network").value = button.textContent;
                });
            });
            
            
            var erc = document.getElementById("erc20")
            var trc = document.getElementById("trc20")


        </script>
</x-app-layout>
