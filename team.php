<?php
include 'header.php';
?>

<div class='auspic contact-pic'>
    <!--<img src="img/header.jpg" alt="ausplay" />-->
</div>

<div class="">
    <div class="content">
        <div class="menu subnav">
<!--            <a class='mob-menu' href='#'><i class="fa fa-bars"></i></a>-->
            <div class='menu'>
                <a href='about.php'><span>About Ausplay</span></a>
                <a href='team.php' class = 'selected'><span>Our Team</span></a>
            </div>
        </div>

        <div class="box about half">
            <h2>Our Team</h2>
            <br>
            <p>With a combined experience of over 40 years, the Ausplay Playscapes team can provide you with the expertise to complete any playscape or surfacing to the highest quality.</p>
        </div>

        <div class="box">
            <div class="third">
                <div class="flex-60 half">
                    <img src="img/rory.jpg" alt="About Ausplay">
                </div>

                <div class="flex-40 half about">
                    <h3>Barry Healey</h3>
                    <p>
                    <strong>Director/National Sales Manager</strong>
                    <br>
                    Ph: 1324  5453
                    <br>
                    Email: barry@ausplay.net.au
                    </p>
                </div>
            </div>

            <div class="third">
                <div class="flex-60 half">
                    <img src="img/rory.jpg" alt="About Ausplay">
                </div>

                <div class="flex-40 half about">
                    <h3>Dean Kneebone</h3>
                    <p>
                    <strong>Director/Sales Manager</strong>
                    <br>
                    Ph: 1324  5453
                    <br>
                    Email: barry@ausplay.net.au
                    </p>
                </div>
            </div>

            <div class="third">
                <div class="flex-60 half">
                    <img src="img/rory.jpg" alt="About Ausplay">
                </div>

                <div class="flex-40 half about">
                    <h3>Shane Felding</h3>
                    <p>
                    <strong>National Projects Manager</strong>
                    <br>
                    Ph: 1324  5453
                    <br>
                    Email: barry@ausplay.net.au
                    </p>
                </div>
            </div>

            <div class="third">
                <div class="flex-60 half">
                    <img src="img/girlone.jpg" alt="About Ausplay">
                </div>

                <div class="flex-40 half about">
                    <h3>Tenille Learmonth</h3>
                    <p>
                    <strong>Senior Landscape Architect</strong>
                    <br>
                    Ph: 1324  5453
                    <br>
                    Email: barry@ausplay.net.au
                    </p>
                </div>
            </div>

            <div class="third">
                <div class="flex-60 half">
                    <img src="img/rory.jpg" alt="About Ausplay">
                </div>

                <div class="flex-40 half about">
                    <h3>Mathew Black</h3>
                    <p>
                        <strong>3D Designer</strong>
                        <br>
                        Ph: 1324  5453
                        <br>
                        Email: barry@ausplay.net.au
                    </p>
                </div>
            </div>

            <div class="third">
                <div class="flex-60 half">
                    <img src="img/girlone.jpg" alt="About Ausplay">
                </div>

                <div class="flex-40 half about">
                    <h3>Julie Daldy</h3>
                    <p>
                        <strong>Sales Support</strong>
                        <br>
                        Ph: 1324  5453
                        <br>
                        Email: barry@ausplay.net.au
                    </p>
                </div>
            </div>

            <div class="third">
                <div class="flex-60 half">
                    <img src="img/girlone.jpg" alt="About Ausplay">
                </div>

                <div class="flex-40 half about">
                    <h3>Amanda Kneebone</h3>
                    <p>
                        <strong>Accounts Manager</strong>
                        <br>
                        Ph: 1324  5453
                        <br>
                        Email: barry@ausplay.net.au
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

<script>
    $('.maps').click(function () {
        $('.maps iframe').css("pointer-events", "auto");
    });

    $(".maps").mouseleave(function () {
        $('.maps iframe').css("pointer-events", "none");
    });
</script>
