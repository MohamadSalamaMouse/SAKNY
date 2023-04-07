@extends('admin.master')
@section('title','register new admin')
@section('content')
    <section class="grid">

        <h1 class="heading">admins</h1>

        <form action="" method="POST" class="search-form">
            <input type="text" name="search_box" placeholder="search admins..." maxlength="100" required>
            <button type="submit" class="fas fa-search" name="search_btn"></button>
        </form>
    </section>
@endsection
