@extends('master')
@section('content')
<div class="container">
    <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h1>Insert Service </h1>
            </div>
            <div class="panel-body">
                <form action="{{ url('/service') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Service Name"/>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter Service price"/>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" aria-label=".form-select-sm example" id="category" name="category">
                            <option selected>Open this select menu</option>
                            <option value="web_application">Web Application</option>
                            <option value="desktop_application">Desktop Application</option>
                            <option value="template_building">Template Building</option>
                            <option value="graphic_design">Graphic Design</option>
                            <option value="content_writing">Content Writing</option>
                            <option value="seo_services">SEO Services</option>
                            <option value="social_media_management">Social Media Management</option>
                            <option value="other">Other</option>
                          </select>
                          <input type="text" class="form-control" id="otherCategory" name="otherCategory" placeholder="Enter new category" style="display: none;">
                    </div>
                    <div class="form-group">
                        <label for="price">Description</label>
                        <textarea id="description" name="description" class="form-control" placeholder="Leave a services features here" id="floatingTextarea2" style="height: 100px"></textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="price">Service Image</label>
                        <input type="file" class="form-control" name="gallery" id="gallery">
                        <img id="preview" style="display: none; width: 100px; height: 100px;"/>
                       
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary"  type="submit">Save</button>
                      
                      </div>
                    </form>
            </div>
            <div class="panel panel-footer text-right">
               <small> &copy; One Day Digital</small>
            </div>
        </div>
    </div>
</div>
<script>
   // Get the form element
   var form = document.querySelector('form');

// Get the dropdown element
var dropdown = form.querySelector('#category');

// Get the new category input element
var newCategoryInput = form.querySelector('#otherCategory');

// Add an event listener to the dropdown
dropdown.addEventListener('change', function() {
    // If "Other" is selected
    if (this.value === 'other') {
        // Show the new category input element
        newCategoryInput.style.display = 'block';
    } else {
        // Hide the new category input element
        newCategoryInput.style.display = 'none';
    }
});

// Add an event listener to the form submit event
form.addEventListener('submit', function(event) {
    // If "Other" is selected in the dropdown
    if (dropdown.value === 'other') {
        // Prevent the form from submitting normally
        event.preventDefault();

        // Create a new FormData object
        var formData = new FormData(form);

        // Replace the 'category' data with the 'otherCategory' data
        formData.set('category', newCategoryInput.value);

        // Now, you can send 'formData' using an AJAX request
        var xhr = new XMLHttpRequest();
        xhr.open('POST', form.action, true);
        xhr.onload = function () {
            // Process the server response here
        };
        xhr.send(formData);
    }
});



    var fileInput = document.querySelector('#inputGroupFile02');

    // Get the image element
    var preview = document.querySelector('#preview');

    // Add an event listener to the file input element
    fileInput.addEventListener('change', function() {
        // If a file is selected
        if (this.files && this.files[0]) {
            // Create a new FileReader object
            var reader = new FileReader();

            // Define the onload event for the FileReader object
            reader.onload = function(e) {
                // Set the source of the image element to the data URL of the selected file
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            // Read the selected file as a data URL
            reader.readAsDataURL(this.files[0]);
        } else {
            // If no file is selected, hide the image element
            preview.style.display = 'none';
        }
    });
</script>

@endsection