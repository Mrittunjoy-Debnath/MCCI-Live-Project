<aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.home')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Email Manage</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('show-email')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Admin Email </span></a></li>
                                <li class="sidebar-item"><a href="{{route('manage-email')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> User Email </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(1)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Invest & Income</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('manage-invest') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Manage Invest </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('show-income')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Daily Income </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(2)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Deposit</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('manage-deposit') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Manage Deposit </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('person-details')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Person Details </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(2)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Lebel && Task </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('task-all')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Task For All </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('manage-task')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Task </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(2)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Balance && Withdraw  </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('task-withdraw') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Withdraw Person </span></a></li>
                            </ul>
                        </li>


                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">Errors </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403 </span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404 </span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405 </span></a></li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500 </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
