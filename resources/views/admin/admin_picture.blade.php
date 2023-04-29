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

    <!-- Start fontawesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" type="text/css" />

    <!-- Start Dropzone css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" type="text/css" />
    

    <link rel="shortcut icon" href="{{ asset('../../../assets/images/favicon.png') }}" />
    <style>
        #my-dropzone {
  border: 2px dashed #ccc;
  padding: 20px;
  min-height: 100px;
}

#my-dropzone .dz-preview {
  display: inline-block;
  margin: 10px;
}

#my-dropzone .dz-error-message {
  color: red;
}

    </style>
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-12 col-xl-8 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="card card-default">
                                    <div class="card-header">
                                      <h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em> like look</small></h3>
                                    </div>

                                     {{-- Start card-body css --}}
                                    <div class="card-body">
                                        <form action="/upload" method="post" enctype="multipart/form-data" class="">
                                            <div id="my-dropzone" class="dropzone"></div>
                                            <button type="submit">Submit</button>
                                          </form>
                                    </div>
                                    {{-- End card-body css --}}
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                      Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for more examples and information about the plugin.
                                    </div>
                                  </div>
                                  <!-- /.card -->
                                </div>
                              </div>
                            
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

    {{-- Start Dropzone JS --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>

    <!-- Custom js for this page -->
    
    <!-- End custom js for this page -->
    
    <script>
 Dropzone.autoDiscover = false;
var myDropzone = new Dropzone("#my-dropzone", {
  url: "/upload",
  maxFiles: 3, // Maximum number of files
  maxFilesize: 2, // Maximum file size in MB
  previewsContainer: "#my-dropzone", // Show preview in the Dropzone container
  accept: function(file, done) {
    var images = [];
    for (var i = 0; i < myDropzone.files.length; i++) {
      images.push(myDropzone.files[i].name);
    }
    if (images.indexOf(file.name) === -1) {
      done();
    } else {
      done("This image is a duplicate.");
      myDropzone.removeFile(file);
    }
  }
});

myDropzone.on("error", function(file, message) {
  if (message.includes("File is too big")) {
    alert("File size exceeds the maximum limit of 2 MB.");
    myDropzone.removeFile(file); // Remove the file from Dropzone
  }
});



    </script>
</body>

</html>
