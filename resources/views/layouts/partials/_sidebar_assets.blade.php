<div class="trGratuit">
    <img src="{{asset('/images/transport-gratuit.png')}}" alt="transport gratuit" title="transport gratuit">
    <p>Transport <span>GRATUIT</span> in locatiile acoperite de curierat pentru comenzi cu valori mai mari de <span>350</span> de lei.</p>
</div>

<article class="niceInfoBox col-sm-6 col-md-12"><h3>Te sunam noi</h3><hr><p>Lasa-ne un mesaj si vei fi contactat in intervalul orar specificat de tine.</p><a href="{{$siteurl}}/phone_me.php">Completeaza formularul</a></article><div class="conecteazaTe col-sm-6 col-md-12">
    <h3>Conecteaza-te cu noi</h3>
    <p class="social_icons">
        <a class="webicon facebook large" href="https://www.facebook.com/toolszone" target="_blank">Facebook</a>
        <a class="webicon youtube large" href="http://www.youtube.com/user/ToolsZone" target="_blank">YouTube</a>
        <a class="webicon linkedin large" href="http://www.linkedin.com/pub/toolszone-ro-online-shop/1a/690/11b" target="_blank">LinkedIn</a>
        <a class="webicon twitter large" href="https://twitter.com/ToolsZone/" target="_blank">Twitter</a>
        <a class="webicon googleplus large" href="https://plus.google.com/+ToolsZonero" target="_blank">GooglePlus</a>
    </p>

</div>

<script language="javascript">
    function checkEmail() {
        var email = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email.value)) {
            alert('Adresa de mail introdusa nu este valida.');
            email.focus
            return false;
        }else{
            document.inscriere_newsletter.submit();
        }
    }
</script>
<div class="inscrieTe">
    <form name="inscriere_newsletter" action="{{$siteurl}}/subscriere_newsletter.php" method="POST">
        <h3>Inscrie-te la Newsletter</h3>
        <p>Poti primi informatii utile
            promotii, detalii despre
            produsele noi etc.</p>
        <div class="form-group">
            <label for="companie">Companie:</label>
            <input type="text" class="form-control" name="companie" id="companie">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <input type="text" name="name" class="hideMe">
        <button class="default" onclick="checkEmail()">Subscrie</button>
    </form>
</div>
