@extends('admin.master')
@section('title','Update')
@section('content')
    <!-- update section starts  -->

    <section class="form-container">

        <form action="{{}}" method="POST">
            @csrf
            <h3>update profile</h3>
            <input type="text" name="name" placeholder="" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="old_pass" placeholder="enter old password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="new_pass" placeholder="enter new password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="c_pass" placeholder="confirm new password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="update now" name="submit" class="btn">
        </form>

    </section>

@endsection
