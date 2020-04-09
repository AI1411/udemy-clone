<footer class="footer-area">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <ul class="nav justify-content-md-end footer-menu">
                    <li class="nav-item">
                        <a class="nav-link"
                           href="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="">Terms & Condition</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content sign-in-modal">
            <div class="modal-header">
                <h5 class="modal-title">Login to your account!</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="email">
                    </div>
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <div class="forgot-pass">
                        <span>or</span>
                        <a href="" data-toggle="modal" data-target="#forgotModal" data-dismiss="modal">Forgot
                            password</a>
                    </div>
                </form>
                <div class="account-have">
                    Don't have an account? <a href="" data-toggle="modal" data-target="#signUpModal"
                                              data-dismiss="modal">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content sign-in-modal">
            <div class="modal-header">
                <h5 class="modal-title">Sign Up And Start Learning!</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-user"></i></span>
                        <input type="text" name="first_name" class="form-control"
                               placeholder="first name">
                    </div>
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-user"></i></span>
                        <input type="text" name="last_name" class="form-control"
                               placeholder="last name">
                    </div>
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control"
                               placeholder="email">
                    </div>
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control"
                               placeholder="password">
                    </div>
                    <div class="input-group">
                        <span class="input-field-icon"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password_confirmation" class="form-control"
                               placeholder="Confirm password">
                    </div>
                    <div class="custom-control custom-checkbox deal-checkbox">
                        <input type="checkbox" class="custom-control-input" id="dealCheckbox">
                        <label class="custom-control-label" for="dealCheckbox">
                            Check Here For Exciting Deals And Personalized Course Recommendations
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </form>
                <div class="agreement-text">
                    By Signing Up You Agree To Our
                    <a href="">Terms of use</a> and <a
                        href="">Privacy Policy</a>.
                </div>
                <div class="account-have">
                    Already have an account?
                    <a href="" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Login</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- Modal -->
