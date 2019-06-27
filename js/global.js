

var athena = {
    results: null,

    get_group: function(siht) {
        var content = $("#example").html();;
        $.ajax({
            url: 'https://randomuser.me/api/?results=20&seed=' + $(siht).val(),
            dataType: 'json',
            success: function(data) {
                $('#users').html('');
                athena.results = data.results;

                athena.results.forEach(function(result) {
                    $('#users').append(content.replace("@srcimg@", result.picture.thumbnail)
                        .replace("@user_id@", result.email)
                        .replace("@name@", result.name.first + ' ' + result.name.last));
                });
            }
          });
    },

    show_user: function(email, siht) {
        var user = athena.results.find(function(result) {
            return result.email === email;
        });

        $('#users').find('.user_badge_content.active').each(function() {
            $(this).removeClass('active');
        });

        if (user) {
            $(siht).addClass('active');
            $("#information").show();
            $("#picture_background").css("background-image", "url(" + user.picture.medium + ")");
            $("#user_picture").attr('src', user.picture.medium);
            $("#user_name").html(user.name.first + ' ' + user.name.last);
            $("#user_group").html($('#data_group').val());
            $("#user_gender").html(user.gender);
            $("#user_location").html(user.location.street + '<br />' + user.location.city +
                '<br />' + user.location.state + '<br />' + user.location.sotcode);
            $("#user_email").html(user.email);
            $("#user_phone_number").html(user.phone);
        }
    }

};


