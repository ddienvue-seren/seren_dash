<!doctype html>
<html class="no-js" lang="en">

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
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
           
            /*function active() {
                var div = document.getElementById("register");
                    div.style.display = "none";
                }*/
                
            
            function test() {
                var register = document.getElementById("register1");
                var view = document.getElementById("view");
                var edit = document.getElementById("edit");
                
                register.style.display = "block" ;
                view.style.display = "none" ;
                edit.style.display = "none" ;
             }
            function register(){
                var register = document.getElementById("register1");
                var view = document.getElementById("view");
                var edit = document.getElementById("edit");
                register.style.display = "block" ;
                view.style.display = "none" ;
                edit.style.display = "none" ;
              
            }
            function view(){
                var register = document.getElementById("register1");
                var view = document.getElementById("view");
                var edit = document.getElementById("edit");
                register.style.display = "none" ;
                view.style.display = "block" ;
                edit.style.display = "none" ;
              
            }
            function edit(){
                var register = document.getElementById("register1");
                var view = document.getElementById("view");
                var edit = document.getElementById("edit");
                register.style.display = "none" ;
                view.style.display = "none" ;
                edit.style.display = "block" ;
              
            }
        </script>
    </head>

    <body onload="test()">
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
                                <li> <a href="index.html">
    						<i class="fa fa-home"></i> Dashboard
    					</a> </li>
                                        <li class="active open"> <a href="">
    						<i class="fa fa-th-large"></i> Manage
    						<i class="fa arrow"></i>
    					</a>
                                    <ul>
                                        <li class="active"> <a href="Add_seller.html">Add Seller
    								
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
                               <li> <a href="Memo.html">
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
                        </ul>
                    </footer>

           
                </aside>
                <article class="content">
                    <div class="title-block">
                        <button onclick="register()" type="button" class="btn btn-primary">Register</button>
                        <button onclick="view()" type="button" class="btn btn-primary">View</button>
                        <button onclick="edit()" type="button" class="btn btn-primary">Edit</button>
                    </div>
                    <div id="register1">
                   <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <div class="title-block">
                                <h3 class="title"> Register Seller </h3>
                            </div>
                            <form role="form" action="#" method="POST">
                                
                                <div class="form-group"> <label class="control-label">Seller Name</label> <input type="text" class="form-control underlined" id="Sellname" name="Sellname" placeholder="Enter Saller Name"> </div>
                                <div class="form-group"> <label>Address</label> <input type="text" class="form-control underlined" id="SellAdress" name="Selladress" placeholder="Enter Address"> </div>
                                <div class="form-group"> <label>Contact Number</label> <input type="text" class="form-control underlined" id="Sellnumber" name="Sellcontact" placeholder="Enter Contact"> </div>
                               <div class="form-group"> <label>Sell Product</label> <input type="text" class="form-control underlined" id="Sellnumber" name="Sellcontact" placeholder="Enter Product"> </div>
                               
                                <div class="form-group"> <button type="submit" class="btn btn-primary">Register</button> </div>
                            </form>
                        </div>
                    </div>
                </div> 
                    <div id="view">
                        <div class="title-block">
                           <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Sellers </h3>
                                        </div>
                                        <section class="example">
                                            <table class="table table-inverse">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </section>
                        </div>
                    </div>
                    <div id="edit">
                        <div class="title-block">
                            <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <div class="title-block">
                                <h3 class="title"> Edit Seller </h3>
                                 
                            </div>
                           
                            <div class="col-md-6">
                            <form role="form" action="#" method="POST">
                                
                                <div class="form-group"> <label class="control-label">Seller Name</label>  <input type="text" class="form-control underlined" id="Sellname" name="Sellname" placeholder="Enter Saller Name"> </div>
                              
                                <div class="form-group"> <button type="Search" class="btn btn-primary">Search</button> </div>
                            </form>
                            </div>
                            
                            <div class="col-md-6">
                                
                                <div class="form-group"> <select class="form-control form-control-lg">
							<option>Option one</option>
							<option>Option two</option>
							<option>Option three</option>
							<option>Option four</option>
						</select> </div>
                                
                            </div>
                        </div>
                    </div>
                            
                        </div>
                    </div>
                </article>

                <footer class="footer">
                    <div class="footer-block author">
                        
                    </div>
                </footer>

        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>

</html>