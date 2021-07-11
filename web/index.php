<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subfix | Online Persian Subtitle Fixer</title>
    <meta name="description" content="A simple online tool to fix Persian subtitle encodings">
    <meta name="keywords" content="Subtitle, Encoding, Persian, Fix, Online">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <link rel="icon" href="favicon.png">
    <link rel="apple-touch-icon" href="favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<main class="container mt-5 text-center">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="display-5">Subfix</h1>
            <p class="lead">Online Persian Subtitle Fixer</p>

            <div class="card mt-5 bg-light text-left">
                <div class="card-body">
                    <p class="text-muted small">Choose the subtitle file to upload and fix!</p>
                    <form class="m-3" method="post" action="process.php" enctype="multipart/form-data">
                        <input type="file" class="form-control" name="file" onchange="form.submit()">
                    </form>
                </div>
            </div>

            <p class="mt-5 text-muted small">
                &copy; <?php echo date('Y') ?> by
                <a href="https://miladrahimi.com" title="Milad Rahimi">Milad Rahimi</a>
            </p>
        </div>
    </div>
</main>

</body>
</html>
