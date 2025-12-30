<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
        
    <title>@yield('title') | PNN ប៉ុស្ថិ៍លេខ៥៦</title>
    
    <meta name="description" content="Cambodia’s biggest ever TV studio complex is due to open in the 2nd quarter of 2015" />
    <meta name="description" itemprop="description" content="Cambodia’s biggest ever TV studio complex is due to open in the 2nd quarter of 2015" />
    <meta name="keywords" content="pnn tv, pnn news, pnn cambodia, pnn entertainment, pnn economy, pnn sports, pnn report, pnn event, pnn conversation, pnn mission weekly, pnn asean connect, pnn for cambodia." />
    <meta name="keywords" itemprop="keywords" content="pnn tv, pnn news, pnn cambodia, pnn entertainment, pnn economy, pnn sports, pnn report, pnn event, pnn conversation, pnn mission weekly, pnn asean connect, pnn for cambodia." /> 
    <meta name="author" content="PNN ប៉ុស្ថិ៍លេខ៥៦" />
    @yield('meta')

    <!-- Favicon -->    
    <link rel="shortcut icon" href="{{ URL::to('assets/pages/images/favicon.ico') }}" type="image/x-icon" />

    <!-- Import CSS --> 
    <link rel="stylesheet" href="{{ URL::to('assets/pages/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('assets/pages/fontawesome/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('assets/pages/jquery-mmenu/css/jquery.mmenu.all.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('assets/pages/css/import.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('assets/pages/css/common.css') }}" type="text/css">

    @yield('style')

</head>
<body>
    <!-- header & logo -->
    <div id="topHeader" class="container-fluid" data-spy="affix">
        <div id="header">
            <div class="container">
                <div class="row">
                    <div id="logo" class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                        <a href="{{ route('home') }}">
                            <img class="linkimg img-responsive" src="{{ URL::to('assets/pages/images/logo.png') }}" alt="PNN ប៉ុស្ថិ៍លេខ៥៦" />
                        </a>                
                    </div>
                    <!-- nav header -->
                    <div id="menuDesk" class="col-lg-8 col-md-9 col-sm-9 col-xs-12">
                        <div class="navbar navbar-inverse pull-right">
                            <ul class="nav navbar-nav">
                                <li><i class="fas fa-home"></i>
                                <a href="{{ route('home') }}" data-hover="ទំព័រដើម">ទំព័រដើម</a></li>
                                <li><i class="fas fa-broadcast-tower"></i>
                                <a href="{{ route('live') }}" data-hover="ផ្សាយផ្ទាល់">ផ្សាយផ្ទាល់</a></li>
                                <li><i class="fas fa-newspaper"></i>
                                <a href="{{ route('pr') }}" data-hover="ថ្មីៗពីPNN">ថ្មីៗពីPNN</a></li>
                                <li><i class="fas fa-film"></i>
                                <a href="{{ route('drama') }}" data-hover="ភាពយន្តភាគ">ភាពយន្តភាគ</a></li>
                                <li><i class="fas fa-tv"></i>
                                <a href="{{ route('program') }}" data-hover="កម្មវិធីកំសាន្ត">កម្មវិធីកំសាន្ត</a></li>
                                <li><i class="fas fa-calendar-alt"></i>
                                <a href="{{ route('events') }}" data-hover="ព្រឹត្តិការណ៍">ព្រឹត្តិការណ៍</a></li>

                                <!-- search for desktop -->
                                <li>                                    
                                    <form class="hidden-xs" role="search">                              
                                        <div class="input-group pos-relative">
                                            <span class="input-group-btn">
                                                <button type="button" class="headIconsearch btn btn-default remove-bor-radius overlay"><i class="fas fa-search iSearch"></i></button>
                                            </span>                                 
                                            <ul class="headDropsearch remove-bor-radius">
                                                <div class="border-point"><i class="fas fa-caret-up"></i></div>
                                                <input type="text" name="txt_search" class="form-control headSearch" autocomplete="off" placeholder="ស្វែងរក..." />     
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default submitSearch"><i class="fas fa-search iSearch"></i></button>
                                                </span>
                                            
                                                <div class="headResult"></div>
                                            </ul>   
                                        </div>                                                      
                                    </form> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /header & logo -->

    <!-- nav & logo responsive -->
    <div id="headerRes">
        <div class="fixed">
            <div class="header">
                <a href="#menuRes"><span></span></a>
                <div id="subLogo">
                    <div id="logo-mobile">
                        <a href="{{ route('home') }}" alt="PNN ប៉ុស្ថិ៍លេខ៥៦"><img class="linkimg img-responsive" src="{{ URL::to('assets/pages/images/mobile_logo.png') }}" alt="PNN ប៉ុស្ថិ៍លេខ៥៦" /></a>
                    </div>
                    <span class="navSearch">
                        <button type="button" class="headIconsearch btn btn-default remove-bor-radius overlay"><i class="fas fa-search iSearch"></i></button>
                    </span>
                    <ul class="headDropsearch remove-bor-radius">
                        <div class="border-point"><i class="fas fa-caret-up"></i></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-10">
                                    <input type="text" name="txt_search" class="form-control headSearch" autocomplete="off" placeholder="ស្វែងរក..." />     
                                </div>
                                <div class="col-xs-2">
                                    <button type="button" class="btn btn-default submitSearch"><i class="fas fa-search iSearch"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="headResult"></div>
                    </ul>
                </div>
            </div>
        </div>
        <nav id="menuRes">
            <ul>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> ទំព័រដើម</a></li>
                <li><a href="{{ route('live') }}"><i class="fas fa-broadcast-tower"></i> ផ្សាយផ្ទាល់</a></li>            
                <li><a href="{{ route('pr') }}"><i class="fas fa-newspaper"></i> ថ្មីៗពីPNN</a></li>
                <li><a href="{{ route('drama') }}"><i class="fas fa-film"></i> ភាពយន្តភាគ</a></li>
                <li><a href="{{ route('program') }}"><i class="fas fa-tv"></i> កម្មវិធីកំសាន្ត</a></li>
                <li><a href="{{ route('events') }}"><i class="fas fa-calendar-alt"></i> ព្រឹត្តិការណ៍</a></li>
                <!--<li><a href="/mv"><i class="fas fa-video" aria-hidden="true"></i> MV</a></li>   -->                 
            </ul>
        </nav>
    </div>
    <!-- /nav & logo responsive -->

    @yield('content')

    <!-- Footer -->
    <div class="container-fluid main-content bgFooter">
        <div class="container">
            <div class="row">
                <div id="footer">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ul>
                            <p><img class="b-lazy" data-src="{{ URL::to('assets/pages/images/pnn_logo_footer.png') }}" alt="PNN ប៉ុស្ថិ៍លេខ៥៦" /></p>                              
                            <li><p class="address">អាសយដ្ឋាន៖ ស្ថិតក្នុងទីក្រុងរណប Garden City 
                                ភូមិព្រែកតារ័ត្ន សង្កាត់ព្រែកតាសេក ខណ្ឌជ្រោយចង្វា រាជធានីភ្នំពេញ។
                            </p></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ul class="pageLink">
                            <p>អំពី PNN</p>
                            <li><a href="/about"><h6>អំពីយើង</h6></a></li>
                            <li><a href="/contact"><h6>ទាក់ទងយើង</h6></a></li>
                            <li><a href="/about#pnnChannel"><h6>PNN Channel</h6></a></li>                               
                            <li><a href="/careers"><h6>ឱកាសការងារ</h6></a></li>                             
                        </ul>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ul>
                            <p>បណ្តាញ​សង្គម</p>
                            <ul class="social pull-left pad-bt-15">
                                <li>
                                    <a href="https://www.facebook.com/PNNTVCambodia" target="_blank" class="icon-button bg-fb facebook"><i class="fab fa-facebook-f"></i><span></span></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCCMAMfPW-Scp4ba8iUW-8EQ" target="_blank" class="icon-button bg-youtube youtube"><i class="fab fa-youtube"></i><span></span></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/pnntv" target="_blank" class="icon-button bg-instagram instagram"><i class="fab fa-instagram"></i><span></span></a>
                                </li>
                                <li>
                                    <a href="https://line.me/R/ti/p/%40pnntv" target="_blank" class="icon-button bg-line line"><i class="fab fa-line"></i><span></span></a>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>© រក្សា​សិទ្ធិ​គ្រប់​យ៉ាង​ដោយ​ PNN ប៉ុស្ថិ៍លេខ៥៦ ឆ្នាំ2020</p>
        </div>
    </div>
    <!-- /Footer -->

    <!-- Import JS -->
    <script src="{{ URL::to('assets/pages/jquery/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ URL::to('assets/pages/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('assets/pages/jquery-mmenu/js/jquery.mmenu.all.min.js') }}"></script>
    <script src="{{ URL::to('assets/pages/js/blazy.min.js') }}"></script>

    <!-- Menu responsive -->    
    <script type="text/javascript">
        $(function() {
            $('nav#menuRes').mmenu({
                extensions              : [ 'effect-slide-menu', 'shadow-page', 'shadow-panels' ],
                keyboardNavigation      : true,
                screenReader            : true,
                counters                : true,
                navbar  : {
                    title   : 'PNN ប៉ុស្ថិ៍លេខ៥៦'
                },
                navbars : [
                    /* {
                        position    : 'top',
                        content     : [ 'searchfield' ]
                    },  */{
                        position    : 'top',
                        content     : [
                            'prev',
                            'title',
                            'close'
                        ]
                    }, {
                        position    : 'bottom',
                        /*content       : [
                            '<a href="http://mmenu.frebsite.nl/wordpress-plugin.html" target="_blank">WordPress plugin</a>'
                        ]*/
                    }
                ]
            });
        });
    </script>

    <!-- Import JS Current Page -->
    <script type="text/javascript" src="{{ URL::to('assets/pages/js/common.js') }}"></script>
    @yield('script')
</body>
</html>