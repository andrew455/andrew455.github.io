<div class='footer-contact'>
    <a href='#'>
        <i class="fa fa-envelope"></i> <span>info@ausplay.com.au</span>
    </a>
    <a href='#'>
        <i class="fa fa-mobile-phone"></i> <span>0452 459 456</span>
    </a>
    <a href='#'>
        <i class="fa fa-map-marker"></i> <span>Unit 7/1314 Boundary Road, Wacol, Brisbane</span>
    </a>
    <a href='#'>
        <i class="fa fa-fax"></i> <span>0452 459 456</span>
    </a>
</div>

<div class="footer">
    <div class="footer-wrap">
        <ul>
            <li>PRODUCTS</li>
            <li><a href="#" class="footer-row">Playscapes</a></li>
            <li><a href="#" class="footer-row">Surfacing</a></li>
            <li><a href="#" class="footer-row">Playgrounds</a></li>
            <li><a href="#" class="footer-row">Turf Installation</a></li>
            <li><a href="#" class="footer-row">Youth Zones</a></li>
        </ul>
        <ul>
            <li>SERVICES</li>
            <li><a href="#" class="footer-row">Playscapes</a></li>
            <li><a href="#" class="footer-row">Surfacing</a></li>
            <li><a href="#" class="footer-row">Playgrounds</a></li>
            <li><a href="#" class="footer-row">Turf Installation</a></li>
            <li><a href="#" class="footer-row">Youth Zones</a></li>
        </ul>
        <ul>
            <li>ABOUT US</li>
            <li><a href="#" class="footer-row">Playscapes</a></li>
            <li><a href="#" class="footer-row">Surfacing</a></li>
            <li><a href="#" class="footer-row">Playgrounds</a></li>
            <li><a href="#" class="footer-row">Turf Installation</a></li>
            <li><a href="#" class="footer-row">Youth Zones</a></li>
        </ul>
        <ul>
            <li>PRODUCTS</li>
            <li><a href="#" class="footer-row">Playscapes</a></li>
            <li><a href="#" class="footer-row">Surfacing</a></li>
            <li><a href="#" class="footer-row">Playgrounds</a></li>
            <li><a href="#" class="footer-row">Turf Installation</a></li>
            <li><a href="#" class="footer-row">Youth Zones</a></li>
        </ul>
        <ul>
            <li>PRODUCTS</li>
            <li><a href="#" class="footer-row">Playscapes</a></li>
            <li><a href="#" class="footer-row">Surfacing</a></li>
            <li><a href="#" class="footer-row">Playgrounds</a></li>
            <li><a href="#" class="footer-row">Turf Installation</a></li>
            <li><a href="#" class="footer-row">Youth Zones</a></li>
        </ul>

    </div>

</div>


</div>


</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>

    $(function () {

//        Dev - Mobile Mode

//        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
//            $('body').removeClass().addClass('mobile');
//            $('.dev-test').hide();
//        }

//        Dev - Flex Toggles

        $('#dev-desktop').on('click', function (e) {
            $('body').removeClass()
        });

        $('#dev-mobile').on('click', function (e) {
            $('body').removeClass().addClass('mobile');
        });

        $('#dev-tablet').on('click', function (e) {
            $('body').removeClass().addClass('tablet');
        });

        $('#dev-close').on('click', function (e) {
            console.log($('.dev-test'));
            $('.dev-test').slideToggle();
        });

//        Menu
        $('.mob-menu').on('click', function (e) {
            $('.menu').toggleClass('hide');
        });

    });

</script>