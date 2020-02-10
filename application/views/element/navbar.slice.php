<div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat datang, {{$this->session->userdata('NAMA')}}</span>
                </li>
                @if($this->session->userdata('login_status') == TRUE)
                <li>
                    <a href="{{site_url('auth/logout')}}">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                @else
                <li>
                    <a href="{{site_url('Register')}}">
                        <i class="fa fa-edit"></i> Register
                    </a>
                </li>
                @endif
            </ul>

        </nav>
        </div>