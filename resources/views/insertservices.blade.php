@extends('master')
@section('content')
<div class="container">
    <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h1>Insert Service </h1>
            </div>
            <div class="panel-body">
                <form action="{{ url('/service') }}" method="POST" enctype="multipart/form-data" id="serviceForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Service Name" required/>
                        <div id="nameError" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter Service price" required/>
                        <div id="priceError" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" aria-label=".form-select-sm example" id="category" name="category" >
                            <option selected >Open this select menu</option>
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
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" placeholder="Leave a services features here" id="floatingTextarea2" style="height: 100px" required></textarea >
                        <div id="descriptionError" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="gallery">Service Image</label>
                        <input type="file" class="form-control" name="gallery" id="gallery" required>
                        <img id="galleryPreview" style="display: none; width: 100px; height: 100px;"/>
                        <div id="galleryError" class="error"></div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="button" id="submitBtn">Save</button>
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
    // Get the dropdown element
    var dropdown = document.querySelector('#category');

    // Get the new category input element
    var newCategoryInput = document.querySelector('#otherCategory');

    // Add an event listener to the dropdown
    dropdown.addEventListener('change', function() {
    // If "Other" is selected
    if (this.value === 'other') {
        // Show the new category input element
        newCategoryInput.style.display = 'block';
        // Change the name attribute of the dropdown and the new input field
        dropdown.name = 'categoryDropdown';
        newCategoryInput.name = 'category';
    } else {
        // Hide the new category input element
        newCategoryInput.style.display = 'none';
        // Change the name attribute of the dropdown and the new input field
        dropdown.name = 'category';
        newCategoryInput.name = 'otherCategory';
    }
});

    // Get the form and submit button elements
    var form = document.querySelector('#serviceForm');
    var submitBtn = document.querySelector('#submitBtn');

    // Add an event listener to the submit button
    submitBtn.addEventListener('click', function(event) {
        // If "Other" is selected in the dropdown
        if (dropdown.value === 'other') {
            // Set the 'category' value to the 'otherCategory' value
            dropdown.value = newCategoryInput.value;
        }

        // Submit the form
        form.submit();
    });
</script>

<script>
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

<script>
    // Function to validate each field
    function validateForm() {
        let isValid = true;
        
        // Validate Name
        const name = document.getElementById('name').value.trim();
        const nameRegex = /^[a-zA-Z\s]*$/; // Only alphabets and spaces allowed
        if (name === '' || !nameRegex.test(name)) {
            document.getElementById('nameError').innerHTML = '<div class="alert alert-danger" role="alert">Name is required and should only contain letters</div>';
            isValid = false;
        } else {
            document.getElementById('nameError').innerHTML = '';
        }
        
        // Validate Price
        const price = document.getElementById('price').value.trim();
        const priceRegex = /^\d+$/; // Only numbers allowed
        if (price === '' || !priceRegex.test(price)) {
            document.getElementById('priceError').innerHTML = '<div class="alert alert-danger" role="alert">Price is required and should only contain numbers</div>';
            isValid = false;
        } else {
            document.getElementById('priceError').innerHTML = '';
        }
        
        // Validate Description
        const description = document.getElementById('description').value.trim();
        const descriptionRegex = /^[a-zA-Z\s]*$/; // Only alphabets and spaces allowed
        if (description === '' || !descriptionRegex.test(description)) {
            document.getElementById('descriptionError').innerHTML = '<div class="alert alert-danger" role="alert">Description is required and should only contain letters</div>';
            isValid = false;
        } else {
            document.getElementById('descriptionError').innerHTML = '';
        }
        
        // Validate Gallery
        const gallery = document.getElementById('gallery').value.trim();
        const fileExtension = gallery.split('.').pop().toLowerCase();
        if (gallery === '' || !(fileExtension === 'jpg' || fileExtension === 'jpeg' || fileExtension === 'png' || fileExtension === 'gif')) {
            document.getElementById('galleryError').innerHTML = '<div class="alert alert-danger" role="alert">Please select a valid image file (JPG, JPEG, PNG, GIF)</div>';
            isValid = false;
        } else {
            document.getElementById('galleryError').innerHTML = '';
        }
        
        return isValid;
    }
    
    // Submit button click event
    document.getElementById('submitBtn').addEventListener('click', function() {
        if (validateForm()) {
            document.getElementById('serviceForm').submit();
        }
    });
</script>


@endsection