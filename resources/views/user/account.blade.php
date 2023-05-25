<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Account') }}
        </h2>
    </x-slot>
        <div class="warpper" >
            <div class="card" style="height: auto;">
                <h3 class="card-title">Account Management</h3>
                <form action="{{route('account')}}" method="POST" enctype="multipart/form-data" id="bank-bind" style="padding: ;">
                    <div class=" accounts" style="right:0">
                    <div class="" style="flex-direction:row; display:flex; margin-bottom:30px; right:0">
                            {{-- <label for="payee Name" style="width:200px">Avatar:</label> --}}
                            <span><img src="assets/img/user_318-563642.avif" class="img-rounded" width="50" height="50" alt=""></span>
                        </div>
                        <p class="ref_link" style="text-align: center; font-size:0.9rem">Ref ID: <input id="myInput" value="{{auth()->user()->referral_code}}" /> <i onclick="copy()" style="cursor: pointer; font-size:1.3rem" class="bi bi-clipboard"></i></p>
                        <hr>
                        <div class="" style="flex-direction:row; display:flex; margin-bottom:5px; right:0">
                            {{-- <label  style="width:200px" for="payee Name">Fullname:</label> --}}
                            <input type="text" style="margin: 5px; width:250px;" name="fname" value="{{auth()->user()->name}}" id="fname" class="form__contro" value="">
                        </div>
                        <hr>
                        
                        <div class="" style="flex-direction:row; display:flex;  margin-bottom:5px;">
                            {{-- <label  style="width:200px" for="payee Name">Phone No:</label> --}}
                            
                            <input type="number" name="phone_number" value="{{auth()->user()->phone_number}}" id="phone_number" style="margin: 5px; width:250px;" class="form__contro">
                        </div>
                        <hr>
                        <div class="" style="flex-direction:row; display:flex;  margin-bottom:5px;">
                            {{-- <label  style="width:200px" for="payee Name">Email:</label> --}}
                            <input type="text" style="margin: 5px; width:250px;" name="email" id="email" value="{{auth()->user()->email}}" class="form__contro">
                        </div>
                        <hr>

                            <!-- <div class="" style="flex-direction:row; display:flex;  margin-bottom:30px;">
                            <label  style="width:200px" for="payee Name">Phone Number:</label>
                            <input type="text" name="" id="" class="form__contro">
                        </div>
                        <hr> -->
                        <div class="login__btn" style="text-align: center">
                        <!-- HTML !-->
                            <button class="button-31" >Update</button>
                        </div>

                    </div>
                    
                </form>
                
                <!-- <a href="https://ui.glass">Read more</a> -->
            </div>
        </div>

        <style>
            /* .menus{
                color: #fff;
                font-size: 0.9rem;
                text-decoration: none;font-family: sans-serif;
            } */
        </style>
</x-app-layout>