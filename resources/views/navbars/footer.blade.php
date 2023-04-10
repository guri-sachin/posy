<footer>
    <div class="container-fluid ab17">
        <div class="ab18">

            <div class="row">
                <div class="col-md-4">
                    <div class="ab19">USEFUL LINKS</div>
                    <div class="menu_inner">
                        <ul>
                            <li><a href="#">Ask Question</a> </li>
                            <li><a href="#">What we do</a></li>
                            <li><a href="#"> About Us</a></li>
                            <li><a href="#">Contact Us</a></li>



                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ab19">READ</div>
                    <div class="menu_inner">
                        <ul>
                            <li><a href="#">Term of Use</a> </li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#"> Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ab19" style="padding-top:70px;">FOLLOW US ON SOCIAL NETWORKS</div>
                    <a href="#"><img src="images/facebook.png"></a>&nbsp;<a href="#"><img src="images/insta.png"></a>&nbsp;<a href="#"><img src="images/twitter.png"></a>&nbsp;<a href="#"><img src="images/tik.png"></a>&nbsp;<a href="#"><img src="images/you.png"></a>&nbsp;<a href="#"><img src="images/arrow.png"></a>&nbsp;<a href="#"><img src="images/whatsapp.png"></a>&nbsp;<a href="#"><img src="images/in.png"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="ab20">
        &copy; Copyright PosyAI.com 2022
    </div>
</footer>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<div id="popup1" class="overlay">
    <div class="popup">
        <h2 class="ab22">Posy AI </h2>
        <h6 class="ab23">Create Account and Post your question above and we will help you get answers
            to all your inquiries in no time<h3>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ab24">First Name</div>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="Your First Name" style="margin-bottom:16px;" required autocomplete="first_name" autofocus />
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ab24">Email</div>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Your Email ID" style="margin-bottom:16px;" required />
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md12"><a href="#popup4" class="ab25">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ab24">Last Name</div>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Your Last Name" style="margin-bottom:16px;" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus />
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ab24">Password</div>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Your Password" style="margin-bottom:16px;" required autocomplete="new-password" />
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-12"> <button type="submit" class="btn btn-success ab26">
                                    {{ __('Sign Up') }}
                                </button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
    </div>

</div>

<div id="popup2" class="overlay">
    <div class="popup3">
        <h2 class="ab22" style="text-align:left; padding-left:20px">Posy AI </h2>
        <h6 class="ab23" style="text-align:left;padding-left:20px">Login With us, we will help you get
            answers
            to all your inquiries in no time<h3>
                <a class="close" href="#">&times;</a>
                <div class="content">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ab24">Email</div>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your Email ID" style="margin-bottom:16px;" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ab24">Password</div>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="email" placeholder="Your Password" style="margin-bottom:16px;" required />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md12"><a href="#popup4" class="ab25">Forgot Password</a>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12"> <button type="submit" class="btn btn-success ab26">
                                    {{ __('Login') }}
                                </button></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </form>
                </div>
    </div>

</div>

<div id="popup4" class="overlay">
    <div class="popup5">

        <h6 class="ab23" style="text-align:left;padding-left:20px">
            <h3>
                <a class="close" href="#" style="padding-top:20px;">&times;</a>
                <div class="content">
                    <h2 class="ab22" style=" color:#595959!important; ">Verification </h2>
                    <form>
                        <div class="row">
                            <div class="col-md-12">



                                <div class="ab27">Enter 4 digit OTP</div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-3"><input name="" type="text" class="ab28">
                                            </div>
                                            <div class="col-md-3"><input name="" type="text" class="ab28">
                                            </div>
                                            <div class="col-md-3"><input name="" type="text" class="ab28">
                                            </div>
                                            <div class="col-md-3"><input name="" type="text" class="ab28">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>





                                <button type="button" class="btn btn-success ab26" style="float:none!important; display:block; margin-left:auto; margin-right:auto; text-align:center; margin-top:40px; margin-bottom:40px;">Confirm</button>
                            </div>

                        </div>
                    </form>
                </div>
    </div>

</div>

<div id="popup6" class="overlay">
    <div class="popup7">

        <h6 class="ab23" style="text-align:left;padding-left:20px">
            <h3>
                <a class="close" href="#" style="padding-top:20px;">&times;</a>
                <div class="content">
                    <h2 class="ab22" style=" color:#595959!important; "> </h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ab45">PAYMENT BY</div>
                                <div class="ab46">You are paying $200 for this transaction to Get access
                                </div>
                                <a href="#"><button type="button" class="btn btn-primary ab47">Credit Card
                                        <img src="images/visa.jpg" style="padding-left:200px;"></button></a>
                                <a href="#"><button type="button" class="btn btn-primary ab47">Debit Card
                                        <img src="images/visa1.jpg" style="padding-left:168px;"></button></a>
                                <a href="#"><button type="button" class="btn btn-primary ab47">Net Banking
                                        <img src="images/net.jpg" style="padding-left:272px;"></button></a>
                                <a href="#"><button type="button" class="btn btn-primary ab47">Paytm <img src="images/paytm.jpg" style="padding-left:277px;"></button></a>
                                <a href="#"><button type="button" class="btn btn-primary ab47">Credit Card
                                        <img src="images/upi.jpg" style="padding-left:248px;"></button></a>
                            </div>
                            <div class="col-md-6">
                                <div class="ab48">
                                    <div class="ab49">SUBSCRIBE TO</div>
                                    <div class="ab50">AI la cart <span style="font-family:Proxima!important">(Subscription plan)</span>
                                    </div>
                                    <div class="row" style="margin-top:30px;">
                                        <div class="col-md-9">
                                            <div class="ab51">Subscription</div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="ab51">$200</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-9">
                                            <div class="ab51">Taxes $ GST</div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="ab51">$00</div>
                                        </div>
                                    </div>
                                    <div class="ab52"></div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-9">
                                            <div class="ab53">Total</div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="ab53">$200</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:40px;">
                                        <div class="col-md-1"><input name="" type="checkbox" value=""></div>
                                        <div class="col-md-11">
                                            <div class="ab54">I agree to the Terms and conditions and
                                                the automatic Renewal Terms above.</div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary ab55">SUBSCRIBE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
    </div>

</div>

<style>
    .ab20 {
        background: #76d6ff;
        padding: 6px 0;
        text-align: center;
        font-family: Proxima;
    }
</style>