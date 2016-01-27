<?php
include 'header.php';
?>

<div class='auspic contact-pic'>
    <!--<img src="img/header.jpg" alt="ausplay" />-->
</div>

<div class="greyback">
    <div class="content">
        <div class="box">
            <div class="half first">
                <form action="" class='contact-form'>
                    <div class='form-line'><label for="input">Name</label><input type="text"></div>
                    <div class='form-line'><label for="input">Email</label><input type="text"></div>
                    <div class='form-line'><label for="input">Phone</label><input type="text"></div>
                    <div class='form-line'><label for="input">Postcode</label><input type="text"></div>
                    <div class='form-line'><textarea name="msg" id="msg" cols="30" rows="10"
                                                     placeholder='We need to talk ...'></textarea></div>
                    <div class='form-line'>
                        <button>Send</button>
                    </div>
                </form>
            </div>
            <div class="half">
                <p>
                    <span class='text-blue'>Head Office:</span>
                    <br>
                    Ausplay Playscapes Pty Ltd
                    <br>
                    Unit 7/1314 Boundary Road, Wacol, QLD Australia
                    <br>
                    <span class='text-blue'>Phone</span>
                    <br>
                    1300 046 454
                    <br>
                    <span class='text-blue'>Phone</span>
                    <br>
                    07 3879 4444
                    <br>
                    <span class='text-blue'>Fax</span>
                    <br>
                    07 3879 4466
                    <br>
                    <span class='text-blue'>Email</span>
                    <br>
                    sales@ausplay.net.au
                </p>
            </div>

        </div>
    </div>
</div>

<div class='embed-container maps'>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56571.106444252895!2d152.89769466370637!3d-27.603010316157853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b914ebb48276195%3A0xdda074738225ca62!2sAusplay+Surfacing+%26+Shade!5e0!3m2!1sen!2sau!4v1453720421319"
        width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
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
