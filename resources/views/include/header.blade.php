<div class="header">    
            <div class="header-content">
                <div class="header-left">
                    <ul>
                        <li class="icons position-relative"><a href="javascript:void(0)"><i class="icon-magnifier f-s-16"></i></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <div class="header-search" id="header-search">
                                        <!-- <form action="#"> -->
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                                </div>
                                            </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <ul>    
                        <li class="icons">
                            <a href="javascript:void(0)">
                                <i class="mdi mdi-bell"></i>
                                <div class="pulse-css"></div>
                            </a>
                            <!-- <div class="drop-down animated bounceInDown dropdown-notfication">
                                <div class="dropdown-content-heading">
                                                    <span class="pull-left">Notification</span>  
                                                    <a href="javascript:void()" class="pull-right text-white">View All</a>
                                                    <div class="clearfix"></div>
                                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="fa fa-check"></i></span>
                                                
                                                <div class="notification-content">
                                                    <div class="notification-heading">Lê Quốc Bình</div>
                                                    <span class="notification-text">vừa tham gia lớp 10 Tin.</span> 
                                                    <small class="notification-timestamp">20 May 2018, 15:32</small>
                                                </div>
                                            </a>
                                            <span class="notify-close"><i class="ti-close"></i>
                                                </span>
                                        </li>
                                        <li><a href="javascript:void()"><span class="mr-3 avatar-icon bg-success-lighten-2"><i class="fa fa-check"></i></span><div class="notification-content"><div class="notification-heading">Nguyễn Văn A</div><span class="notification-text"> Đã tham gia lớp 10A1.</span> <small class="notification-timestamp">20 May 2018, 15:32</small></div></a>
                                            <span class="notify-close"><i class="ti-close"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)" class="log-user">
                                <img style="height:30px" src="@if(Auth::user()->sex=='nam'){{asset('public/images/avt.png')}}@else {{asset('public/images/avt-2.png')}}@endif" alt=""> <span>{{Auth::user()->name}}</span>  <i class="fa fa-caret-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="{{route('profile')}}"><i class="icon-user"></i> <span>My Profile</span></a>
                                        </li>
                                        <li><a href="{{route('logout')}}"><i class="icon-power"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>