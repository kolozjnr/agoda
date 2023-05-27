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

                <style>
                    .modal {
                display: none; /* Hide modal by default */
                position: fixed;
                z-index: 9999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0,0,0,0.8);
                }

                .modal-content {
                background-color: #fefefe;
                margin: 10% auto;
                padding: 2px;
                border: 1px solid #888;
                width: 60%;
                height: 12em;
                max-width: 300px;
                animation-name: modal-expand;
                animation-duration: 2s;
                }

                .close-modal {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
                }

                .close-modal:hover,
                .close-modal:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
                }

                /* Keyframe animation for modal expansion */
                @keyframes modal-expand {
                from {transform: scale(0.7);}
                to {transform: scale(1);}
                }

                </style>
                <script>
                   function popmenu(){
                    document.getElementById("setgear").click();
                   }
                </script>
                {{-- @include('layouts/header.blade.php'); --}}
            <!-- <div class="withdrawal__card" style="text-align: center;">
                        <button class="withdrawal__btnn">Bind Account</button>
                    </div> -->
            <div class="warpper" id="card2_wallet" style="width:320px">
            <input class="radio" id="one" name="group" style="display: none" type="radio" >
                <input class="radio" id="two" name="group" style="display: none" type="radio" checked>
                <input class="radio" id="three" style="display: none" name="group" type="radio">
                <div class="tabs" >
                    <label class="tab" id="one-tab" for="one">Commission</label>
                    <label class="tab" id="two-tab" for="two">Withdrawal</label>
                    <label class="tab" id="three-tab" for="three">Recharge</label>
                </div>
                <div class="panels1" style="">
                <div class="panel" id="one-panel" style="">
                    {{-- <div class="withdrawal__card">
                        <button class="withdrawal__btnn">Bind Account</button>
                    </div> --}}
                    <form action="" id="bank-bind">
                        <div class="form__group" style="width:350px !important; min-height:400px; margin-top:2em">
                            <table class="table">
                                
                                @if(count($details) < 1)
                                <p style="text-align: center; color:#535753; font-size:1.3rem; font-family:'Times New Roman', Times, serif">No Commision Records Found</p>
                               @else
                               @foreach($details as $detail)
                                <tbody>
                                  <tr>
                                    
                                    <td>Amount</td>
                                    <td><span style="font-size: 1rem; font-family: sans-serif; color:#FF5004
                                        ">Withdraw</span> <br> <span style="font-size: 1rem; font-family: sans-serif; color:#535753 
                                        ; vertical-align:text-top">{{$detail->created_at->diffForHumans()}}</span> <span style="font-size: 0.8rem; font-family: sans-serif; color:#DC143C
                                        ; margin-left:50px; vertical-align:text-top">- ${{$detail->amount}} </span></td>
                                   
                                  </tr>
                                  
                                </tbody>
                                @endforeach
                                @endif
                              </table>
                        </div>
                       
                    </form>
                </div>
                
                    
                   
                    
                <div class="panel" id="two-panel" style="">
                    {{-- <div class="withdrawal__card">
                        <button class="withdrawal__btnn">Bind Account</button>
                    </div> --}}
                    <form action="" id="bank-bind">
                        <div class="form__group" style="width:350px !important; min-height:400px; margin-top:2em">
                            <table class="table">
                                
                                @if(count($details) < 1)
                                <p style="text-align: center; color:#535753; font-size:1.3rem; font-family:'Times New Roman', Times, serif">No Withdrawal Records Found</p>
                               @else
                               @foreach($details as $detail)
                                <tbody>
                                  <tr>
                                    
                                    <td>Amount</td>
                                    <td><span style="font-size: 1rem; font-family: sans-serif; color:#FF5004
                                        ">Withdraw</span> <br> <span style="font-size: 1rem; font-family: sans-serif; color:#535753 
                                        ; vertical-align:text-top">{{$detail->created_at->diffForHumans()}}</span> <span style="font-size: 0.8rem; font-family: sans-serif; color:#DC143C
                                        ; margin-left:50px; vertical-align:text-top">- ${{$detail->amount}} </span></td>
                                   
                                  </tr>
                                  
                                </tbody>
                                @endforeach
                                @endif
                              </table>

                            
                        </div>
                       
                    </form>
                </div>
                <div class="panel" id="three-panel" style="">
                    {{-- <div class="withdrawal__card">
                        <button class="withdrawal__btnn">Bind Account</button>
                    </div> --}}
                    <form action="" id="bank-bind">
                        <div class="form__group" style="width:350px !important; min-height:400px; margin-top:2em">
                            <table class="table">
                                
                                @if(count($details) < 1)
                                <p style="text-align: center; color:#535753; font-size:1.3rem; font-family:'Times New Roman', Times, serif">No Top-Up Records Found</p>
                               @else
                               @foreach($details as $detail)
                                <tbody>
                                  <tr>
                                    
                                    <td>Amount</td>
                                    <td><span style="font-size: 1rem; font-family: sans-serif; color:#FF5004
                                        ">Withdraw</span> <br> <span style="font-size: 1rem; font-family: sans-serif; color:#535753 
                                        ; vertical-align:text-top">{{$detail->created_at->diffForHumans()}}</span> <span style="font-size: 0.8rem; font-family: sans-serif; color:#DC143C
                                        ; margin-left:50px; vertical-align:text-top">- ${{$detail->amount}} </span></td>
                                   
                                  </tr>
                                  
                                </tbody>
                                @endforeach
                                @endif
                              </table>
                        </div>
                       
                    </form>
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


<script>
    // Get the modal element
const modal = document.getElementById("my-modal");

// Get the button that opens the modal
document.getElementById("open-modal").click();

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close-modal")[0];

// When the user clicks on the button, open the modal
// btn.onclick = function() {
// modal.style.display = "block";
// }
function showm() {
modal.style.display = "block";
}


// Listen for click events on the document
document.addEventListener('click', function(event) {
    // Check if the clicked element is outside the modal
    if (event.target === modal) {
        // Close the modal
        modal.style.display = 'none';
    }
});

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}

</script>
</x-app-layout>