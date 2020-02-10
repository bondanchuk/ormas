<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{site_url('assets/img/profile_small.jpg')}}"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{$this->session->userdata('NAMA')}}</span>
                            <span class="text-muted text-xs block">{{$this->session->userdata('LEVEL')}} <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{site_url('auth/logout')}}">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        ORMAS
                    </div>
                </li>
                <li class="@if($this->uri->segment(1) == 'dashboard')active@endif">
                    <a href="{{site_url('dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li class="@if($this->uri->segment(1) == 'ormas')active @endif">
                    <a href=""><i class="fa fa-group"></i> <span class="nav-label">Ormas</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{$this->uri->segment(2) == 'tambah' ? 'active': ''}}"><a href="{{site_url('ormas/tambah')}}">Tambah Data Ormas</a></li>
                        <li class="{{$this->uri->segment(2) == 'verif' ? 'active': ''}}"><a href="{{site_url('ormas/verif')}}">Verifikasi Data Ormas</a></li>
                        <li class="{{$this->uri->segment(1) == 'ormas' ? 'active': ''}}"><a href="{{site_url('ormas')}}">Data Ormas</a></li>
                    </ul>
                </li>
                <li class="@if($this->uri->segment(1) == 'auth' ||  $this->uri->segment(1) == 'pejabat')active @endif">
                    <a href=""><i class="fa fa-wrench"></i> <span class="nav-label">Master</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse @if($this->uri->segment(1) == 'auth' ||  $this->uri->segment(1) == 'pemeriksa' || $this->uri->segment(1) == 'pejabat') in @endif">
                        <li class="{{$this->uri->segment(1) == 'auth' ? 'active': ''}}"><a href="{{site_url('auth')}}">Akun</a></li>
                        <li class="{{$this->uri->segment(1) == 'pejabat' ? 'active': ''}}"><a href="{{site_url('pejabat')}}">Pejabat</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>