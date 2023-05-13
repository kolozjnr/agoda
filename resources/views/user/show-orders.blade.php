<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Account') }}
        </h2>
    </x-slot>
        <section class="container">

    
    <section style="display: none">
      <h2 class="h6">Demo</h2>
      <div class="d-flex flex-column flex-md-row justify-content-center gap-3 py-3">
        <button class="btn btn-success mx-1" id="succ" type="button" onclick="toast.success('Task Completed Succesfully.')">Success</button>
        <button class="btn btn-warning mx-1" type="button" onclick="toast.warning('This is a toast warning message.')">Warning</button>
        <button class="btn btn-info mx-1" type="button" onclick="toast.info('This is a toast info message.')">Info</button>
        <button class="btn btn-danger mx-1" id="err" type="button" onclick="toast.error('⚠️ There is an error in submitting task.', { duration: 10_000 })">Error</button>
        <button class="btn btn-secondary mx-1" type="button" onclick="toast.log('This is a toast log message.', { autoHide: false })">Log</button>
      </div>
    </section>
   

            @php
                $rand = random_int(1000000000,9999999999);
            @endphp

            <div class="warpper" style="margin auto">
                <div class="card-orders" style="height: auto; margin:auto; text-align:center;">
                    <h3 class="card-title" style="padding-top: 10px; font-weight:600; font-family:sans-serif">Available Orders</h3>
                    <div class="orders" style="margin: 10px">
                        @foreach ($orders as $item)
                        <p>{{$item->order_no}}</p>
                        
                        <form action="/updateorinsert" id="updint" method="post">
                            @csrf
                            <input type="hidden" value="{{auth()->user()->id}}">
                            <input type="hidden" name="order_id" value="{{$item->id}}">
                            <div class="order d-flex" style="vertical-align: middle">
                                <img src="/{{$item->order_file}}" width="100" height="100" class="rounded" alt="">
                                <span style="margin-top: 50px">{{$item->order_desc}}</span>
                            </div>
                            <div class="but" style="margin:auto">
                                <button class="btn btn-success">Submit order</button>
                            </div>
                        </form>
                        @endforeach
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

        <script>
            
        </script>
</x-app-layout>
