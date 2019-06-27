<!DOCTYPE>
<html>
    <head>
        <title>Athena's Test (by Miguel Arturo)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Front End Test" />
        <meta name="keywords" content="Test" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="css/materialize.min.css" rel="stylesheet" media="screen" />
        <link href="css/global.css" rel="stylesheet" />
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/global.js"></script>
    </head>
    <body>
        <div class="main">
            <div class="row">
                <div class="col s12 m8">
                    <h3>Users</h3>
                    <p>If you want to get contact information to specific user, just select group and them select him from the list below</p>
                    <div class="row">
                        <div class="col s12">
                            <div style="display: inline-block">Select group of users:</div>
                            <div style="display: inline-block">
                                <select id="data_group" onchange="athena.get_group(this);" class="browser-default">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="users">Users</option>
                                    <option value="developers">Developers</option>
                                    <option value="designers">Designers</option>
                                    <option value="managers">Managers</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="users" class="row"></div>
                </div>
                <div class="col s12 m4">
                    <div class="row user_data">
                        <div id="picture_background" class="col s12">
                            &nbsp;
                        </div>
                        <div class="picture_content">
                           <img id="user_picture" src="img/user.png" class="circle" /><br/><br/>
                           <span id="user_name" class="white-text capitalize">&nbsp;</span><br/>
                           <span id="user_group" class="white-text capitalize">&nbsp;</span>
                        </div>
                        <div id="information" style="display: none;">
                            <div class="col s12">
                                <span>Gender</span>
                                <h4 id="user_gender" class="capitalize"></h4>
                            </div>
                            <div class="col s12">
                                <span>Location</span>
                                <h4 id="user_location" class="capitalize"></h4>
                            </div>
                            <div class="col s12">
                                <span>Email Address</span>
                                <h4 id="user_email"></h4>
                            </div>
                            <div class="col s12">
                                <span>Phone Number</span>
                                <h4 id="user_phone_number"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="example" class="hide">
                <div class="col s12 m6 user_badge">
                    <div onclick="athena.show_user('@user_id@', this);" class="user_badge_content">
                        <img src="@srcimg@" class="circle image_badge" />
                        <span class="grey-text text-darken-2 capitalize">@name@</span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>