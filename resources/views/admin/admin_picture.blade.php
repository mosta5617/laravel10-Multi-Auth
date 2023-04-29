<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Admin Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('../../../assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('../../../assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('../../../assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('../../../assets/css/demo2/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('../../../assets/images/favicon.png') }}" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-12 col-xl-8 mx-auto">
                        <div class="card">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="images[]" multiple>
                                </div>
                                <button type="submit">Upload</button>
                            </form>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="image-container"></div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('../../../assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('../../../assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('../../../assets/js/template.js') }}"></script>
    
    <!-- endinject -->

    {{-- multiple image upload --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    
<script>
    function displayImages(images) {
    var container = document.getElementById('image-container');
    container.innerHTML = '';

    for (var i = 0; i < images.length; i++) {
        var image = document.createElement('img');
        image.src = URL.createObjectURL(images[i]);
        container.appendChild(image);
    }
}
var fileInput = document.querySelector('input[type="file"]');

fileInput.addEventListener('change', function(event) {
    var images = event.target.files;
    displayImages(images);
});
</script>
</body>

</html>
