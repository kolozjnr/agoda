

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
        <i class="bi bi-megaphone" style=" margin-right: 10px; font-size: 1.6rem"></i> <marquee behavior="scroll" direction="left" scrollamount="2">Free $10 for every new Referal.</marquee>
    </div>

    <div class="video">
        {{-- <video class="video__item" src="assets/img/How to Record Video on Windows 10 (8 Easy Ways ) - EaseUS - Google Chrome 2023-01-31 12-20-25.mp4"></video> --}}
            <video id="myVideo" autoplay controls>
                <source src="assets/img/null_2.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
    </div>

    <div class="home__message" style="margin-bottom: 0;">
        <p class="text__home">
            Agoda Group operates as an online travel company in
            the United States and internationally. The company
            operates through Retail, B2B, and Trivago segments.
            The company's brand portfolio also comprises Agoda
            Partner Solutions, that offers private label and co-
            branded products through third-party websites; and
            Egencia that provides travel services to businesses and
            corporate customers. In addition, its brand portfolio
            consists of Trivago, a hotel metasearch website, which
            send referrals to online travel companies and travel
            service providers from hotel metasearch websites.
            Further, the company provides loyalty programs, hotel
            accommodations, alternative accommodations,
            advertising as well as media services. It serves leisure
            and corporate travelers that includes travel agencies,
            tour operators, travel supplier direct websites and call
            centers, consolidators and wholesalers of travel
            products and services, online portals and search
            websites, travel metasearch websites, mobile travel
            applications, social media websites as well as
            traditional consumer commerce and group buying
            websites. The company was formerly known as
            Agoda, Inc. and changed its name to Agoda Group,
            Inc. in March 2018. Agoda Group, Inc. was founded in
            1996 and is headquartered in Seattle, Washington.
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
