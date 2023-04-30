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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Start Dropzone css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" type="text/css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    

    <link rel="shortcut icon" href="{{ asset('../../../assets/images/favicon.png') }}" />

<style>
  .preview-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin: 5px;

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
                                      <h3 class="card-title">Upload Multiple Image</h3>
                                    </div>

                                     {{-- Start card-body css --}}
<div class="card-body">

  <form method="POST" action="{{ route('store.multi.image') }}" enctype="multipart/form-data" >
    @csrf
    <div class="col-lg-12">
        <div class="mb-3">
          <input class="form-control" type="file" name="images[]" id="imageUpload" multiple>
        </div>
        
            <div id="imagePreview" class="rounded"></div> <br>

        <div class="mb-3">
          <button type="submit" class="btn btn-success mb-3">Upload Images</button>
        </div>
    </div>
  </form>   
 

      {{-- Image preview --}}


</div> 

      <!-- /.card-body -->
      <div class="card-footer">
       

        <h2>Uploaded Images:</h2>
        <div class="row">
          @foreach ($uploaded_images as $uploaded_image)
            {{ $uploaded_image->user_id }}
            <img class="wd-100 rounded-circle" src="{{ url('upload/multi-images/' . $uploaded_image->image) }}" alt="profile">
          @endforeach
        </div>
        
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <!-- End custom js for this page -->
    
<script>
const imageUpload = document.getElementById('imageUpload');
const imagePreview = document.getElementById('imagePreview');
const maxUploads = 5; // maximum number of allowed uploads
let uploaded = 0; // current number of uploaded files

imageUpload.addEventListener('change', () => {
  // check if maximum number of uploads has been reached
  if (imageUpload.files.length + uploaded > maxUploads) {
    alert(`Maximum of ${maxUploads} uploads allowed.`);
    imageUpload.value = ''; // clear file input
    return;
  }

  imagePreview.innerHTML = '';
  for (const file of imageUpload.files) {
    // check if file is an image
    if (!file.type.startsWith('image/')) {
      alert('Only image files are allowed.');
      continue;
    }

    const img = document.createElement('img');
    img.src = URL.createObjectURL(file);
    img.classList.add('preview-image');

    // add cancel button
    const cancelButton = document.createElement('button');
    const cancelIcon = document.createElement('i');
    cancelIcon.classList.add('fas', 'fa-times');
    cancelButton.appendChild(cancelIcon);
    cancelButton.classList.add('cancel-button');
    cancelButton.addEventListener('click', () => {
      uploaded--; // decrement uploaded counter
      imagePreview.removeChild(div);
    });

    // create container div for image and cancel button
    const div = document.createElement('div');
    div.appendChild(img);
    div.appendChild(cancelButton);
    imagePreview.appendChild(div);

    uploaded++; // increment uploaded counter
  }
});


  @if (Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}"
      switch (type) {
          case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;
          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;
          case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;
      }
  @endif

</script>
</body>

</html>
