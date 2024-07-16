@extends('web.layouts.app2')
@push('style')

<link rel="stylesheet" href="{{asset('web_files')}}/css/events.css" />
<link rel="stylesheet" href="{{asset('web_files')}}/css/dash.css" />

@endpush
@section('content')
<main>
    <div class="cover" style=""></div>
    <section id="main">
      <div class="container">
        <div class="row">
            @forelse ($events as $event)
                <div class="col-md-6 col-lg-4">
                    <div class="item p-4">
                    <h2 class="text-center">{{$event->events_name}} </h2>
                    <p class="text-center">{{$event->events_description}}</p>
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <h6 class="text-light">{{$event->events_date}}</h6>
                        </div>
                        <span
                        >الساعة
                        <br />
                        {{$event->events_time}}
                        </span>
                    </div>
                    </div>
                </div>
            @empty
            <div class="col-md-12 mt-3">
                <div class="alert alert-primary text-right" role="alert">
                    لا يوجد مهام بعد
                </div>
            </div>
            @endforelse
        </div>
      </div>
    </section>
  </main>
@endsection
