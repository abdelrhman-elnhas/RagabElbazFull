@extends('web.layouts.app')
@push('style')
<style>
    .navbar{
        background-color: #001a67;
    }
    #Contact {
        background-color: #7cb0ff;
        padding: 120px !important;
    }
</style>
@endpush
@section('content')
<!-- Contact Section -->
<section id="Contact" class="pt-5">
    <div class="card d-flex align-items-center justify-content-center">
      <h2>تواصل معنا</h2>
      @include('web.includes.message')
      <form class="row justify-content-center align-items-center flex-column g-3" action="{{url('addMessage')}}" method="POST">
        @csrf
        <input class="col-12" type="text" placeholder="اسم المستخدم" name="username">
        <input class="col-12" type="number" placeholder="رقم التليفون" name="phone">
        <textarea class="col-12" type="textarea" cols="60" rows="6" placeholder="اترك رسالتك هنا ..." name="message" required></textarea>
        <button class="contact-btn btn" type="submit">ارسال</button>
      </form>
    </div>
  </section>
@endsection
