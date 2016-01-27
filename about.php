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
                <a href='about' class = 'selected'><span>About Ausplay</span></a>
                <a href='team.php'><span>Our Team</span></a>
            </div>
        </div>
        <div class="box">
            <div class="flex-60 half about about-half">
                <h2>About Us</h2>
                <p>Ausplay Playscapes is a family owned and operated Australian company that is well established throughout Australia.  Our company offers a broad range of skills that we tailor to each client’s specific requirements and business objectives – from rubber surfacing and synthetic grass to fully custom playscapes. </p>
                <p>Ausplay is a well-known and well respected playground construction company, especially within the Childcare sector, where we lead the field in providing outstanding playscapes that comply with the National Quality Standards/Framework for Childcare.</p>
                <p>Ausplay Directors Barry Healey & Dean Kneebone, together with their professional team, have combined industry experience of more than 40 years. This experience ensures your project is expertly managed from its inception to the final hand-over.</p>
            </div>
            <div class="flex-40 half about">
                <img src="img/aboutie.jpg" alt="About Ausplay">
            </div>

            <div class="flex-40 half about about-half">
                <img src="img/aboutie.jpg" alt="About Ausplay">
            </div>
            <div class="flex-60 half about">
                <h2>Our Philosophy</h2>
                <p>Ausplay  focuses  on  fostering  exploration  and  imagination  rather  than  focused, repetitive  play  that  has  no  relationship  with  the  landscape  it  sits within. While traditional  equipment  has  its  place  within  the  playscape,  one  piece  does  not  fit  all, and  equipment  alone  can  become  static  and  uninspiring.  At  Ausplay,  we  aim  to create one of a kind, custom, play spaces that are designed specifically for the site and its users.</p>
                <p>We  believe  that  great  spaces  are  those  that  the  client  and  its  users feel  part  of, therefore,  from  start  to  finish,  we  communicate  with  you  at  every  step  of  the  way, ensuring   your   project   is   carried   out   to   your   satisfaction   and   with   minimum inconvenience.</p>
            </div>

            <div class="flex-60 half about about-half">
                <h2>Our Commitment</h2>
                <p>We are committed to creating high quality play spaces at competitive and affordable prices – without compromising on safety or service.</p>
                <p>All our Ausplay Playscapes are designed and constructed to meet current Australian Standards,  and  our  internal  quality  systems  assure  you  receive high  quality  and professional service at all stages of the project.</p>
                <p>We are committed to a culture is one of ongoing review and improvement. Our team is constantly looking for new ways to improve the products we sell and the services we provide to you, our valued customer.</p>
            </div>
            <div class="flex-40 half about">
                <img src="img/aboutie.jpg" alt="About Ausplay">
            </div>

            <div class="flex-40 half about about-half">
                <img src="img/aboutie.jpg" alt="About Ausplay">
            </div>
            <div class="flex-60 half about">
                <h2>Corporate Responsibility</h2>
                <p>At   Ausplay,   we   pride   ourselves   on   upholding   best   practice   in environmental management,  design  and  construction.    Ausplay  Playscapes  provides  leadership and  safety  management  expertise  to  each  and  every  project.  Our  specialised industry also presents unique OH&S challenges.</p>
                <p>To meet these challenges, Ausplay ensures optimum OH&S outcomes by providing: </p>
                <p>
                    <ul>
                        <li>Practical   experience   in   the   application   of   environmental   protection   during construction.  </li>
                        <li>Design assessment.</li>
                        <li>Project Management systems and tools.</li>
                        <li>Assessment and Due Dilligence.</li>
                    </ul>
                </p>
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
