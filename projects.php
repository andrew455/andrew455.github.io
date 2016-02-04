<?php
include 'header.php';
?>

<div class='auspic projects-pic'>
    <!--<img src="img/header.jpg" alt="ausplay" />-->
</div>

    <div class="content">
        <div class="box">
            <h1>Recent Projects</h1>
            <p>With a combined experience of over 40 years, the Ausplay Playscapes team can provide you with the expertise to complete any playscape or surfacing to the highest quality.</p>
        </div>

    <div class="menu subnav mb" id = 'chooser'>
        <div class='menu'>
            <ul>
                <li><a href='#'class = 'selected' data-type = 'third'><span>All</span></a></li>
                <li><a href='#'data-type = 'playscape'><span>Playscapes</span></a></li>
                <li><a href='#'data-type = 'surfacing'><span>Surfacing</span></a></li>
                <li><a href='#'data-type = 'youth-zones'><span>Youth Zones</span></a></li>
            </ul>
        </div>
    </div>

    <div class="box">
        <div class="third playscape">
            <a href='springfield-lakes.php'>
                <div class="subthird">
                    <img src='img/recent-springfield.jpg' alt='Springfield Lakes'/>
                    <div class="title"> <i class="fa fa-map-marker"></i>
                        Springfield Lakes Early Learning Center
                        <br>
                        Natural Playscape
                    </div>
                </div>
            </a>
        </div>

        <div class="third surfacing">
            <a href='springfield-lakes.php'>
                <div class="subthird">
                    <img src='img/recent-eastside.jpg' alt='Springfield Lakes'/>
                    <div class="title"> <i class="fa fa-map-marker"></i>
                        Eastside Early Learning Center
                        <br>
                        Surfacing
                    </div>
                </div>
            </a>
        </div>

        <div class="third youth-zones">
            <a href='springfield-lakes.php'>
                <div class="subthird">
                    <img src='img/recent-cannington.jpg' alt='Springfield Lakes'/>
                    <div class="title"> <i class="fa fa-map-marker"></i>
                        Cannington Early Learning Center
                        <br>
                        Active Youth Zone
                    </div>
                </div>
            </a>
        </div>

        <div class="third playscape">
            <a href='springfield-lakes.php'>
                <div class="subthird">
                    <img src='img/recent-springfield.jpg' alt='Springfield Lakes'/>
                    <div class="title"> <i class="fa fa-map-marker"></i>
                        Springfield Lakes Early Learning Center
                        <br>
                        Natural Playscape
                    </div>
                </div>
            </a>
        </div>

        <div class="third surfacing">
            <a href='springfield-lakes.php'>
                <div class="subthird">
                    <img src='img/recent-eastside.jpg' alt='Springfield Lakes'/>
                    <div class="title"> <i class="fa fa-map-marker"></i>
                        Eastside Early Learning Center
                        <br>
                        Surfacing
                    </div>
                </div>
            </a>
        </div>

        <div class="third youth-zones">
            <a href='springfield-lakes.php'>
                <div class="subthird">
                    <img src='img/recent-cannington.jpg' alt='Springfield Lakes'/>
                    <div class="title"> <i class="fa fa-map-marker"></i>
                        Cannington Early Learning Center
                        <br>
                        Active Youth Zone
                    </div>
                </div>
            </a>
        </div>

        <div class="third playscape">
            <a href='springfield-lakes.php'>
                <div class="subthird">
                    <img src='img/recent-springfield.jpg' alt='Springfield Lakes'/>
                    <div class="title"> <i class="fa fa-map-marker"></i>
                        Springfield Lakes Early Learning Center
                        <br>
                        Natural Playscape
                    </div>
                </div>
            </a>
        </div>

        <div class="third playscape">
            <a href='springfield-lakes.php'>
                <div class="subthird">
                    <img src='img/recent-springfield.jpg' alt='Springfield Lakes'/>
                    <div class="title"> <i class="fa fa-map-marker"></i>
                        Springfield Lakes Early Learning Center
                        <br>
                        Natural Playscape
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

<script>
    $('#chooser.menu ul li a').click(function (e) {
        e.preventDefault();

        // change menu bar
        var x = $(this);
        x.parent().siblings().children('a').removeClass('selected');
        x.addClass('selected');

        // hide then show
        d = '.' + x.data('type');
        $('.third').hide();
        $(d).show();
    });

</script>
