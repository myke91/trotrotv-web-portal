<aside>
        {{ Request::path() }}
    <div id="sidebar"  class="nav-collapse ">
        <ul class="sidebar-menu">

            <li class="{{ Request::path() == '/' ? 'active' : '' }}">
                <a class="" href="/">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu {{ Request::path() == 'users' ? 'active' : '' }}">
                <a class="" href="{{route('users')}}">
                    <i class="icon_group"></i>
                    <span>Users</span>

                </a>
            </li>
            <li class="sub-menu {{ Request::path() == 'stations' ? 'active' : '' }}">
                <a class="" href="{{route('stations')}}">
                    <i class="icon_piechart"></i>
                    <span>Stations</span>

                </a>
            </li>
            <li class="sub-menu {{ Request::path() == 'brands' ? 'active' : '' }}">
                <a class="" href="{{route('brands')}}">
                    <i class="icon_piechart"></i>
                    <span>Brands</span>

                </a>
            </li>
            <li class="sub-menu {{ Request::path() == 'vehicles' ? 'active' : '' }}">
                <a class="" href="{{route('vehicles')}}">
                    <i class="icon_piechart"></i>
                    <span>Vehicles</span>

                </a>
            </li>
            <li class="sub-menu {{ Request::path() == 'questions' ? 'active' : '' }}">
                <a class="" href="{{route('questions')}}">
                    <i class="icon_piechart"></i>
                    <span>Questions</span>

                </a>
            </li>
            <li class="sub-menu {{ Request::path() == 'answers' ? 'active' : '' }}">
                <a class="" href="{{route('answers')}}">
                    <i class="icon_piechart"></i>
                    <span>Answers</span>

                </a>
            </li>
            <li class="sub-menu {{ Request::path() == 'survey' ? 'active' : '' }}">
                <a class="" href="{{route('survey')}}">
                    <i class="icon_piechart"></i>
                    <span>Surveys</span>

                </a>
            </li>
            <li class="sub-menu {{ Request::path() == 'reports' ? 'active' : '' }}">
                <a class="" href="{{route('reports')}} ">
                    <i class="icon_piechart"></i>
                    <span>Reports</span>

                </a>

            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>