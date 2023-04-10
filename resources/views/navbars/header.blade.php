<div class="container-fluid ab2">
<div class="ab5">
<div class="row">
<div class="col-md-5"><a href="/"><img src="{{asset('images/logo.jpg')}}" alt="logo"></a></div>
<div class="col-md-7">
<div id="menu_area" class="menu-area">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="active" style="margin-top:12px;"><a href="subscription">Subscriptions <span class="sr-only">(current)</span></a></li>
                        <li style="margin-top:12px;"><a href="contact">Contact Us</a></li>
                        @guest
                            @if (Route::has('login'))
                        <li><a href="#popup2" class="ab15" style="color:#fff!important">Login</a></li>
                         <li><a href="#popup1" class="ab21" style="color:#ffac05!important"> Register </a></li>
                          @endif

                          @else
                            @if(Route::has('login'))

                            @if(Auth::user()->utype === 'USR')
                        <li class="dropdown" style="margin-top:12px;">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="color:#292929!important">
                            <li><a href="#" style="font-size:24px; font-weight:bold">{{Auth::user()->first_name}} {{Auth::user()->last_name}}<br> <span style="font-size:12px;color:#292929!important; position:relative; top:-2px">About your self</span></a></li>
                           
                             <li><a href="answers.html">My Answers</a></li>
                             <li><a href="transaction.html">Transaction History</a></li>
                             <li><a href="subscription.html">Subscription Plan</a></li>
                            <!--<li class="dropdown">-->
                            <!--    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personal Details</a>-->
                            <!--    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                            <!--    <li><a href="#"><img src="images/john.jpg"><span style="font-size:24px; font-weight:bold">Jhon Disuza</span><div style="left:85px; top:-30px; position:relative;"> Designation</div></a></li>-->
                                
                            <!--    <li><a href="#" style="font-size:20px; border-bottom:solid 1px #b7b7b7 ">Credentials &amp; Highlights</a></li>-->
                            <!--    <li><a href="#">Designation</a></li>-->
                            <!--     <li><a href="#">University</a></li>-->
                            <!--      <li><a href="#">Live in</a></li>-->
                            <!--      <li><a href="#">Joined 11 July 2022</a></li>-->
                            <!--      <li><a href="#">Your Content (20)</a></li>-->
                                 
                                
                            <!--    </ul>-->
                            <!--</li>-->
                             <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                                  
                            
                            </ul>
                            @else
                        </li>
                    </ul>
                    @endif

                        @endif
                    @endguest
                </div>
            </nav>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>