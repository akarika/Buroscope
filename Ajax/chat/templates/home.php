<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div id="chatZone" class="well"></div>
        </div>
        <div class="col-md-4">
            <form action="" method="post" enctype="multipart/form-data"><!-- enctype permet d envoyer des fichiers et de les transmettrent-->
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" id="pseudo" name="pseudo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="zoneMessage">Message</label>
                    <textarea name="message" id="zoneMessage" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pseudo">Fichier</label>
                    <input type="file" id="file" name="file" class="form-control">
                </div><div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" id="submit" name="submit" value="Boulégue">
                </div>
            </form>
        </div>
    </div>
</div>


<script  src="js/jquery.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>tinymce.init({
        selector: "textarea",  // change this value according to your HTML
        plugins: "emoticons textcolor",
        menubar:"", // change this value according to your HTML
        toolbar:"emoticons bold italic underline forecolor backcolor"
    });;</script>
</body>
</html>
