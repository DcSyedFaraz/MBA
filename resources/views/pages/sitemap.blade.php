@extends('layouts.web')

@section('title', 'Sitemap')
@section('description', 'A UK Based Writing Firm Providing Best And Cheap Assignment Writing Service to All The University Students With The Team of British Writers Available 24/7.')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

    <section class="container mx-auto my-10 px-4">

        <h1 class="text-primary-one font-bold text-4xl my-4">Site Map</h1>

        <div class="bg-primary-one my-[3rem]">
            <h1 class="text-white text-xl p-4 text-center sm:text-left">
                Our Company
            </h1>
        </div>
        <div class="mx-2 my-4">
            <ul class="grid grid-col-1 sm:grid-cols-4 text-center sm:text-left space-y-2">
                <li>
                    <a href="{{route('home')}}" class="text-secondary hover:text-primary-two "> Home</a>
                </li>
                <li>
                    <a href="{{route('about')}}" class="text-secondary hover:text-primary-two "> About</a>
                </li>
                <li>
                    <a href="{{route('services')}}" class="text-secondary hover:text-primary-two "> Services</a>
                </li>
                <li>
                    <a href="{{route('reviews')}}" class="text-secondary hover:text-primary-two "> Reviews</a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="text-secondary hover:text-primary-two "> Contact</a>
                </li>
                <li>
                    <a href="{{route('order')}}" class="text-secondary hover:text-primary-two "> Order</a>
                </li>
            </ul>
        </div>

        <div class="bg-primary-one my-[3rem]">
            <h1 class="text-white text-xl p-4 text-center sm:text-left">
                Our Legal Policies
            </h1>
        </div>
        <div class="mx-2 my-4">
            <ul class="grid grid-col-1 sm:grid-cols-4 text-center sm:text-left space-y-2">
                <li class="hover:text-secondary">
                    <a href="{{route('privacy')}}" class="text-secondary hover:text-primary-two "> Privacy Policy  </a>
                </li>
                <li class="hover:text-secondary">
                    <a href="{{route('terms-and-conditions')}}" class="text-secondary hover:text-primary-two "> Terms & Conditions  </a>
                </li>
                <li class="hover:text-secondary sm:col-span-2">
                    <a href="{{route('refund')}}" class="text-secondary hover:text-primary-two ">Refund Policy  </a>
                </li>
                <li class="hover:text-secondary sm:col-span-2">
                    <a href="{{route('revision')}}" class="text-secondary hover:text-primary-two "> RevisionPolicy  </a>
                </li>
            </ul>
        </div>

        <div class="bg-primary-one my-[3rem]">
            <h1 class="text-white text-xl p-4 text-center sm:text-left">
                Our Services
            </h1>
        </div>
        <div class="mx-2 my-4">
            <ul class="grid grid-col-1 sm:grid-cols-4 text-center sm:text-left space-y-2">
                <li class="hover:text-secondary sm:col-span-2">
                    <a href="{{route('essay')}}" class="text-secondary hover:text-primary-two "> MBA Essay  </a>
                </li>
                @if (!empty($services))
                    @foreach ($services as $service)
                        <li>
                            <a href="{{route('services.show',$service->slug)}}" class="text-secondary hover:text-primary-two "> {{ $service->name }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </section>

@endsection
