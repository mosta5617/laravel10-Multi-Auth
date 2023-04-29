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

                                        {{-- Image Upload --}}
                                      <div id="actions" class="row">
                                        <div class="col-lg-6">
                                          <div class="btn-group w-100">
                                            <span class="btn btn-success col fileinput-button">
                                              <i class="fas fa-plus"></i>
                                              <span>Add files</span>
                                            </span>
                                            <button type="submit" class="btn btn-primary col start">
                                              <i class="fas fa-upload"></i>
                                              <span>Start upload</span>
                                            </button>
                                            <button type="reset" class="btn btn-warning col cancel">
                                              <i class="fas fa-times-circle"></i>
                                              <span>Cancel upload</span>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="col-lg-6 d-flex align-items-center">
                                          <div class="fileupload-process w-100">
                                            <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                              <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      {{-- Image preview --}}
                                      <div class="table table-striped files" id="previews">
                                        <div id="template" class="row mt-2">
                                          <div class="col-auto">
                                              <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                                          </div>
                                          <div class="col d-flex align-items-center">
                                              <p class="mb-0">
                                                <span class="lead" data-dz-name></span>
                                                (<span data-dz-size></span>)
                                              </p>
                                              <strong class="error text-danger" data-dz-errormessage></strong>
                                          </div>
                                          <div class="col-4 d-flex align-items-center">
                                              <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                              </div>
                                          </div>
                                          <div class="col-auto d-flex align-items-center">
                                            <div class="btn-group">
                                              <button class="btn btn-primary start">
                                                <i class="fas fa-upload"></i>
                                                <span>Start</span>
                                              </button>
                                              <button data-dz-remove class="btn btn-warning cancel">
                                                <i class="fas fa-times-circle"></i>
                                                <span>Cancel</span>
                                              </button>
                                              <button data-dz-remove class="btn btn-danger delete">
                                                <i class="fas fa-trash"></i>
                                                <span>Delete</span>
                                              </button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

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

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false
      
        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)
      
        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
          url: "/target-url", // Set the url
          thumbnailWidth:  80,
          thumbnailHeight: 80,
          parallelUploads: 20,
          previewTemplate: previewTemplate,
          autoQueue: false, // Make sure the files aren't queued until manually added
          previewsContainer: "#previews", // Define the container to display the previews
          clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })
      
        myDropzone.on("addedfile", function(file) {
          // Hookup the start button
          file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
        })
      
        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
          document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })
      
        myDropzone.on("sending", function(file) {
          // Show the total progress bar when upload starts
          document.querySelector("#total-progress").style.opacity = "1"
          // And disable the start button
          file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })
      
        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
          document.querySelector("#total-progress").style.opacity = "0"
        })
      
        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
          myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
          myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
      </script>
</body>

</html>
