     <!-- content-with-photo4 block -->
     <!-- footers 20 -->
     <section class="w3l-footers-20">
         <div class="footers20">
             <div class="wrapper">
                 <div class="footers20-content">
                     <div class="d-grid grid-col-4 grids-content">
                         <div class="column">
                             <h4>Address</h4>
                             <p class="contact-para3">New York, NY-90814 Hill Station 4yh Street</p>
                         </div>
                         <div class="column">
                             <h4>Email</h4>
                             <a href="mailto:hello@w3layouts.com">
                                 <p class="contact-mail">office@example.com</p>
                             </a>
                         </div>
                         <div class="column">
                             <h4>Phone</h4>
                             <a href="tel:+ 11 225 0000">
                                 <p class="contact-phone">+ 11 225 0000</p>
                             </a>
                         </div>
                         <div class="column">
                             <h4>Fax</h4>
                             <a href="fax:+ 000 1111 0000">
                                 <p class="contact-phone">+ 000 1111 0000</p>
                             </a>
                         </div>
                     </div>
                     <div class="d-grid grid-col-3 grids-content1 bottom-border">
                         <div class="columns text-left links-grid">
                             <ul class="links">
                                 <li><a href="#links">Privacy policy</a></li>
                                 <li><a href="#links">Term of service</a></li>
                             </ul>
                         </div>
                         <div class="columns text-center copyright-grid">
                             <p class="copy-footer-29">© 2020 Ecomneeds. All rights reserved | Designed by Ecomneeds</p>
                         </div>
                         <div class="columns text-right social-grid">
                             <ul class="social">
                                 <li><a href="#url"><span class="fa fa-facebook-official" aria-hidden="true"></span></a>
                                 </li>
                                 <li><a href="#url"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
                                 <li><a href="#url"><span class="fa fa-twitter-square" aria-hidden="true"></span></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <!-- <a href="#home" class="move-top ">
                        <span class="fa fa-eject text-center" aria-hidden="true"></span>
                    </a> -->
             </div>
         </div>
     </section>
     <!--Start of Tawk.to Script-->
     <script src="{{asset('public/js/pace.js')}}"></script>
     <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
     <script src="{{asset('public/js/before-after.min.js')}}"></script>
     <script>
         // Call & init
         $(document).ready(function(){
         $('.ba-slider').each(function(){
         var cur = $(this);
         // Adjust the slider
         var width = cur.width()+'px';
         cur.find('.resize img').css('width', width);
         // Bind dragging events
         drags(cur.find('.handle'), cur.find('.resize'), cur);
         });
         });

         // Update sliders on resize.
         // Because we all do this: i.imgur.com/YkbaV.gif
         $(window).resize(function(){
         $('.ba-slider').each(function(){
         var cur = $(this);
         var width = cur.width()+'px';
         cur.find('.resize img').css('width', width);
         });
         });

         function drags(dragElement, resizeElement, container) {

         // Initialize the dragging event on mousedown.
         dragElement.on('mousedown touchstart', function(e) {

         dragElement.addClass('draggable');
         resizeElement.addClass('resizable');

         // Check if it's a mouse or touch event and pass along the correct value
         var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

         // Get the initial position
         var dragWidth = dragElement.outerWidth(),
         posX = dragElement.offset().left + dragWidth - startX,
         containerOffset = container.offset().left,
         containerWidth = container.outerWidth();

         // Set limits
         minLeft = containerOffset + 10;
         maxLeft = containerOffset + containerWidth - dragWidth - 10;

         // Calculate the dragging distance on mousemove.
         dragElement.parents().on("mousemove touchmove", function(e) {

         // Check if it's a mouse or touch event and pass along the correct value
         var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

         leftValue = moveX + posX - dragWidth;

         // Prevent going off limits
         if ( leftValue < minLeft) { leftValue=minLeft; } else if (leftValue> maxLeft) {
             leftValue = maxLeft;
             }

             // Translate the handle's left value to masked divs width.
             widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';

             // Set the new values for the slider and the handle.
             // Bind mouseup events to stop dragging.
             $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
             $(this).removeClass('draggable');
             resizeElement.removeClass('resizable');
             });
             $('.resizable').css('width', widthValue);
             }).on('mouseup touchend touchcancel', function(){
             dragElement.removeClass('draggable');
             resizeElement.removeClass('resizable');
             });
             e.preventDefault();
             }).on('mouseup touchend touchcancel', function(e){
             dragElement.removeClass('draggable');
             resizeElement.removeClass('resizable');
             });
             }



             </script>
             @yield('fancybox-js')
             <script type="text/javascript">
             var Tawk_API = Tawk_API || {},
                 Tawk_LoadStart = new Date();
             (function() {
                 var s1 = document.createElement("script"),
                     s0 = document.getElementsByTagName("script")[0];
                 s1.async = true;
                 s1.src = 'https://embed.tawk.to/5ec7e86cc75cbf1769ee6f60/default';
                 s1.charset = 'UTF-8';
                 s1.setAttribute('crossorigin', '*');
                 s0.parentNode.insertBefore(s1, s0);
             })();
             </script>
             <!--End of Tawk.to Script-->
             <script>
             var mySwiper = new Swiper('.swiper-container', {
                 // Optional parameters
                 spaceBetween: 30,
                 centeredSlides: true,
                 autoplay: {
                     delay: 2500,
                     disableOnInteraction: false,
                 },
                 loop: true,

                 // If we need pagination
                 pagination: {
                     el: '.swiper-pagination',
                 },

                 // Navigation arrows
                 navigation: {
                     nextEl: '.swiper-button-next',
                     prevEl: '.swiper-button-prev',
                 },

                 // And if we need scrollbar
                 scrollbar: {
                     el: '.swiper-scrollbar',
                 },
             })
             </script>

             </body>

             </html>
             <!-- //footers 11 -->