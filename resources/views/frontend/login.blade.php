@extends('frontend.layout.master')
@section('title','Login')
@section('login')
    <!-- login section starts  -->
    <section class="form-container">

        <form action="" method="post">
            @csrf
            <h3>welcome back!</h3>
            <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
            <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
            <p>don't have an account? <a href="{{route('register')}}">register new</a></p>
            <input type="submit" value="login now" name="submit" class="btn">
        </form>

    </section>

    <!-- login section ends -->
@endsection













