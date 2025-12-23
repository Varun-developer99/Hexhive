<div class="login-wrap">
    <div class="left">
        <div class="heading">
            <h4>Register</h4>
        </div>
        <form action="{{ route('register') }}" method="POST" class="form-login form-has-password">
            @csrf
            <input type="hidden" name="form_type" value="Modal">
            <div class="wrap">
                <fieldset class="">
                    <input class="" type="text" placeholder="Enter your name*" name="name" tabindex="2" value="" aria-required="true" required="">
                </fieldset>
                <fieldset class="">
                    <input class="" type="email" placeholder="Email address*" name="email" tabindex="2" value="" aria-required="true" required="">
                </fieldset>
                <fieldset class="position-relative password-item">
                    <input class="input-password" type="password" placeholder="Password*" name="password" tabindex="2" value="" aria-required="true" required="">
                    <span class="toggle-password unshow">
                        <i class="icon-eye-hide-line"></i>
                    </span>
                </fieldset>
                <fieldset class="position-relative password-item">
                    <input class="input-password" type="password" placeholder="Confirm Password*" name="password_confirmation" tabindex="2" value="" aria-required="true" required="">
                    <span class="toggle-password unshow">
                        <i class="icon-eye-hide-line"></i>
                    </span>
                </fieldset>
                <div class="d-flex align-items-center">
                    <div class="tf-cart-checkbox">
                        <div class="tf-checkbox-wrapp">
                            <input checked="" class="" type="checkbox" id="login-form_agree" name="agree_checkbox">
                            <div>
                                <i class="icon-check"></i>
                            </div>
                        </div>
                        <label class="text-secondary-2" for="login-form_agree">
                            I agree to the&nbsp;
                        </label>
                    </div>
                    <a href="term-of-use.html" title="Terms of Service"> Terms of User</a>
                </div>
            </div>
            <div class="button-submit">
                <button class="tf-btn btn-fill" type="submit">
                    <span class="text text-button">Register</span>
                </button>
            </div>
        </form>
    </div>
    <div class="right">
        <h4 class="mb_8">Already have an account?</h4>
        <p class="text-secondary">Welcome back. Sign in to access your personalized experience, saved preferences, and more. We're thrilled to have you with us again!</p>
        <a href="#" class="tf-btn btn-fill" onclick="login_modal()"><span class="text text-button">Login</span></a>
    </div>
</div>

<script>
    $(".form-has-password").find(".toggle-password").on("click", function () {
        const $passwordInput = $(this)
        .closest(".password-item")
        .find(".input-password");
        const type =
        $passwordInput.attr("type") === "password" ? "text" : "password";
        $passwordInput.attr("type", type);
        $(this).toggleClass("unshow");
    });
</script>