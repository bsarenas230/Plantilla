
<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

    <head>
        <meta charset="utf-8" />
        <title>Modals | Ubold - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Theme Config Js -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Theme Config Js -->
		<script src="{{url('js/head.js')}}"></script>

		<!-- Bootstrap css -->
		<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

		<!-- App css -->
		<link href="{{url('css/app.min.css')}}" rel="stylesheet" type="text/css" />

		<!-- Icons css -->
		<link href="{{url('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- ========== Menu ========== -->
            <div class="app-menu">

                <!-- Brand Logo -->
                <div class="logo-box">
                    <!-- Brand Logo Light -->
                    <a href="index.html" class="logo-light">
                        <img src="assets/images/logo-light.png" alt="logo" class="logo-lg">
                        <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                    </a>

                    <!-- Brand Logo Dark -->
                    <a href="index.html" class="logo-dark">
                        <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg">
                        <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                    </a>
                </div>

                <!-- menu-left -->
                <div class="scrollbar">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out me-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted mb-0">Admin Head</p>
                    </div>

                    <!--- Menu -->
                    <ul class="menu">

                        <li class="menu-title">Navigation</li>

                        <li class="menu-item">
                            <a href="#menuDashboards" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="airplay"></i></span>
                                <span class="menu-text"> Dashboards </span>
                                <span class="badge bg-success rounded-pill ms-auto">4</span>
                            </a>
                            <div class="collapse" id="menuDashboards">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="index.html" class="menu-link">
                                            <span class="menu-text">Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="dashboard-2.html" class="menu-link">
                                            <span class="menu-text">Dashboard 2</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="dashboard-3.html" class="menu-link">
                                            <span class="menu-text">Dashboard 3</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="dashboard-4.html" class="menu-link">
                                            <span class="menu-text">Dashboard 4</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title">Apps</li>

                        <li class="menu-item">
                            <a href="apps-calendar.html" class="menu-link">
                                <span class="menu-icon"><i data-feather="calendar"></i></span>
                                <span class="menu-text"> Calendar </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="apps-chat.html" class="menu-link">
                                <span class="menu-icon"><i data-feather="message-square"></i></span>
                                <span class="menu-text"> Chat </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="shopping-cart"></i></span>
                                <span class="menu-text"> Ecommerce </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuEcommerce">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="ecommerce-dashboard.html" class="menu-link">
                                            <span class="menu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ecommerce-products.html" class="menu-link">
                                            <span class="menu-text">Products</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ecommerce-product-detail.html" class="menu-link">
                                            <span class="menu-text">Product Detail</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ecommerce-product-edit.html" class="menu-link">
                                            <span class="menu-text">Add Product</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ecommerce-customers.html" class="menu-link">
                                            <span class="menu-text">Customers</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ecommerce-orders.html" class="menu-link">
                                            <span class="menu-text">Orders</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ecommerce-order-detail.html" class="menu-link">
                                            <span class="menu-text">Order Detail</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ecommerce-sellers.html" class="menu-link">
                                            <span class="menu-text">Sellers</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ecommerce-cart.html" class="menu-link">
                                            <span class="menu-text">Shopping Cart</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ecommerce-checkout.html" class="menu-link">
                                            <span class="menu-text">Checkout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuCrm" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="users"></i></span>
                                <span class="menu-text"> CRM </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuCrm">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="crm-dashboard.html" class="menu-link">
                                            <span class="menu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="crm-contacts.html" class="menu-link">
                                            <span class="menu-text">Contacts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="crm-opportunities.html" class="menu-link">
                                            <span class="menu-text">Opportunities</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="crm-leads.html" class="menu-link">
                                            <span class="menu-text">Leads</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="crm-customers.html" class="menu-link">
                                            <span class="menu-text">Customers</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuEmail" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="mail"></i></span>
                                <span class="menu-text"> Email </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuEmail">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="email-inbox.html" class="menu-link">
                                            <span class="menu-text">Inbox</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="email-read.html" class="menu-link">
                                            <span class="menu-text">Read Email</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="email-compose.html" class="menu-link">
                                            <span class="menu-text">Compose Email</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="email-templates.html" class="menu-link">
                                            <span class="menu-text">Email Templates</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="apps-social-feed.html" class="menu-link">
                                <span class="menu-icon"><i data-feather="rss"></i></span>
                                <span class="menu-text"> Social Feed </span>
                                <span class="badge bg-pink ms-auto">Hot</span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="apps-companies.html" class="menu-link">
                                <span class="menu-icon"><i data-feather="activity"></i></span>
                                <span class="menu-text"> Companies </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="#menuProjects" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="briefcase"></i></span>
                                <span class="menu-text"> Projects </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuProjects">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="project-list.html" class="menu-link">
                                            <span class="menu-text">List</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="project-detail.html" class="menu-link">
                                            <span class="menu-text">Detail</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="project-create.html" class="menu-link">
                                            <span class="menu-text">Create Project</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuTasks" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="clipboard"></i></span>
                                <span class="menu-text"> Tasks </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuTasks">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="task-list.html" class="menu-link">
                                            <span class="menu-text">List</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="task-details.html" class="menu-link">
                                            <span class="menu-text">Details</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="task-kanban-board.html" class="menu-link">
                                            <span class="menu-text">Kanban Board</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuContacts" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="book"></i></span>
                                <span class="menu-text"> Contacts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuContacts">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="contacts-list.html" class="menu-link">
                                            <span class="menu-text">Members List</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="contacts-profile.html" class="menu-link">
                                            <span class="menu-text">Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuTickets" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="aperture"></i></span>
                                <span class="menu-text"> Tickets </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuTickets">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="tickets-list.html" class="menu-link">
                                            <span class="menu-text">List</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tickets-detail.html" class="menu-link">
                                            <span class="menu-text">Detail</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="apps-file-manager.html" class="menu-link">
                                <span class="menu-icon"><i data-feather="folder-plus"></i></span>
                                <span class="menu-text"> File Manager </span>
                            </a>
                        </li>

                        <li class="menu-title">Custom</li>

                        <li class="menu-item">
                            <a href="#menuAuth" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="file-text"></i></span>
                                <span class="menu-text"> Auth Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse collapse-md" id="menuAuth">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="auth-login.html" class="menu-link">
                                            <span class="menu-text">Log In</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-login-2.html" class="menu-link">
                                            <span class="menu-text">Log In 2</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-register.html" class="menu-link">
                                            <span class="menu-text">Register</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-register-2.html" class="menu-link">
                                            <span class="menu-text">Register 2</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-signin-signup.html" class="menu-link">
                                            <span class="menu-text">Signin - Signup</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-signin-signup-2.html" class="menu-link">
                                            <span class="menu-text">Signin - Signup 2</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-recoverpw.html" class="menu-link">
                                            <span class="menu-text">Recover Password</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-recoverpw-2.html" class="menu-link">
                                            <span class="menu-text">Recover Password 2</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-lock-screen.html" class="menu-link">
                                            <span class="menu-text">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-lock-screen-2.html" class="menu-link">
                                            <span class="menu-text">Lock Screen 2</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-logout.html" class="menu-link">
                                            <span class="menu-text">Logout</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-logout-2.html" class="menu-link">
                                            <span class="menu-text">Logout 2</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-confirm-mail.html" class="menu-link">
                                            <span class="menu-text">Confirm Mail</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-confirm-mail-2.html" class="menu-link">
                                            <span class="menu-text">Confirm Mail 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="package"></i></span>
                                <span class="menu-text"> Extra Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuExpages">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="pages-starter.html" class="menu-link">
                                            <span class="menu-text">Starter</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-timeline.html" class="menu-link">
                                            <span class="menu-text">Timeline</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-sitemap.html" class="menu-link">
                                            <span class="menu-text">Sitemap</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-invoice.html" class="menu-link">
                                            <span class="menu-text">Invoice</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-faqs.html" class="menu-link">
                                            <span class="menu-text">FAQs</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-search-results.html" class="menu-link">
                                            <span class="menu-text">Search Results</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-pricing.html" class="menu-link">
                                            <span class="menu-text">Pricing</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-maintenance.html" class="menu-link">
                                            <span class="menu-text">Maintenance</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-coming-soon.html" class="menu-link">
                                            <span class="menu-text">Coming Soon</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-gallery.html" class="menu-link">
                                            <span class="menu-text">Gallery</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-404.html" class="menu-link">
                                            <span class="menu-text">Error 404</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-404-two.html" class="menu-link">
                                            <span class="menu-text">Error 404 Two</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-404-alt.html" class="menu-link">
                                            <span class="menu-text">Error 404-alt</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-500.html" class="menu-link">
                                            <span class="menu-text">Error 500</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-500-two.html" class="menu-link">
                                            <span class="menu-text">Error 500 Two</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="layout"></i></span>
                                <span class="menu-text"> Layouts </span>
                                <span class="badge bg-blue ms-auto">New</span>
                            </a>
                            <div class="collapse" id="menuLayouts">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="layouts-horizontal.html" target="_blank" class="menu-link">
                                            <span class="menu-text">Horizontal</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="layouts-detached.html" target="_blank" class="menu-link">
                                            <span class="menu-text">Detached</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="layouts-two-column.html" target="_blank" class="menu-link">
                                            <span class="menu-text">Two Column Menu</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="layouts-two-tone-icons.html" target="_blank" class="menu-link">
                                            <span class="menu-text">Two Tones Icons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="layouts-preloader.html" target="_blank" class="menu-link">
                                            <span class="menu-text">Preloader</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title">Components</li>

                        <li class="menu-item">
                            <a href="#menuBaseui" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="pocket"></i></span>
                                <span class="menu-text"> Base UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse collapse-md" id="menuBaseui">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="ui-buttons.html" class="menu-link">
                                            <span class="menu-text">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-cards.html" class="menu-link">
                                            <span class="menu-text">Cards</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-avatars.html" class="menu-link">
                                            <span class="menu-text">Avatars</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-portlets.html" class="menu-link">
                                            <span class="menu-text">Portlets</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-tabs-accordions.html" class="menu-link">
                                            <span class="menu-text">Tabs & Accordions</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-modals.html" class="menu-link">
                                            <span class="menu-text">Modals</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-progress.html" class="menu-link">
                                            <span class="menu-text">Progress</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-notifications.html" class="menu-link">
                                            <span class="menu-text">Notifications</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-offcanvas.html" class="menu-link">
                                            <span class="menu-text">Offcanvas</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-placeholders.html" class="menu-link">
                                            <span class="menu-text">Placeholders</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-spinners.html" class="menu-link">
                                            <span class="menu-text">Spinners</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-images.html" class="menu-link">
                                            <span class="menu-text">Images</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-carousel.html" class="menu-link">
                                            <span class="menu-text">Carousel</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-list-group.html" class="menu-link">
                                            <span class="menu-text">List Group</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-video.html" class="menu-link">
                                            <span class="menu-text">Embed Video</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-dropdowns.html" class="menu-link">
                                            <span class="menu-text">Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-ribbons.html" class="menu-link">
                                            <span class="menu-text">Ribbons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-tooltips-popovers.html" class="menu-link">
                                            <span class="menu-text">Tooltips & Popovers</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-general.html" class="menu-link">
                                            <span class="menu-text">General UI</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-typography.html" class="menu-link">
                                            <span class="menu-text">Typography</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-grid.html" class="menu-link">
                                            <span class="menu-text">Grid</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuExtendedui" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="layers"></i></span>
                                <span class="menu-text"> Extended UI </span>
                                <span class="badge bg-info ms-auto">Hot</span>
                            </a>
                            <div class="collapse" id="menuExtendedui">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="extended-nestable.html" class="menu-link">
                                            <span class="menu-text">Nestable List</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-range-slider.html" class="menu-link">
                                            <span class="menu-text">Range Slider</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-dragula.html" class="menu-link">
                                            <span class="menu-text">Dragula</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-animation.html" class="menu-link">
                                            <span class="menu-text">Animation</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-sweet-alert.html" class="menu-link">
                                            <span class="menu-text">Sweet Alert</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-tour.html" class="menu-link">
                                            <span class="menu-text">Tour Page</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-scrollspy.html" class="menu-link">
                                            <span class="menu-text">Scrollspy</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-loading-buttons.html" class="menu-link">
                                            <span class="menu-text">Loading Buttons</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="widgets.html" class="menu-link">
                                <span class="menu-icon"><i data-feather="gift"></i></span>
                                <span class="menu-text"> Widgets </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="#menuIcons" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="cpu"></i></span>
                                <span class="menu-text"> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuIcons">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="icons-material-symbols.html" class="menu-link">
                                            <span class="menu-text">Material Symbols </span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-two-tone.html" class="menu-link">
                                            <span class="menu-text">Two Tone Icons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-feather.html" class="menu-link">
                                            <span class="menu-text">Feather Icons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-mdi.html" class="menu-link">
                                            <span class="menu-text">Material Design Icons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-dripicons.html" class="menu-link">
                                            <span class="menu-text">Dripicons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-font-awesome.html" class="menu-link">
                                            <span class="menu-text">Font Awesome 5</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-themify.html" class="menu-link">
                                            <span class="menu-text">Themify</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-simple-line.html" class="menu-link">
                                            <span class="menu-text">Simple Line</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-weather.html" class="menu-link">
                                            <span class="menu-text">Weather</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuForms" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="bookmark"></i></span>
                                <span class="menu-text"> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuForms">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="forms-elements.html" class="menu-link">
                                            <span class="menu-text">General Elements</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-advanced.html" class="menu-link">
                                            <span class="menu-text">Advanced</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-validation.html" class="menu-link">
                                            <span class="menu-text">Validation</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-pickers.html" class="menu-link">
                                            <span class="menu-text">Pickers</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-wizard.html" class="menu-link">
                                            <span class="menu-text">Wizard</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-masks.html" class="menu-link">
                                            <span class="menu-text">Masks</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-quilljs.html" class="menu-link">
                                            <span class="menu-text">Quilljs Editor</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-file-uploads.html" class="menu-link">
                                            <span class="menu-text">File Uploads</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-x-editable.html" class="menu-link">
                                            <span class="menu-text">X Editable</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-image-crop.html" class="menu-link">
                                            <span class="menu-text">Image Crop</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuTables" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="grid"></i></span>
                                <span class="menu-text"> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuTables">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="tables-basic.html" class="menu-link">
                                            <span class="menu-text">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-datatables.html" class="menu-link">
                                            <span class="menu-text">Data Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-editable.html" class="menu-link">
                                            <span class="menu-text">Editable Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-responsive.html" class="menu-link">
                                            <span class="menu-text">Responsive Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-footables.html" class="menu-link">
                                            <span class="menu-text">FooTable</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-bootstrap.html" class="menu-link">
                                            <span class="menu-text">Bootstrap Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-tablesaw.html" class="menu-link">
                                            <span class="menu-text">Tablesaw Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-jsgrid.html" class="menu-link">
                                            <span class="menu-text">JsGrid Tables</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuCharts" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="bar-chart-2"></i></span>
                                <span class="menu-text"> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuCharts">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="charts-apex.html" class="menu-link">
                                            <span class="menu-text">Apex Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-flot.html" class="menu-link">
                                            <span class="menu-text">Flot Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-morris.html" class="menu-link">
                                            <span class="menu-text">Morris Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-chartjs.html" class="menu-link">
                                            <span class="menu-text">Chartjs Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-peity.html" class="menu-link">
                                            <span class="menu-text">Peity Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-chartist.html" class="menu-link">
                                            <span class="menu-text">Chartist Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-c3.html" class="menu-link">
                                            <span class="menu-text">C3 Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-sparklines.html" class="menu-link">
                                            <span class="menu-text">Sparklines Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-knob.html" class="menu-link">
                                            <span class="menu-text">Jquery Knob Charts</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="map"></i></span>
                                <span class="menu-text"> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuMaps">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="maps-google.html" class="menu-link">
                                            <span class="menu-text">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="maps-vector.html" class="menu-link">
                                            <span class="menu-text">Vector Maps</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="maps-mapael.html" class="menu-link">
                                            <span class="menu-text">Mapael Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuMultilevel" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="share-2"></i></span>
                                <span class="menu-text"> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuMultilevel">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="#menuMultilevel2" data-bs-toggle="collapse" class="menu-link">
                                            <span class="menu-text"> Second Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="menuMultilevel2">
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 1</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#menuMultilevel3" data-bs-toggle="collapse" class="menu-link">
                                            <span class="menu-text">Third Level</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="menuMultilevel3">
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 1</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#menuMultilevel4" data-bs-toggle="collapse" class="menu-link">
                                                        <span class="menu-text">Item 2</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="menuMultilevel4">
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="javascript: void(0);" class="menu-link">
                                                                    <span class="menu-text">Item 1</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="javascript: void(0);" class="menu-link">
                                                                    <span class="menu-text">Item 2</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!--- End Menu -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left menu End ========== -->





            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- ========== Topbar Start ========== -->
                <div class="navbar-custom">
                    <div class="topbar">
                        <div class="topbar-menu d-flex align-items-center gap-1">

                            <!-- Topbar Brand Logo -->
                            <div class="logo-box">
                                <!-- Brand Logo Light -->
                                <a href="index.html" class="logo-light">
                                    <img src="assets/images/logo-light.png" alt="logo" class="logo-lg">
                                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                                </a>

                                <!-- Brand Logo Dark -->
                                <a href="index.html" class="logo-dark">
                                    <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg">
                                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                                </a>
                            </div>

                            <!-- Sidebar Menu Toggle Button -->
                            <button class="button-toggle-menu">
                                <i class="mdi mdi-menu"></i>
                            </button>

                            <!-- Dropdown Menu -->
                            <div class="dropdown d-none d-xl-block">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    Create New
                                    <i class="mdi mdi-chevron-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="fe-briefcase me-1"></i>
                                        <span>New Projects</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="fe-user me-1"></i>
                                        <span>Create Users</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="fe-bar-chart-line- me-1"></i>
                                        <span>Revenue Report</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="fe-headphones me-1"></i>
                                        <span>Help & Support</span>
                                    </a>

                                </div>
                            </div>

                            <!-- Mega Menu Dropdown -->
                            <div class="dropdown dropdown-mega d-none d-xl-block">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    Mega Menu
                                    <i class="mdi mdi-chevron-down  ms-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-megamenu">
                                    <div class="row">
                                        <div class="col-sm-8">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h5 class="text-dark mt-0">UI Components</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="widgets.html">Widgets</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-nestable.html">Nestable List</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Range Sliders</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-gallery.html">Masonry Items</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-sweet-alert.html">Sweet Alerts</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Treeview Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-tour.html">Tour Page</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-4">
                                                    <h5 class="text-dark mt-0">Applications</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="ecommerce-products.html">eCommerce Pages</a>
                                                        </li>
                                                        <li>
                                                            <a href="crm-dashboard.html">CRM Pages</a>
                                                        </li>
                                                        <li>
                                                            <a href="email-inbox.html">Email</a>
                                                        </li>
                                                        <li>
                                                            <a href="apps-calendar.html">Calendar</a>
                                                        </li>
                                                        <li>
                                                            <a href="contacts-list.html">Team Contacts</a>
                                                        </li>
                                                        <li>
                                                            <a href="task-kanban-board.html">Task Board</a>
                                                        </li>
                                                        <li>
                                                            <a href="email-templates.html">Email Templates</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-4">
                                                    <h5 class="text-dark mt-0">Extra Pages</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="javascript:void(0);">Left Sidebar with User</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Menu Collapsed</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Small Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">New Header Style</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-search-results.html">Search Result</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-gallery.html">Gallery Pages</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-coming-soon.html">Maintenance & Coming Soon</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h3 class="text-dark">Special Discount Sale!</h3>
                                                <h4>Save up to 70% off.</h4>
                                                <a href="https://1.envato.market/uboldadmin" target="_blank" class="btn btn-primary rounded-pill mt-3">Download Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="topbar-menu d-flex align-items-center">
                            <!-- Topbar Search Form -->
                            <li class="app-search dropdown me-3 d-none d-lg-block">
                                <form>
                                    <input type="search" class="form-control rounded-pill" placeholder="Search..." id="top-search">
                                    <span class="fe-search search-icon font-16"></span>
                                </form>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow mb-2">Found 22 results</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-home me-1"></i>
                                        <span>Analytics Report</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-aperture me-1"></i>
                                        <span>How can I help you?</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>User profile settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex align-items-start">
                                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                    <span class="font-12 mb-0">UI Designer</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex align-items-start">
                                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Jacob Deo</h5>
                                                    <span class="font-12 mb-0">Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <!-- Fullscreen Button -->
                            <li class="d-none d-md-inline-block">
                                <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                                    <i class="fe-maximize font-22"></i>
                                </a>
                            </li>

                            <!-- Search Dropdown (for Mobile/Tablet) -->
                            <li class="dropdown d-lg-none">
                                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="ri-search-line font-22"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>

                            <!-- App Dropdown -->
                            <li class="dropdown d-none d-md-inline-block">
                                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-grid font-22"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/slack.png" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/github.png" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                                    <span>G Suite</span>
                                                </a>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div>
                            </li>

                            <!-- Language flag dropdown  -->
                            <li class="dropdown d-none d-md-inline-block">
                                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="18">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                    </a>

                                </div>
                            </li>

                            <!-- Notofication dropdown -->
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-bell font-22"></i>
                                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                    <small>Clear All</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="px-1" style="max-height: 300px;" data-simplebar>

                                        <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                        <!-- item-->

                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-info">
                                                            <i class="mdi mdi-account-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">New user registered</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                        <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="text-center">
                                            <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                        </div>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <!-- Light/Dark Mode Toggle Button -->
                            <li class="d-none d-sm-inline-block">
                                <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                                    <i class="ri-moon-line font-22"></i>
                                </div>
                            </li>

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                                    <span class="ms-1 d-none d-md-inline-block">
                                        Geneva <i class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-lock"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                            <!-- Right Bar offcanvas button (Theme Customization Panel) -->
                            <li>
                                <a class="nav-link waves-effect waves-light" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                                    <i class="fe-settings font-22"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ========== Topbar End ========== -->

                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                            <li class="breadcrumb-item active">Modals</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Modals</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bootstrap Modals</h4>

                                        <p class="sub-header">
                                            A rendered modal with header, body, and set of actions in the footer.
                                        </p>

                                        <!-- Standard modal content -->
                                        <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Text in a modal</h6>
                                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                        <hr>
                                                        <h6>Overflowing text to show scroll behavior</h6>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!--  Modal content for the Large example -->
                                        <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Full width modal content -->
                                        <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-full-width">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Text in a modal</h6>
                                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                        <hr>
                                                        <h6>Overflowing text to show scroll behavior</h6>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Long Content Scroll Modal -->
                                        <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
                                            aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                            eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                            laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                            eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                            laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                            eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                            laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                            eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                            laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                            eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                            laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                            eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                            laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div class="button-list">
                                            <!-- Standard  modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Standard Modal</button>
                                            <!-- Large modal -->
                                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Large Modal</button>
                                            <!-- Small modal -->
                                            <button  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm">Small Modal</button>
                                            <!-- Full width modal -->
                                            <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#full-width-modal">Full width Modal</button>
                                            <!-- Scrollable modal -->
                                            <button  type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#scrollable-modal">Scrollable Modal</button>
                                        </div>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Modal with Pages</h4>
                                        <p class="sub-header">Examples of custom modals.</p>

                                        <!-- Signup modal content -->
                                        <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <div class="modal-body">
                                                        <div class="text-center mt-2 mb-4">
                                                            <div class="auth-brand">
                                                                <a href="index.html" class="logo logo-dark">
                                                                    <span class="logo-lg">
                                                                        <img src="assets/images/logo-dark.png" alt="" height="24">
                                                                    </span>
                                                                </a>

                                                                <a href="index.html" class="logo logo-light">
                                                                    <span class="logo-lg">
                                                                        <img src="assets/images/logo-light.png" alt="" height="24">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <form class="px-3" action="#">

                                                            <div class="mb-3">
                                                                <label for="username" class="form-label">Name</label>
                                                                <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="emailaddress" class="form-label">Email address</label>
                                                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password</label>
                                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                                            </div>

                                                            <div class="mb-3">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                    <label class="form-check-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 text-center">
                                                                <button class="btn btn-primary" type="submit">Sign Up Free</button>
                                                            </div>

                                                        </form>

                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->


                                        <!-- SignIn modal content -->
                                        <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center mt-2 mb-4">
                                                            <div class="auth-brand">
                                                                <a href="index.html" class="logo logo-dark">
                                                                    <span class="logo-lg">
                                                                        <img src="assets/images/logo-dark.png" alt="" height="24">
                                                                    </span>
                                                                </a>

                                                                <a href="index.html" class="logo logo-light">
                                                                    <span class="logo-lg">
                                                                        <img src="assets/images/logo-light.png" alt="" height="24">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <form action="#" class="px-3">

                                                            <div class="mb-3">
                                                                <label for="emailaddress1" class="form-label">Email address</label>
                                                                <input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="password1" class="form-label">Password</label>
                                                                <input class="form-control" type="password" required="" id="password1" placeholder="Enter your password">
                                                            </div>

                                                            <div class="mb-3">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                    <label class="form-check-label" for="customCheck2">Remember me</label>
                                                                </div>
                                                            </div>

                                                            <div class="mb-2 text-center">
                                                                <button class="btn rounded-pill btn-primary" type="submit">Sign In</button>
                                                            </div>

                                                        </form>

                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div class="button-list">
                                            <!-- Sign Up modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign Up Modal</button>
                                            <!-- Log In modal -->
                                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal">Log In Modal</button>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Modal Position</h4>
                                        <p class="sub-header">Specify the position for the modal. You can display modal at top, bottom, center or right of page by specifying
                                                classes <code>modal-top</code>, <code>modal-bottom</code>, <code>modal-dialog-centered</code> and <code>modal-right</code>
                                                respectively.</p>

                                        <!-- Top modal content -->
                                        <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-top">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="topModalLabel">Modal Heading</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Text in a modal</h5>
                                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Right modal content -->
                                        <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-right">
                                                <div class="modal-content">
                                                    <div class="modal-header border-0">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="text-center">
                                                            <h4 class="mt-0">Text in a modal</h4>
                                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Bottom modal content -->
                                        <div id="bottom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-bottom">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="bottomModalLabel">Modal Heading</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Text in a modal</h5>
                                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Center modal content -->
                                        <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Overflowing text to show scroll behavior</h5>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div class="button-list">
                                            <!-- Top modal -->
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#top-modal">Top Modal</button>
                                            <!-- Bottom modal -->
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#bottom-modal">Bottom Modal</button>
                                            <!-- Center modal -->
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Center modal</button>
                                            <!-- Right modal -->
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#right-modal">Rightbar Modal</button>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Modal based Alerts</h4>
                                        <p class="sub-header">Show different contexual alert messages using modal component</p>

                                        <!-- Success Alert Modal -->
                                        <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-success">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="dripicons-checkmark h1 text-white"></i>
                                                            <h4 class="mt-2 text-white">Well Done!</h4>
                                                            <p class="mt-3 text-white">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Info Alert Modal -->
                                        <div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="dripicons-information h1 text-info"></i>
                                                            <h4 class="mt-2">Heads up!</h4>
                                                            <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                            <button type="button" class="btn btn-info my-2" data-bs-dismiss="modal">Continue</button>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Warning Alert Modal -->
                                        <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="dripicons-warning h1 text-warning"></i>
                                                            <h4 class="mt-2">Incorrect Information</h4>
                                                            <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                            <button type="button" class="btn btn-warning my-2" data-bs-dismiss="modal">Continue</button>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Danger Alert Modal -->
                                        <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-danger">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="dripicons-wrong h1 text-white"></i>
                                                            <h4 class="mt-2 text-white">Oh snap!</h4>
                                                            <p class="mt-3 text-white">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div class="button-list">
                                            <!-- Success Alert modal -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-alert-modal">Success Alert</button>
                                            <!-- Info Alert modal -->
                                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#info-alert-modal">Info Alert</button>
                                            <!-- Warning Alert modal -->
                                            <button  type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#warning-alert-modal">Warning Alert</button>
                                            <!-- Danger Alert modal -->
                                            <button  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#danger-alert-modal">Danger Alert</button>
                                        </div>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Multiple Modal</h4>
                                        <p class="sub-header">Display a series of modals one by one to guide your users on multiple aspects or take step wise input.</p>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                                            tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalToggleLabel">Modal 1</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Show a second modal and hide this one with the button below.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                                            data-bs-dismiss="modal">Open second modal</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
                                            tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Hide this modal and show the first with the button below.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                                                            data-bs-dismiss="modal">Back to first</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <a class="btn btn-secondary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Custom Modals</h4>

                                        <p class="sub-header">
                                            Examples of custom modals.
                                        </p>

                                        <!-- sample modal content -->

                                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Modal Content is Responsive</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body p-4">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="field-1" class="form-label">Name</label>
                                                                    <input type="text" class="form-control" id="field-1" placeholder="John">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="field-2" class="form-label">Surname</label>
                                                                    <input type="text" class="form-control" id="field-2" placeholder="Doe">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label for="field-3" class="form-label">Address</label>
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="field-4" class="form-label">City</label>
                                                                    <input type="text" class="form-control" id="field-4" placeholder="Boston">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="field-5" class="form-label">Country</label>
                                                                    <input type="text" class="form-control" id="field-5" placeholder="United States">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="field-6" class="form-label">Zip</label>
                                                                    <input type="text" class="form-control" id="field-6" placeholder="123456">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="">
                                                                    <label for="field-7" class="form-label">Personal Info</label>
                                                                    <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal -->

                                        <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content p-0">
                                                    <div id="accordion">
                                                        <div class="card mb-0">
                                                            <div class="card-header" id="headingOne">
                                                                <h5 class="m-0">
                                                                    <a href="#collapseOne" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                                                        Collapsible Group Item #1
                                                                    </a>
                                                                </h5>
                                                            </div>

                                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                                <div class="card-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card mb-0">
                                                            <div class="card-header" id="headingTwo">
                                                                <h5 class="m-0">
                                                                    <a href="#collapseTwo" class="collapsed text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                                                        Collapsible Group Item #2
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                                                <div class="card-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card mb-0">
                                                            <div class="card-header" id="headingThree">
                                                                <h5 class="m-0">
                                                                    <a href="#collapseThree" class="collapsed text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                                                        Collapsible Group Item #3
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                                                <div class="card-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div class="button-list">
                                            <!-- Responsive modal -->
                                            <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#con-close-modal">Responsive Modal</button>
                                            <!-- Accordion modal -->
                                            <button type="button" class="btn btn-secondary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#accordion-modal">Accordion in Modal</button>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Static backdrop</h4>

                                        <p class="sub-header">
                                            When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.
                                        </p>

                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Launch static backdrop modal
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Understood</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div><script>document.write(new Date().getFullYear())</script> © Ubold - <a href="https://coderthemes.com/" target="_blank">Coderthemes.com</a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end footer-links">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end right-bar" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center w-100 p-0 offcanvas-header">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-bordered nav-justified w-100" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="offcanvas-body p-3 h-100" data-simplebar>
                <!-- Tab panes -->
                <div class="tab-content pt-0">
                    <div class="tab-pane" id="chat-tab" role="tabpanel">

                        <form class="search-bar">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="fw-medium mt-2 text-uppercase">Group Chats</h6>

                        <div>
                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="fw-medium mt-3 text-uppercase">Favourites <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                        <div>
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-10.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-9.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="fw-medium mt-3 text-uppercase">Other Chats <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                        <div class="pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="text-center mt-3">
                                <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                    <i class="mdi mdi-spin mdi-loading me-2"></i>
                                    Load more
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="fw-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                        <div class="px-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">App Development<span class="float-end">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Database Repair<span class="float-end">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Backup Create<span class="float-end">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="fw-medium mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                        <div>
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-end">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Redesign Website<span class="float-end">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">New Admin Design<span class="float-end">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 mt-2 d-grid">
                            <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Create Task</a>
                        </div>

                    </div>

                    <div class="tab-pane active" id="settings-tab" role="tabpanel">

                        <div class="mt-n3">
                            <h6 class="fw-medium py-2 px-3 font-13 text-uppercase bg-light mx-n3 mt-n3 mb-3">
                                <span class="d-block py-1">Theme Settings</span>
                            </h6>
                        </div>

                        <div class="alert alert-warning" role="alert">
                            <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                        </div>

                        <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h5>

                        <div class="colorscheme-cardradio">
                            <div class="d-flex flex-column gap-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light" value="light">
                                    <label class="form-check-label" for="layout-color-light">Light</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark" value="dark">
                                    <label class="form-check-label" for="layout-color-dark">Dark</label>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Content Width</h5>
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-layout-width" id="layout-width-default" value="default">
                                <label class="form-check-label" for="layout-width-default">Fluid (Default)</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                            </div>
                        </div>

                        <div id="layout-mode">
                            <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Layout Mode</h5>

                            <div class="d-flex flex-column gap-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-default" value="default">
                                    <label class="form-check-label" for="layout-mode-default">Default</label>
                                </div>


                                <div id="layout-detached">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-detached" value="detached">
                                        <label class="form-check-label" for="layout-mode-detached">Detached</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar Color</h5>

                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="form-check-label" for="topbar-color-light">Light</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="form-check-label" for="topbar-color-dark">Dark</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-brand" value="brand">
                                <label class="form-check-label" for="topbar-color-brand">Brand</label>
                            </div>
                        </div>

                        <div>
                            <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Menu Color</h5>

                            <div class="d-flex flex-column gap-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-light" value="light">
                                    <label class="form-check-label" for="leftbar-color-light">Light</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label" for="leftbar-color-dark">Dark</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-brand" value="brand">
                                    <label class="form-check-label" for="leftbar-color-brand">Brand</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-gradient" value="gradient">
                                    <label class="form-check-label" for="leftbar-color-gradient">Gradient</label>
                                </div>
                            </div>
                        </div>

                        <div id="menu-icon-color">
                            <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Menu Icon Color</h5>

                            <div class="d-flex flex-column gap-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-two-column-color" id="twocolumn-menu-color-light" value="light">
                                    <label class="form-check-label" for="twocolumn-menu-color-light">Light</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-two-column-color" id="twocolumn-menu-color-dark" value="dark">
                                    <label class="form-check-label" for="twocolumn-menu-color-dark">Dark</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-two-column-color" id="twocolumn-menu-color-brand" value="brand">
                                    <label class="form-check-label" for="twocolumn-menu-color-brand">Brand</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-two-column-color" id="twocolumn-menu-color-gradient" value="gradient">
                                    <label class="form-check-label" for="twocolumn-menu-color-gradient">Gradient</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Menu Icon Tone</h5>

                            <div class="d-flex flex-column gap-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-menu-icon" id="menu-icon-default" value="default">
                                    <label class="form-check-label" for="menu-icon-default">Default</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-menu-icon" id="menu-icon-twotone" value="twotones">
                                    <label class="form-check-label" for="menu-icon-twotone">Twotone</label>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar Size</h5>

                            <div class="d-flex flex-column gap-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-default" value="default">
                                    <label class="form-check-label" for="leftbar-size-default">Default</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                                    <label class="form-check-label" for="leftbar-size-compact">Compact (Medium Width)</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label" for="leftbar-size-small">Condensed (Icon View)</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                    <label class="form-check-label" for="leftbar-size-full">Full Layout</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-fullscreen" value="fullscreen">
                                    <label class="form-check-label" for="leftbar-size-fullscreen">Fullscreen Layout</label>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-user">
                            <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h5>

                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" name="data-sidebar-user" id="sidebaruser-check">
                                <label class="form-check-label" for="sidebaruser-check">Enable</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="offcanvas-footer border-top py-2 px-2 text-center">
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-light w-50" id="reset-layout">Reset</button>
                    <a href="https://1.envato.market/uboldadmin" class="btn btn-danger w-50" target="_blank"><i class="mdi mdi-basket me-1"></i> Buy</a>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div><script>document.write(new Date().getFullYear())</script> © Ubold - <a href="https://coderthemes.com/" target="_blank">Coderthemes.com</a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end footer-links">
                            <a href="javascript: void(0);">Abot</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>
</html>
