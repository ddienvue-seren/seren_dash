<!doctype html>
<html class="no-js" lang="en">

    <?php
    require './controller/connection.php';
    global $connect;
    ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Serendib World Wide - Admin Panel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                    {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            } else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }

//Custom Script Start

            function addUserToList() {

                var name = document.getElementById("userList").value;
//                alert(name);

                var addedUsers = document.getElementById("users").value;
                if (addedUsers == "") {

                    if (name != "Select User") {
//                        alert("No data");
                        document.getElementById("users").value = name;
                    } else {

                        alert("Please Select User");

                    }

                } else {

//                    alert("data full");
                    if (name != "Select User") {
//                        alert("No data");
                        var usersList = document.getElementById("users").value.split(",");
                        var histry = document.getElementById("users").value;

                        for (var i in usersList) {

                            if (usersList[i] != name) {
//                                alert("awa " + i);
                                document.getElementById("users").value = name + "," + histry;

                            } else {

                                alert("This User Already Added");
                                document.getElementById("users").value = histry;
                                break;

                            }

                        }

                    } else {

                        alert("Please Select User");

                    }

                }

            }

            function searchUsers(name) {

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
//                       alert(this.responseText);
                       if(this.responseText==""){
                          document.getElementById("userList").innerHTML=" <option>User Are Not Available</option>";
                       }else{
                            document.getElementById("userList").innerHTML=this.responseText;
                       }
                    }
                };
                xhttp.open("POST", "controller/searchUsersForMemo.php?name="+name, true);
                xhttp.send();

            }


        </script>
    </head>

    <body onload="setFieldAtributes()">
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button> </div>
                    <div class="header-block header-block-search hidden-sm-down">
                    </div>

                    <div class="header-block header-block-nav">

                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand"><img src="img/logo.png" height="30" width="80"/>
                                <!--div class="logo"> </div-->Admin Panel  </div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                                <li > <a href="index.html">
                                        <i class="fa fa-home"></i> Dashboard
                                    </a> </li>
                                <li> <a href="">
                                        <i class="fa fa-th-large"></i> Manage
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li> <a href="Add_Seller.html">Add seller

                                            </a> </li>
                                        <li> <a href="Min_Update.html">
                                                Update Mineral Prices
                                            </a> </li>
                                    </ul>
                                </li>
                                <li> <a href="">
                                        <i class="fa fa-bar-chart"></i>  Charts
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li><a href="Min_Pchange.html">Minerals Price Changing 
                                            </a> </li>
                                        <li> <a href="#">Other
                                            </a> </li>
                                    </ul>
                                </li>
                                <li class="active" > <a href="Memo.html">
                                        <i class="fa fa-pencil-square-o"></i> Memo
                                    </a> </li>


                            </ul>
                        </nav>
                    </div>


                    <footer class="sidebar-footer">
                        <ul class="nav metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-xs-4"> </div>
                                                <div class="col-xs-4"> <label class="title">fixed</label> </div>
                                                <div class="col-xs-4"> <label class="title">static</label> </div>
                                            </div>
                                            <div class="row hidden-md-down">
                                                <div class="col-xs-4"> <label class="title">Sidebar:</label> </div>
                                                <div class="col-xs-4"> <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
                                                        <span></span>
                                                    </label> </div>
                                                <div class="col-xs-4"> <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="">
                                                        <span></span>
                                                    </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Header:</label> </div>
                                                <div class="col-xs-4"> <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                                        <span></span>
                                                    </label> </div>
                                                <div class="col-xs-4"> <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="">
                                                        <span></span>
                                                    </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Footer:</label> </div>
                                                <div class="col-xs-4"> <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                                        <span></span>
                                                    </label> </div>
                                                <div class="col-xs-4"> <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="">
                                                        <span></span>
                                                    </label> </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li> <span class="color-item color-red" data-theme="red"></span> </li>
                                                <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                                                <li> <span class="color-item color-green active" data-theme=""></span> </li>
                                                <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                                                <li> <span class="color-item color-blue" data-theme="blue"></span> </li>
                                                <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul> <a href="">
                                    <i class="fa fa-cog"></i> Customize
                                </a> </li>
                            <li  > <a href="#">
                                    <i class="fa fa-user"></i> Add User
                                </a> </li>
                        </ul>
                    </footer>


                </aside>
                <article class="content">   
                    <div id="register1">
                        <div class="col-md-12">
                            <div class="card card-block sameheight-item">
                                <div class="title-block">
                                    <h1 > Memo </h1>
                                </div>
                                <form role="form" action="#" method="POST">

                                    <div class="col-xs-3"><label>Date </label><input type="text" class="form-control" placeholder="Date" align="right" disabled="true" value="<?php echo date("Y-m-d"); ?>"/> </div>

                                    <br/><br/><br/><br/>
                                    <div class="form-group"> <label class="control-label">From</label> <input type="text" class="form-control underlined" id="Sellname" name="Sellname" placeholder="Ex : Mr.W.Perera"> </div>
                                    <div class="form-group"> <label>To</label> <br/>

                                        <div class="col-md-6"><input type="text" class="form-control underlined"  name="Selladress" placeholder="Ex : Ms . A. Amarawathi" onkeyup="searchUsers(this.value);"> </div>
                                        <div class="form-group col-md-3"> 
                                            <select class="form-control" id="userList">
                                                <option>Select User</option>
                                                <?php
                                                $userDetails = "select * from user";
                                                if ($result = mysqli_query($connect, $userDetails)) {

                                                    // Fetch one and one row
                                                    while ($row = mysqli_fetch_row($result)) {
                                                        ?>

                                                        <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>

                                                        <?php
                                                    }
                                                    // Free result set
                                                    mysqli_free_result($result);
                                                }
                                                ?>


                                            </select> </div>

                                        <button type="button" class="btn btn-oval btn-primary" onclick="addUserToList();">Add</button>

                                        <input type="text" class="form-control" id="users" name="users" onkeypress="if (isNaN(this.value)) {
                                                    return false} else {
                                                    return false}" > 
                                    </div>
                                    <div class="form-group"> <label>CC </label> <input type="text" class="form-control underlined" id="Sellnumber" name="Sellcontact" placeholder="Ex : None"> </div>
                                    <div class="form-group"> <label>Re </label> <input type="text" class="form-control underlined" id="Sellnumber" name="Sellcontact" placeholder="Title"> </div>

                                    <br/><br/><br/>

                                    <fieldset class="form-group"> <label class="control-label" for="formGroupExampleInput7">Comments</label>
                                        <textarea rows="15" class="form-control" id="formGroupExampleInput7" placeholder="Comments "></textarea> 
                                    </fieldset>


                                    <div class="form-group"> <button type="submit" class="btn btn-primary">Upload</button> </div>
                                </form>
                            </div>
                        </div>
                    </div> 

                </article>


                <script src="js/vendor.js"></script>
                <script src="js/app.js"></script>
                </body>

                </html>