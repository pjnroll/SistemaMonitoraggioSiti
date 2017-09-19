

<html>
	<head>
		<title>Sistema di Monitoraggio Siti - FortuFarfaLavia</title>
        <!-- Latest compiled and minified CSS -->
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
	
	<body><!-- BEGIN AV_TOOLBAR -->
<div id="av_toolbar_regdiv">
<div class="av_site"><a target="_blank" href="https://it.altervista.org/crea-sito-gratis.php?utm_campaign=toolbar&amp;utm_source=link&amp;utm_medium=link" title="Siti, blog e web hosting gratis">Crea sito</a></div>
</div>
<script type="text/javascript">
(function(d, s) {
	var fjs = d.getElementsByTagName(s)[0], js = d.createElement(s);
	js.src = "//tb.altervista.org/js/script.js?1";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script'));
</script>
<!-- END AV_TOOLBAR -->

    <div class="container">

        
<div class="row"><br></div>
<div id="loginDIV" class="row col-md-4 col-lg-4 col-xs-12 col-sm-6 col-lg-offset-4" style="border: 1px dotted black">
    <div class="row">
        <div style="text-align:center;" class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <h1 class="titlefont" style="color:Black;">Sistema di Monitoraggio Siti</h1>
            <h3>FortuFarfaLavia</h3>
            <h4 style="color:black; font-weight:300;">Identificati per accedere alle funzionalità.</h4>
        </div>
    </div>
    <div class="row">
        <div  style="margin-top:0px;" class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <br/>
            <form method="POST" action="/pagine/login.php?action=verificaLogin" >
                <span id="msg"></span>
                <div class="form-group">
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                        <input class="form-control" type="text" name="login-mail" placeholder="E-mail">
                    </div>
                </div>
                <br /><br />
                <div class="form-group">
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                        <input class="form-control" type="password" name="login-password" placeholder="Password">
                    </div>
                </div>
                <br />

                <div id="errore" class="form-group" style="text-align:center;" role="alert">
                    <span class="text-danger" id="login-response">
                                            </span>
                </div>
                <br />

                <div class="form-group">
                    <center>
                        <input type="submit" id="submit-login-user" class="btn btn-success btn-lg" test="Login">
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>    </div>
    </body>
</html>
