

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
              console.log(data);
            }
          });
    },

    show_user: function(email) {
        var user = athena.results.find(function(result) {
            return result.email === email;
        });

        if (user) {
            $("#user_picture").attr('src', user.picture.medium);
            $("#user_gender").html(user.gender);
            $("#user_location").html(user.location.street + '<br />' + user.location.city +
                '<br />' + user.location.state + '<br />' + user.location.sotcode);
            $("#user_email").html(user.email);
            $("#user_phone_number").html(user.phone);
        }
    }

};


