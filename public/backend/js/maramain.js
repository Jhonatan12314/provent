   $(function () {
          $('#demo-table').DataTable();
//                $('select').material_select();
                $('.dataTables_filter').empty(); // clears the content generated
                $('.dataTables_filter').append(
                        "<div class='input-field col s6 search-div right' style='width: 250px'>" +
                        "    <i class='material-icons search-icon'>search</i> "+
                        "    <input id='search-items' type='text' class='validate' />" +
                        "    <label for='icon_prefix' class='search-label'>Search</label>   "+
                        "</div>");

                $(document).on('keyup', "input[type='text']", function(){
                    var oTable = $('.dataTable').dataTable();
                    oTable.fnFilter($(this).val());
                });


        });

   
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