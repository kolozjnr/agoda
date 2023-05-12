<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Account') }}
        </h2>
    </x-slot>
        <section class="container">
            <style>
                      
          


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

            <div class="warpper" style="">
                @php
                $rand = "123hegfdvsfwf33v2v2";
                @endphp
                <div class="topupcontainer" style="background-color: #fff; width:330px; border-radius:10px; padding:10px">
                    <div class="title">
                        <p style="font-size:1.5rem; text-align:center; font-weight:800; padding:5px;">Submit for Confirmation</p>
                    </div>
                    <div style='text-align: center;'>
                        <!-- insert your custom barcode setting your data in the GET parameter "data" -->
                        <img alt='scan this code and make your deposit'
                             src='https://barcode.tec-it.com/barcode.ashx?data=This+is+a+QR+Code+by+TEC-IT+for+mobile+applications+here+bwe+placed+our+address&code=MobileQRCode&eclevel=L&dmsize=Default'/>
                      </div>
                      <div style='padding-top:8px; text-align:center; font-size:15px; font-family: Source Sans Pro, Arial, sans-serif;'>
                        <!-- back-linking to www.tec-it.com is required -->
                        <a href='https://www.tec-it.com' title='Barcode Software by TEC-IT' target='_blank'>
                         Scan this code to fund your wallet<br/>
                          <!-- logos are optional -->
                          <img alt='TEC-IT Barcode Software' border='0'
                               src='{{asset('assets/img/agoda.svg')}}' width="80" height="50">
                        </a>
                        <p style="margin:10px">our erc20 comes here.....</p>
                    </div>
                    <form method="post" action="/deposit" enctype="multipart/form-data" id="popForm" style="margin-top: 10px; text-align:center">
                      @csrf
                        <span style="color:#000; font-size:1.1rem">Wallet: <strong>{{$wallet}}</strong></span><br>
                        <span class="value" id="value" style="color:#000; font-size:1.1rem; margin-bottom:10px">Amount: <strong>{{$amount}}</strong></span><br>
                        <input type="hidden" name="amount" value="{{$amount}}">
                        <input type="hidden" name="wallet" value="{{$wallet}}">
                        <input type="hidden" name="status" value="0">
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        
                        <label for="pop">Upload proof of payment</label>
                        <input type="file" name="file" style="width:250px;" id="pop">
                        
        
                        <div class="submitbtn" style="margin-top: 20px; text-align:center">
                        <button class="button-37" role="button">Submit </button>
                        </div>
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

          


//  function deposit(e){
// 			var form = document.querySelector("#popForm")
// 			//alert()
//             e.preventDefault();

// 			var form_data= new FormData(form);
// 			var xhr = new XMLHttpRequest();
// 			console.log(form_data)

// 			xhr.onreadystatechange = function(){
// 				if(this.readyState === 4 && this.status === 200){
// 					console.log(this.responseText)
// 				}else{
//                   document.querySelector(".button-37").textContent = "Loading..."; 
// 				}
// 			}
// 			xhr.open("POST", "/deposit");
// 			xhr.setRequestHeader('X-CSRF-Token', '{{ csrf_token() }}');
// 			xhr.send(form_data);
// 		 }


        </script>
</x-app-layout>
