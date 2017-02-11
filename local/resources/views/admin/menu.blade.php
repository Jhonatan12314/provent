
<header id="header">
    <div class="navbar">
        <nav>
            <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full waves-effect waves-light"><i class="material-icons">menu</i></a>
            <div class="nav-wrapper">
                <ul class="left">
                    <li>
                        <a href="{{url('admin/dashboard')}}" class="brand-logo"><img src="{{url('public/img/logo.png')}}" alt="SHOOTFILM"></a>
                    </li>
                </ul>
                <ul class="right hide-on-med-and-down">
                  
                    <li>
                        <a class='dropdown-button drop-down-profile relative-item' href='#' data-activates='dropdown3' data-beloworigin="true"><span class="profile-img-ribbon"></span><img class="responsive-img profile-img" src="{{url('public/img/profile.png')}}" alt="john"/><i class="zmdi zmdi-caret-down drop-down-icon"></i>{{$_SESSION['user']->name}}</a>
                        <ul id='dropdown3' class='create-dropdown dropdown-content'>
                            <li><a href="{{url('admin/logout')}}"><i class="material-icons dp48">input</i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<script>
    $('.button-collapse').sideNav({
        menuWidth: 240, // Default is 240
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
    $('.collapsible').collapsible();
    $('.notif-btn').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrain_width: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left' // Displays dropdown with edge aligned to the left of button
    });
    $('.drop-down-profile').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrain_width: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left' // Displays dropdown with edge aligned to the left of button
    });

    // autocomplete simulation
    var countries = [{value: "Alabama"}, {value: "Alaska"}, { value: "Arizona"}, {value: "Arkansas"}, {value: "California"},
        {value: "Colorado"}, {value: "Connecticut"}, {value: "District of Columbia"}, {value: "Delaware"}, {value: "Florida"},
        {value: "Georgia"}, {value: "Hawaii"}, {value: "Idaho"}, { value: "Indiana"}, {value: "Iowa"}, {value: "Kansas"}, {value: "Kentucky"},
        {value: "Louisiana"}, {value: "Maine"}
    ];
    var input = $('.search-top-bar #search');
    if (input.hasClass('autocomplete')) {
        var inputDiv = input.closest('div');
        var searchHtml = '<ul class="autocomplete-results hide">';
        for (var i = 0; i < countries.length; i++) {
            searchHtml += '<li class="result"><span>' + countries[i]['value'] + '</span></li>';
        }
        searchHtml += '</ul>';
        inputDiv.append(searchHtml);
        input.on('keyup', input, function() {
            var $val = input.val().trim(),
                    $select = $('.autocomplete-results');
            $select.css('width',input.width());
            if ($val != '') {
                $select.children('li').addClass('hide');
                $select.children('li').filter(function() {
                    $select.removeClass('hide');
                    var check = true;
                    for (var i in $val) {
                        if ($val[i].toLowerCase() !== $(this).text().toLowerCase()[i])
                            check = false;
                    }
                    return check ? $(this).text().toLowerCase().indexOf($val.toLowerCase()) !== -1 : false;
                }).removeClass('hide');
            } else {
                $select.children('li').addClass('hide');
            }
        });
        $('.result').click(function() {
            input.val($(this).text().trim());
            $('.result').addClass('hide');
        });
        $("#search-hover").click(function(e){
            $("#dropdown2").hide();
            $("#search").trigger("focus");
        });
    }
</script>
<style type="text/css">
    .activeMenu{
        background-color: #2E2E2E!important;
        
    }
    .activeMenu a{
        color:#FFF!important;
    }
    .activeMenu a:hover{
        color:#2E2E2E!important;
    }
</style>
<aside class="sidebar-left">
    <ul class="side-nav fixed clearfix left" id="nav-mobile">
        <li>
            <ul class="collapsible" data-collapsible="accordion">
                <li {{ ($route=="dashboard" ? 'class=activeMenu' : '') }}>
                    <a href="{{url('admin/dashboard')}}"><i class="zmdi zmdi-apps zmdi-hc-fw"></i>Dashboards </a>
                </li>
                <li {{ ($route=="gallery" ? 'class=activeMenu' : '') }}>
                    <a href="{{url('admin/gallery')}}"><i class="zmdi zmdi-camera"></i></i> Gallery </a>
                </li>
                <li {{ ($route=="brands" ? 'class=activeMenu' : '') }}>
                    <a href="{{url('admin/brands')}}"><i class="zmdi zmdi-store"></i></i> Brands </a>
                </li>
                  <li {{ ($route=="creators" ? 'class=activeMenu' : '') }}>
                    <a href="{{url('admin/creators')}}"><i class="zmdi zmdi-bookmark-outline"></i></i> Creators </a>
                </li>
                 <li  {{ ($route=="films" ? 'class=activeMenu' : '') }}>
                    <a href="{{url('admin/films')}}"><i class="zmdi zmdi-movie"></i> Films </a>
                </li>
                 <li {{ ($route=="news" ? 'class=activeMenu' : '') }} >
                    <a href="{{url('admin/news')}}"><i class="zmdi zmdi-globe-alt"></i> News </a>
                </li>
                 <li {{ ($route=="supporters" ? 'class=activeMenu' : '') }}>
                    <a href="{{url('admin/supporters')}}"><i class="zmdi zmdi-storage"></i> Supporters </a>
                </li>
               
            </ul>
        </li>
    </ul>
</aside>
<script>
    $('.button-collapse').sideNav({
        menuWidth: 240, // Default is 240
        edge: typeof ThemeSettings != "undefined" && ThemeSettings.getCookie('reading-direction') == 'rtl' ? 'right' :'left', // Choose the horizontal origin
        closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
    $('.collapsible').collapsible();
</script>





