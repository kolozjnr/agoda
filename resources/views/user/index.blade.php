

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .k{
            
        }
    </style>

    <div class="notification" style="background-color: #FFF; margin-top: 50px; margin-bottom: 20px; padding: 5px; display: flex;
    align-items: center;
    height: 50px;">
        <i class="bi bi-megaphone" style=" margin-right: 10px; font-size: 1.6rem"></i> <marquee behavior="scroll" direction="left">Free $10 for every new Referal.</marquee>
    </div>

    <div class="video">
        {{-- <video class="video__item" src="assets/img/How to Record Video on Windows 10 (8 Easy Ways ) - EaseUS - Google Chrome 2023-01-31 12-20-25.mp4"></video> --}}
            <video id="myVideo" controls>
                <source src="assets/img/How to Record Video on Windows 10 (8 Easy Ways ) - EaseUS - Google Chrome 2023-01-31 12-20-25.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
    </div>

    <div class="home__message" style="margin-bottom: 0;">
        <p class="text__home">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quos totam debitis ratione alias in maiores dolorem dolor molestias fugit voluptatum, magnam voluptatibus nobis, perspiciatis tempore asperiores molestiae perferendis sunt expedita esse, quasi doloribus reiciendis. Tempore in velit ex aut voluptate at dolores sapiente nemo, eligendi ad quibusdam illo tempora dolorum laborum ipsa error odio cupiditate sit, maiores ut impedit ratione repellat sequi reprehenderit. Excepturi facere libero consequatur sapiente soluta quo labore deserunt nihil harum laborum error nobis, quas dolor dignissimos iusto fugiat, nam corporis quasi cum repellendus inventore. Est quaerat maxime rem incidunt delectus expedita, eaque ab voluptate quidem!
        </p>
    </div>
</section><style>
    .menus{
        color: #fff;
        font-size: 0.9rem;
        text-decoration: none;font-family: sans-serif;
    }
</style>
            
</x-app-layout>
