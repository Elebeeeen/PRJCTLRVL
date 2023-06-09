
<!-- for employee-->
@role('employee')
<li class="nav-item">
    <a href="/leaveform/create" class="nav-link {{ Request::is('leaveform/create') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file "></i>
        <p>Leave Form</p>
    </a>
</li>

<li class="nav-item">
    <a href="/leaveform" class="nav-link {{ Request::is('leaveform') ? 'active' : '' }}">
        <i class="nav-icon fas fa-folder-open"></i>
        <p>List of Leave Application</p>
    </a>
</li>

@endrole



<!-- for hr -->

@role('h_r')

<li class="nav-item">
    <a href="/humanresource" class="nav-link {{ Request::is('humanresource') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>


<div class="sidenav">
    <a class="dropdown-btn nav-link"><i class="nav-icon far fa-edit"></i> For Approve <i class="fa fa-caret-down"></i>
        <div class="dropdown-container">
            <a href="/accountapplication">Account</a>
            <a href="/leaveapplication">Leave Application (Employee)</a>
            <a href="/leaveApplicationDivisionChief">Leave Application (Division)</a>
        </div>
</div>



@endrole




<!-- for division chief -->
@role('division_chief')

<li class="nav-item">
    <a href="/divisionchief" class="nav-link {{ Request::is('divisionchief') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <!--<a href="/leaveform/create" class="nav-link {{ Request::is('leaveform/create') ? 'active' : '' }}"> -->
    <a href="/divisionchief/create" class="nav-link {{ Request::is('divisionchief/create') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file "></i>
        <p>Leave Form</p>
    </a>
</li>


<li class="nav-item">
    <a href="/divisionlist" class="nav-link {{ Request::is('divisionlist') ? 'active' : '' }}">
        <i class="nav-icon fas fa-folder-open"></i>
        <p>List of Leave Application</p>
    </a>
</li>

<div class="sidenav">
    <a class="dropdown-btn nav-link"><i class="nav-icon far fa-edit"></i> For Approve <i class="fa fa-caret-down"></i>
        <div class="dropdown-container">
            <a href="/divemplist">Leave Application</a>
        </div>

</div>

@endrole

<!-- for director -->

@role('director')

<li class="nav-item">
    <a href="/director" class="nav-link {{ Request::is('director') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>


<div class="sidenav">
    <a class="dropdown-btn nav-link"><i class="nav-icon far fa-edit"></i> For Approve <i class="fa fa-caret-down"></i>
        <div class="dropdown-container">
            <a href="/leaveapplicationDir">Leave Application (Employee)</a>
            <a href="/leaveApplicationDivisionChief1">Leave Application (Division)</a>
        </div>
</div>



@endrole

<!-- for head HR -->

@role('head_officer')

<li class="nav-item">
    <a href="/headHR" class="nav-link {{ Request::is('headHR') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>   


<div class="sidenav">
    <a class="dropdown-btn nav-link"><i class="nav-icon far fa-edit"></i> For Approve <i class="fa fa-caret-down"></i>
        <div class="dropdown-container">
            <a href="/leaveapplicationHead">Leave Application (Employee)</a>
            <a href="/leaveapplicationHead1">Leave Application (Division)</a>
        </div>
</div>



@endrole



<style>
    .sidenav a,
    .dropdown-btn {
        padding: 6px 8px 6px 20px;
        text-decoration: none;
        display: block;

        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;

    }

    p{
        font-size: 15px;
    }

    .dropdown-container {
        display: none;
        background-color: #262620;
        padding-bottom: 8px;
        padding-left: 8px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 390px;
        }
    }
</style>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>

<!-- <li class="nav-item">
    <a href="/humanresource" class="nav-link {{ Request::is('humanresource') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Leave Application</p>
    </a>
</li> -->