<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{ route('admin.home') }}">
                        <img src="{{ asset('assetsAdmin/src/assets/img/logo.svg') }}" class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{ route('admin.home') }}" class="nav-link"> CORK </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
                <a href="#dashboard" data-bs-toggle="dropdown" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                    <li class="active">
                        <a href="./index.html"> Analytics </a>
                    </li>
                    <li>
                        <a href="./index2.html"> Sales </a>
                    </li>
                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>APPLICATIONS</span></div>
            </li>

            <li class="menu">
                <a href="#apps" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-cpu">
                            <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                            <rect x="9" y="9" width="6" height="6"></rect>
                            <line x1="9" y1="1" x2="9" y2="4"></line>
                            <line x1="15" y1="1" x2="15" y2="4"></line>
                            <line x1="9" y1="20" x2="9" y2="23"></line>
                            <line x1="15" y1="20" x2="15" y2="23"></line>
                            <line x1="20" y1="9" x2="23" y2="9"></line>
                            <line x1="20" y1="14" x2="23" y2="14"></line>
                            <line x1="1" y1="9" x2="4" y2="9"></line>
                            <line x1="1" y1="14" x2="4" y2="14"></line>
                        </svg>
                        <span>Category</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="apps" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{route('admin.category.index')}}"> Category </a>
                    </li>
                    <li>
                        <a href="{{route('admin.category.create')}}"> Add New Category </a>
                    </li>

                    <li>
                        <a href="./app-notes.html"> Notes </a>
                    </li>
                    <li>
                        <a href="./app-scrumboard.html"> Scrumboard </a>
                    </li>
                    <li>
                        <a href="./app-contacts.html"> Contacts </a>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#invoice" data-bs-toggle="dropdown" aria-expanded="false"
                           class="dropdown-toggle collapsed">Invoice
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="invoice">
                            <li>
                                <a href="./app-invoice-list.html"> List </a>
                            </li>
                            <li>
                                <a href="./app-invoice-preview.html"> Preview </a>
                            </li>
                            <li>
                                <a href="./app-invoice-add.html"> Add </a>
                            </li>
                            <li>
                                <a href="./app-invoice-edit.html"> Edit </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#ecommerce" data-bs-toggle="dropdown" aria-expanded="false"
                           class="dropdown-toggle collapsed">Ecommerce
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="ecommerce" data-bs-parent="#apps">
                            <li>
                                <a href="./app-ecommerce-product-shop.html"> Shop </a>
                            </li>
                            <li>
                                <a href="./app-ecommerce-product.html"> Product </a>
                            </li>
                            <li>
                                <a href="./app-ecommerce-product-list.html"> List </a>
                            </li>
                            <li>
                                <a href="./app-ecommerce-product-add.html"> Create </a>
                            </li>
                            <li>
                                <a href="./app-ecommerce-product-edit.html"> Edit </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#blog" data-bs-toggle="dropdown" aria-expanded="false"
                           class="dropdown-toggle collapsed">Blog
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="blog" data-bs-parent="#apps">
                            <li>
                                <a href="./app-blog-grid.html"> Grid </a>
                            </li>
                            <li>
                                <a href="./app-blog-list.html"> List </a>
                            </li>
                            <li>
                                <a href="./app-blog-post.html"> Post </a>
                            </li>
                            <li>
                                <a href="./app-blog-create.html"> Create </a>
                            </li>
                            <li>
                                <a href="./app-blog-edit.html"> Edit </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>USER INTERFACE</span></div>
            </li>

            <li class="menu">
                <a href="#components" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-box">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span>Gallery</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="components" data-bs-parent="#accordionExample">
                    <li>
                        <a href="#"> Gallery List </a>
                    </li>
                    <li>
                        <a href="#"> Create New Gallery </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#elements" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                        <span>Menus</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="elements" data-bs-parent="#accordionExample">
                    <li>
                        <a href="#"> Add new Menu </a>
                    </li>
                    <li>
                        <a href="#"> All Menus </a>
                    </li>

                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>TABLES AND FORMS</span></div>
            </li>

            <li class="menu">
                <a href="#tables" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-layers">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                        <span>Tables</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="tables" data-bs-parent="#accordionExample">

                    <li>
                        <a href="./table-basic.html"> Tables </a>
                    </li>

                    <li class="sub-submenu dropend">
                        <a href="#datatable" data-bs-toggle="dropdown" aria-expanded="false"
                           class="dropdown-toggle collapsed"> Datatable
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="datatable" data-bs-parent="#tables">
                            <li>
                                <a href="./table-datatable-basic.html"> Basic </a>
                            </li>
                            <li>
                                <a href="./table-datatable-striped-table.html"> Striped </a>
                            </li>
                            <li>
                                <a href="./table-datatable-custom.html"> Custom </a>
                            </li>
                            <li>
                                <a href="./table-datatable-miscellaneous.html"> Miscellaneous </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class="menu">
                <a href="#forms" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-clipboard">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <span>Forms</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./form-bootstrap-basic.html"> Basic </a>
                    </li>
                    <li>
                        <a href="./form-input-group-basic.html"> Input Group </a>
                    </li>
                    <li>
                        <a href="./form-layouts.html"> Layouts </a>
                    </li>
                    <li>
                        <a href="./form-validation.html"> Validation </a>
                    </li>
                    <li>
                        <a href="./form-input-mask.html"> Input Mask </a>
                    </li>
                    <li>
                        <a href="./form-tom-select.html"> Tom Select </a>
                    </li>
                    <li>
                        <a href="./form-tagify.html"> Tagify </a>
                    </li>
                    <li>
                        <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
                    </li>
                    <li>
                        <a href="./form-maxlength.html"> Maxlength </a>
                    </li>
                    <li>
                        <a href="./form-checkbox.html"> Checkbox </a>
                    </li>
                    <li>
                        <a href="./form-radio.html"> Radio </a>
                    </li>
                    <li>
                        <a href="./form-switches.html"> Switches </a>
                    </li>
                    <li>
                        <a href="./form-wizard.html"> Wizards </a>
                    </li>
                    <li>
                        <a href="./form-fileupload.html"> File Upload </a>
                    </li>
                    <li>
                        <a href="./form-quill.html"> Quill Editor </a>
                    </li>
                    <li>
                        <a href="./form-markdown.html"> Markdown Editor </a>
                    </li>
                    <li>
                        <a href="./form-date-time-picker.html"> Date Time Picker </a>
                    </li>
                    <li>
                        <a href="./form-slider.html"> Slider </a>
                    </li>
                    <li>
                        <a href="./form-clipboard.html"> Clipboard </a>
                    </li>
                    <li>
                        <a href="./form-autoComplete.html"> Auto Complete </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#pages" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-file">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                        <span>Pages</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="pages" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./pages-knowledge-base.html"> Knowledge Base </a>
                    </li>
                    <li>
                        <a href="./pages-faq.html"> FAQ </a>
                    </li>
                    <li>
                        <a href="#"> Contact Form </a>
                    </li>
                    <li>
                        <a href="./user-profile.html"> Users </a>
                    </li>
                    <li>
                        <a href="./user-account-settings.html"> Account Settings </a>
                    </li>
                    <li>
                        <a href="./pages-error404.html" target="_blank"> Error </a>
                    </li>
                    <li>
                        <a href="./pages-maintenence.html" target="_blank"> Maintanence </a>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#login" data-bs-toggle="dropdown" aria-expanded="false"
                           class="dropdown-toggle collapsed"> Sign In
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="login" data-bs-parent="#pages">
                            <li>
                                <a target="_blank" href="./auth-boxed-signin.html"> Boxed </a>
                            </li>
                            <li>
                                <a target="_blank" href="./auth-cover-signin.html"> Cover </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#signup" data-bs-toggle="dropdown" aria-expanded="false"
                           class="dropdown-toggle collapsed"> Sign Up
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="signup" data-bs-parent="#pages">
                            <li>
                                <a target="_blank" href="./auth-boxed-signup.html"> Boxed </a>
                            </li>
                            <li>
                                <a target="_blank" href="./auth-cover-signup.html"> Cover </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#unlock" data-bs-toggle="dropdown" aria-expanded="false"
                           class="dropdown-toggle collapsed"> Unlock
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="unlock" data-bs-parent="#pages">
                            <li>
                                <a target="_blank" href="./auth-boxed-lockscreen.html"> Boxed </a>
                            </li>
                            <li>
                                <a target="_blank" href="./auth-cover-lockscreen.html"> Cover </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#reset" data-bs-toggle="dropdown" aria-expanded="false"
                           class="dropdown-toggle collapsed"> Reset
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="reset" data-bs-parent="#pages">
                            <li>
                                <a target="_blank" href="./auth-boxed-password-reset.html"> Boxed </a>
                            </li>
                            <li>
                                <a target="_blank" href="./auth-cover-password-reset.html"> Cover </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#twoStep" data-bs-toggle="dropdown" aria-expanded="false"
                           class="dropdown-toggle collapsed"> Two Step
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="twoStep" data-bs-parent="#pages">
                            <li>
                                <a target="_blank" href="./auth-boxed-2-step-verification.html"> Boxed </a>
                            </li>
                            <li>
                                <a target="_blank" href="./auth-cover-2-step-verification.html"> Cover </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#more" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-plus-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                        <span>More</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="more" data-bs-parent="#accordionExample">
                    <li>
                        <a href="#"> Setting </a>
                    </li>
                    <li>
                        <a href="#"> Add New Setting </a>
                    </li>
                </ul>
            </li>

        </ul>

    </nav>

</div>
