<div class="header-top d-none d-lg-block">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <div class="col-xl-6 col-lg-6">
                <div class="header-details">
                    <ul>
                        <li>
                            <h6>Polytech-Books<span>Your One-Stop Online Shop</span></h6>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="header-left">
                    <ul>
                        <li>
                            @if (Auth::check())
                            <a class="popup-toggle"><img style="height: 30px; width:30px;" class="rounded-circle" src="{{ Auth::user()->image == null ? 'https://api.dicebear.com/5.x/initials/svg?seed=Felix' : Auth::user()->image }}
                                " alt="Profile Image"></a></li>
                            @else
                                <a class="popup-toggle"><i class="feather-user"></i>Login</a></li>
                            @endif

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
