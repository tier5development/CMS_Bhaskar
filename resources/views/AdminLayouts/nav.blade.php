
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{route('logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">


                  
                    <li class="@if(Route::current()->getName()=='Admin_home'){{'active'}}@endif">
                  
                        <a href="{{route('Admin_home')}}"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>


     
                    <li class="@if(Route::current()->getname()=='createportfolios'||Route::current()->getname()=='showportfoliotable'){{'active'}}@endif">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-book"></i> Portfolio<i class="fa fa-fw fa-caret-down"></i> </a>
                         <ul id="demo">
                            <li class="@if(Route::current()->getName()=='createportfolios'){{'active'}}@endif"><a href="{{route('createportfolios')}}"><i class="fa fa-sm fa-plus"> Add</i></a></li>
                            <li class="@if(Route::current()->getName()=='showportfoliotable'){{'active'}}@endif"><a href="{{route('showportfoliotable')}}"><i class="fa fa-sm fa-table"> View Table</i></a></li>
                        </ul>
                    </li>
                   

   
                   <li class=" @if(Route::current()->getName()=='createtags'||Route::current()->getName()=='showtagtable'){{'active'}}@endif">
                        <a href="javascript:;" data-toggle="collapse" data-target="#tables"><i class="fa fa-fw fa-tags"></i> Tags<i class="fa fa-fw fa-caret-down"></i> </a>
                         <ul id="tables" class= "@if(Route::current()->getname()=='createtags'||Route::current()->getname()=='showtagtable'){{'collapsed in'}}@else{{'collapse'}}@endif">
                             
                   <li class="@if(Route::current()->getName()=='createtags'){{'active'}}@endif">
                    <a href="{{route('createtags')}}"><i class="fa fa-sm fa-plus"> Add</i></a>
                   </li>
                             
                   <li class="@if(Route::current()->getName()=='showtagtable'){{'active'}}@endif">
                   <a href="{{route('showtagtable')}}"><i class="fa fa-sm fa-table"> View Table</i></a>  
                    </li>
                    </ul>
                    </li>
                    
                   <li class="@if(Route::current()->getName()=='chatlogs'){{'active'}}@endif">
                  
                        <a href="{{route('chatlogs')}}"><i class="fa fa-fw fa-history"></i> Chat Logs</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

