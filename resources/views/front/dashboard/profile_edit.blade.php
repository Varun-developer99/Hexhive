@extends('layouts.front.app')

@section('title', 'Edit Profile')

@section('css')

@endsection

@section('content')

<div class="btn-sidebar-account">
    <button data-bs-toggle="offcanvas" data-bs-target="#mbAccount"><i class="icon icon-squares-four"></i></button>
</div>

<section class="flat-spacing">
    <div class="container">
        <div class="my-account-wrap">

            @include('front.dashboard.template.side_bar')

            <div class="my-account-content">
                <div class="account-details">
                    <form action="{{ route('customer.profile_update') }}" method="POST" class="form-account-details form-has-password">
                        @csrf
                        <div class="account-info">
                            <h5 class="title">Information</h5>
                            <div class="cols mb_20">
                                <fieldset class="">
                                    <input class="" type="text" placeholder="Full Name*" name="name" tabindex="2" value="{{ $user->name ?? '' }}" aria-required="true" required="">
                                </fieldset>
                                <fieldset class="">
                                    <input class="" type="number" placeholder="Phone Number*" name="phone" tabindex="2" value="{{ $user->phone ?? '' }}" aria-required="true" required="">
                                </fieldset>
                            </div>
                            <fieldset class="">
                                <input class="disabled" type="email" placeholder="Username or email address*" name="email" tabindex="2" value="{{ $user->email ?? '' }}" aria-required="true" required="" disabled>
                            </fieldset>
                        </div>
                        <div class="account-password">
                            <h5 class="title">Change Password</h5>
                            <fieldset class="position-relative password-item mb_20">
                                <input class="input-password" type="password" placeholder="Current Password*" name="current_password" tabindex="2" value="{{ old('current_password') }}" aria-required="true">
                                <span class="toggle-password unshow">
                                    <i class="icon-eye-hide-line"></i>
                                </span>
                            </fieldset>
                            <fieldset class="position-relative password-item mb_20">
                                <input class="input-password" type="password" placeholder="New Password*" name="new_password" tabindex="2" value="{{ old('new_password') }}" aria-required="true">
                                <span class="toggle-password unshow">
                                    <i class="icon-eye-hide-line"></i>
                                </span>
                            </fieldset>
                            <fieldset class="position-relative password-item">
                                <input class="input-password" type="password" placeholder="Confirm New Password*" name="new_password_confirmation" tabindex="2" value="{{ old('new_password_confirmation') }}" aria-required="true">
                                <span class="toggle-password unshow">
                                    <i class="icon-eye-hide-line"></i>
                                </span>
                            </fieldset>
                        </div>
                        <div class="button-submit">
                            <button class="tf-btn btn-fill" type="submit">
                                <span class="text text-button">Update Account</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
