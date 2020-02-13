
@if($this->session->userdata('login_status') == TRUE)
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{site_url('assets/img/profile_small.jpg')}}"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{$this->session->userdata('NAMA')}}</span>
                        </a>
                    </div>
                    <div class="logo-element">
                        ORMAS
                    </div>
                </li>
                <li class="@if($this->uri->segment(1) == 'dashboard')active@endif">
                    <a href="{{site_url('dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li class="@if($this->uri->segment(1) == 'ormas')active @endif">
                    <a href=""><i class="fa fa-group"></i> <span class="nav-label">Data Ormas</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{$this->uri->segment(1) == 'ormas' ? 'active': ''}}"><a href="{{site_url('ormas')}}">Data Ormas</a></li>
                    </ul>
                </li>
                <li class="@if($this->uri->segment(1) == 'auth' ||  $this->uri->segment(1) == 'pejabat')active @endif">
                    <a href=""><i class="fa fa-wrench"></i> <span class="nav-label">Manajemen Data</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse @if($this->uri->segment(1) == 'auth' ||  $this->uri->segment(1) == 'pemeriksa' || $this->uri->segment(1) == 'pejabat') in @endif">
                        <li class="{{$this->uri->segment(1) == 'pejabat' ? 'active': ''}}"><a href="{{site_url('pejabat')}}">Pejabat</a></li>    
                        <li class="{{$this->uri->segment(1) == 'auth' ? 'active': ''}}"><a href="{{site_url('auth')}}">Akun</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>
    @else
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{site_url('assets/img/profile_small.jpg')}}"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Tamu</span>
                        </a>
                    </div>
                    <div class="logo-element">
                        ORMAS
                    </div>
                </li>
                <li class="@if($this->uri->segment(1) == 'dashboard')active@endif">
                    <a href="{{site_url('dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Lihat Data Ormas</span></a>
                </li>

            </ul>

        </div>
    </nav>
    @endif