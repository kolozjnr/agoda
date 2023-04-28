<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Account') }}
        </h2>
    </x-slot>
        <section class="container">
            

            @php
                $rand = random_int(1000000000,9999999999);
            @endphp

            <div class="warpper">
                <div class="card" style="height: auto;">
                    <h3 class="card-title">Create Order</h3>
                    <form id="create-order" enctype="multipart/form-data">
                        @csrf
                        <div class="form__group" style="width:350px !important">
                            {{-- <div class="" style="flex-direction:row; display:block; margin-bottom:5px; margin: 10px;">
                                <label for="payee Name">Order Name:</label>
                                <input type="text" name="name" id="name" class="form__contro">
                            </div> --}}
                            <input type="hidden" name="order_status" value="0">
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <input type="hidden" name="order_no" value="{{$rand}}">
                            <input type="hidden" name="oder_photo" value="Not Relevant">
                            
                            <div class="" style="flex-direction:row; display:block;  margin-bottom:5px; margin: 10px;">
                                <label for="payee Name" >Order Price:</label>
                                <input type="text" name="order_price" id="price" class="form__contro">
                            </div>

                            <div class="" style="flex-direction:row; display:block;  margin-bottom:5px; margin: 10px;">
                                <label for="payee Name" >Order Commission:</label>
                                <input type="text" name="order_com" id="commission" class="form__contro">
                            </div>
                            <div class="" style="flex-direction:row; display:block;  margin-bottom:5px; margin: 10px;">
                                {{-- <label for="payee Name">Qty:</label>
                                <input type="hidden" name=""> --}}
                                <select type="text" name="order_qty" id="qty" class="form__contro" style="width:220px">
                                    <option value="" selected disabled>Order Quantity</option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="35">35</option>
                                </select>
                            </div>
                            
                            <div class="" style="flex-direction:row; display:block;  margin-bottom:5px; margin: 10px;">
                                <label for="payee Name">Order File:</label>
                                <input type="file" name="order_file" id="order_file" class="form__contro" style="width: 300px">
                            </div>

                             <div class="" style="flex-direction:row; display:block;  margin-bottom:5px; margin: 10px;">
                                <label for="payee Name">Order Description:</label>
                                <textarea name="order_desc" class="form-control" id="order_desc" cols="10" rows="5"></textarea>
                                {{-- <input type="text" name="" id="" class="form__contro"> --}}
                            </div>

                            <div class="submit__btn">
                                <button id="btn-order" class="withdrawal__btnn">Create</button>
                            </div>

                            
                        </div>
                       
                    </form>
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

        <script>
            
        </script>
</x-app-layout>
