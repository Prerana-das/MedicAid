<div class="header_top">
    <div class="container-fluid no_padding">
        <div class="header_left">
            <a href="#"><p>MedicAid</p>
            </a>
        </div>
        <div class="admin_sidebar_menu">
            <div class="user_panel">
                <img src="{{asset('public/admin_asset/images/prof2.jpg')}}" alt="" />
                <p>Super Admin</p>
            </div>
            <div class="menu text-left">
                <ul>
                    <li><a href="{{action('Admin\AdminController@index')}}"><i class="fas fa-columns"></i>dashboard</a></li>
                    <li><a href="{{action('Admin\Age\AgeController@index')}}"><i class="far fa-user"></i>Age</a></li>
                    <li><a href="{{action('Admin\Gender\GenderController@index')}}"><i class="fab fa-accusoft"></i>Gender</a></li>
                    <li><a href="{{action('Admin\Symptom\SymptomController@index')}}"><i class="far fa-bookmark"></i>Symptoms</a></li>
                    <li><a href="{{action('Admin\Disease\DiseaseController@index')}}"><i class="fas fa-book-open"></i>Diseases</a></li>
                    <li><a href="{{action('Admin\Specialist\SpecialistController@index')}}"><i class="fas fa-book-open"></i>Specialist</a></li>
                    <li><a href=""><i class="fas fa-users"></i>All Users</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>