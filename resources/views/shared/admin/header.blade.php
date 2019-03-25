<div class="header_right">
    <ul>
        <li><a href="#"></a>hloo</li>
        <li><a href="#"><img src="{{asset('public/admin_asset/images/user.jpg')}}" alt="" /><i class="fas fa-arrow-down"></i>
            </a>
            <ul>
                <li><a href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">logout</a></li>
                <form id="logout-form" action="" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </li>
    </ul>
</div>