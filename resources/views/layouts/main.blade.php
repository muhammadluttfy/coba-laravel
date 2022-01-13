<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Course | Front - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/template-assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/template-assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="/template-assets/vendor/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/template-assets/vendor/slick-carousel/slick/slick.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="/template-assets/css/theme.css">
    <link rel="stylesheet" href="/template-assets/css/custom-css.css">
</head>

<body>
    @include('partials.navbar')

    @yield('content')

    {{-- CTA Section --}}
    <div class="container space-bottom-2">
        <div class="text-center py-6"
            style="background: url(/template-assets/svg/components/abstract-shapes-19.svg) center no-repeat;">
            <h2>Find the right learning path for you</h2>
            <p>Answer a few questions and match your goals to our programs.</p>
            <span class="d-block mt-5">
                <a class="btn btn-primary transition-3d-hover" href="#">Explore by Category</a>
            </span>
        </div>
    </div>
    <!-- End CTA Section -->

    <!-- ========== FOOTER ========== -->
    <footer class="bg-light">
        <div class="container">
            <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
                        <!-- Logo -->
                        <div class="mb-4">
                            <a href="index.html" aria-label="Front">
                                <img class="brand" src="/template-assets/svg/logos/logo.svg" alt="Logo">
                            </a>
                        </div>
                        <!-- End Logo -->

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item">
                                <a class="nav-link media" href="javascript:;">
                                    <span class="media">
                                        <span class="fas fa-location-arrow mt-1 mr-2"></span>
                                        <span class="media-body">
                                            153 Williamson Plaza, Maggieberg
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media" href="tel:1-062-109-9222">
                                    <span class="media">
                                        <span class="fas fa-phone-alt mt-1 mr-2"></span>
                                        <span class="media-body">
                                            +1 (062) 109-9222
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <h5>Company</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item"><a class="nav-link"
                                    href="../pages/about-agency.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/careers.html">Careers
                                    <span class="badge badge-primary ml-1">We're hiring</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="../blog/newsroom.html">Blog</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="../pages/customers.html">Customers</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/hire-us.html">Hire
                                    us</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <h5>Features</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Press</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Release notes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Integrations</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg">
                        <h5>Documentation</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item"><a class="nav-link"
                                    href="mailto:example@gmail.com">Support</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="documentation/index.html">Docs</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/status.html">Status</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">API Reference</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Tech Requirements</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg">
                        <h5>Resources</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="media align-items-center">
                                        <i class="fa fa-info-circle mr-2"></i>
                                        <span class="media-body">Help</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="media align-items-center">
                                        <i class="fa fa-user-circle mr-2"></i>
                                        <span class="media-body">Your Account</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>
                </div>
            </div>

            <hr class="my-0">

            <div class="space-1">
                <div class="row align-items-md-center mb-7">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="../pages/privacy.html">Privacy &amp; Policy</a>
                            </li>
                            <li class="nav-item opacity mx-3">&#47;</li>
                            <li class="nav-item">
                                <a class="nav-link" href="../pages/terms.html">Terms</a>
                            </li>
                            <li class="nav-item opacity mx-3">&#47;</li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Site Map</a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-md-6 text-md-right">
                        <ul class="list-inline mb-0">
                            <!-- Social Networks -->
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <!-- End Social Networks -->
                        </ul>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="w-md-75 text-lg-center mx-lg-auto">
                    <p class="text-muted small">&copy; Front. 2020 Htmlstream. All rights reserved.</p>
                    <p class="text-muted small">When you visit or interact with our sites, services or tools, we or our
                        authorised
                        service providers may use cookies for storing information to help provide you with a better,
                        faster and
                        safer experience and for marketing purposes.</p>
                </div>
                <!-- End Copyright -->
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <button type="button" class="close position-absolute top-0 right-0 z-index-2 mt-3 mr-3"
                    data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                    </svg>
                </button>

                <!-- Body -->
                <div class="modal-body">
                    <form class="js-validate">
                        <!-- Login -->
                        <div id="login">
                            <!-- Title -->
                            <div class="text-center mb-7">
                                <h3 class="mb-0">Sign In to Front</h3>
                                <p>Login to manage your account.</p>
                            </div>
                            <!-- End Title -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="signinEmail"
                                        placeholder="Email" aria-label="Email" required
                                        data-msg="Please enter a valid email address.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-3">
                                <label class="input-label">Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="password" id="signinPassword"
                                        placeholder="Password" aria-label="Password" required
                                        data-msg="Your password is invalid. Please try again.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <div class="d-flex justify-content-end mb-4">
                                <a class="js-animation-link small link-underline" href="javascript:;"
                                    data-hs-show-animation-options='{
                     "targetSelector": "#forgotPassword",
                     "groupName": "idForm"
                   }'>Forgot Password?</a>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                            </div>

                            <div class="text-center mb-3">
                                <span class="divider divider-xs divider-text">OR</span>
                            </div>

                            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="mr-2" src="/template-assets/img/160x160/img17.png"
                                        alt="Image Description" width="14" height="14">
                                    Sign In with Google
                                </span>
                            </a>

                            <div class="text-center">
                                <span class="small text-muted">Do not have an account?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                    data-hs-show-animation-options='{
                     "targetSelector": "#signup",
                     "groupName": "idForm"
                   }'>Sign Up
                                </a>
                            </div>
                        </div>

                        <!-- Signup -->
                        <div id="signup" style="display: none; opacity: 0;">
                            <!-- Title -->
                            <div class="text-center mb-7">
                                <h3 class="mb-0">Create your account</h3>
                                <p>Fill out the form to get started.</p>
                            </div>
                            <!-- End Title -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="signupEmail"
                                        placeholder="Email" aria-label="Email" required
                                        data-msg="Please enter a valid email address.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="password" id="signupPassword"
                                        placeholder="Password" aria-label="Password" required
                                        data-msg="Your password is invalid. Please try again.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Confirm Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="confirmPassword"
                                        id="signupConfirmPassword" placeholder="Confirm Password"
                                        aria-label="Confirm Password" required
                                        data-msg="Password does not match the confirm password.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign Up</button>
                            </div>

                            <div class="text-center mb-3">
                                <span class="divider divider-xs divider-text">OR</span>
                            </div>

                            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="mr-2" src="/template-assets/img/160x160/img17.png"
                                        alt="Image Description" width="14" height="14">
                                    Sign Up with Google
                                </span>
                            </a>

                            <div class="text-center">
                                <span class="small text-muted">Already have an account?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                    data-hs-show-animation-options='{
                     "targetSelector": "#login",
                     "groupName": "idForm"
                   }'>Sign In
                                </a>
                            </div>
                        </div>
                        <!-- End Signup -->

                        <!-- Forgot Password -->
                        <div id="forgotPassword" style="display: none; opacity: 0;">
                            <!-- Title -->
                            <div class="text-center mb-7">
                                <h3 class="mb-0">Recover password</h3>
                                <p>Instructions will be sent to you.</p>
                            </div>
                            <!-- End Title -->

                            <!-- Input Group -->
                            <div class="js-form-message">
                                <label class="sr-only" for="recoverEmail">Your email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="recoverEmail"
                                        placeholder="Your email" aria-label="Your email" required
                                        data-msg="Please enter a valid email address.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Recover
                                    Password</button>
                            </div>

                            <div class="text-center mb-4">
                                <span class="small text-muted">Remember your password?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                    data-hs-show-animation-options='{
                     "targetSelector": "#login",
                     "groupName": "idForm"
                   }'>Login
                                </a>
                            </div>
                        </div>
                        <!-- End Forgot Password -->
                    </form>
                </div>
                <!-- End Body -->
            </div>
        </div>
    </div>
    <!-- End Login Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="/template-assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/template-assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="/template-assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="/template-assets/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="/template-assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="/template-assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="/template-assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="/template-assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="/template-assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/template-assets/vendor/typed.js/lib/typed.min.js"></script>
    <script src="/template-assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/template-assets/vendor/slick-carousel/slick/slick.js"></script>

    <!-- JS Front -->
    <script src="/template-assets/js/hs.core.js"></script>
    <script src="/template-assets/js/hs.validation.js"></script>
    <script src="/template-assets/js/hs.fancybox.js"></script>
    <script src="/template-assets/js/hs.slick-carousel.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of header
            var header = new HSHeader($('#header')).init();

            // initialization of mega menu
            var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();

            // initialization of unfold
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

            // initialization of form validation
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });
            });

            // initialization of text animation (typing)
            var typed = new Typed(".js-text-animation", {
                strings: ["future.", "potential.", "skills."],
                typeSpeed: 90,
                loop: true,
                backSpeed: 30,
                backDelay: 2500
            });

            // initialization of show animations
            $('.js-animation-link').each(function() {
                var showAnimation = new HSShowAnimation($(this)).init();
            });

            // initialization of fancybox
            $('.js-fancybox').each(function() {
                var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });

            // initialization of slick carousel
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            // initialization of go to
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="/template-assets/vendor/polifills.js"><\/script>');
    </script>

</body>

</html>
