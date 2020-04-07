
<?php
    $route = (Route::currentRouteName());
?>
<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li class="mega-menu mega-menu-lg">
                        <a  href="{{route('gvDashboard')}}" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i><span class="nav-text">Dashboard</span>
                        </a>
                        
                    </li>
                    <li class="nav-label">Quản lý</li>
                    <li class="mega-menu mega-menu-lg">
                        <a href="{{route('manageClassroom')}}" aria-expanded="false">
                            <i class="fa fa-bolt"></i><span class="nav-text">Quản lý lớp học</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-lg">
                        <a href="{{route('manageQuestion')}}" aria-expanded="false">
                        <i class="fa fa-plus"></i><span class="nav-text">Quản lý câu hỏi</span>
                        </a>
                    </li>
                    <li class="nav-label">Tài khoản</li>
                    <li class="mega-menu mega-menu-lg">
                        <a href="{{route('profile')}}" aria-expanded="false">
                        <i class="fa fa-edit"></i><span class="nav-text">Chỉnh sửa thông tin</span>
                        </a>
                    </li>
                    <!-- <li class="mega-menu mega-menu-lg">
                        <a href="javascript:void()" aria-expanded="false">
                        
                        <i class="fa fa-unlock"></i><span class="nav-text">Thay đổi mật khẩu</span>
                        </a>
                    </li> -->
                    
                </ul>
            </div>
        </div>