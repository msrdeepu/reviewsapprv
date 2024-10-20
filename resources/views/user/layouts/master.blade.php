<!DOCTYPE html>
<html lang="zxx">
    

<head>
    <!--header-->
         @includeif('user.layouts.header')
           @yield('meta')
            @yield('styles')
          
    <!--header-->
    <!--title-->
     <title>@yield('title')</title>
    </head>
    <body> 
        <!--================= Preloader Section Start Here =================-->        
            
        <!--================= Preloader Section End Here =================-->

        <!--================= Header Section Start Here =================-->
        <header id="react-header" class="react-header">
          <!--topbar-->
            @includeif('user.layouts.topbar')
          <!--topbar-->
           <!--menubar-->
           @includeif('user.layouts.navbar')
           <!--menubar-->
        </header>
        <!--================= Header Section End Here =================-->

        <!--================= Wrapper Start Here =================-->
      @yield('content')
        <!--================= Wrapper End Here =================-->
        
        <!--snackbar-->
          <!--@includeif('user.layouts.snackbar')-->
        <!--snackbar-->

        <!--================= Footer Section Start Here =================-->
         @includeif('user.layouts.footer')
        <!--================= Footer Section End Here =================-->
        
        <!--================= Scroll to Top Start =================-->
        <div id="backscrollUp" class="home">
            <span aria-hidden="true" class="arrow_carrot-up"></span>
        </div> 
        <!--================= Scroll to Top End =================-->

<!--scripts-->
 @includeif('user.layouts.scripts')

   @yield('script')
<!--scripts-->
       <script>
          $(document).ready(function() {
    const snackbar = $('.snackbar');
    let isScrolling;

  
    $(window).on('scroll', function() {
       
        snackbar.addClass('show-snackbar');

     
        clearTimeout(isScrolling);

        
        isScrolling = setTimeout(function() {
            snackbar.removeClass('show-snackbar');
        }, 1500); 


        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 10) {
       
            snackbar.removeClass('show-snackbar');
        }
    });
});



  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LdfJVEqAAAAAO-t9ND0_0EeA1fap3l5puR174fk', {action: 'LOGIN'});
    });
  }



       </script>
    </body>


</html>