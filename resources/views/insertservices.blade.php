@extends('master')
@section('content')
<div class='container custom-login' >
    <div class ="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="{{ url('/service') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group" >
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="price">Email address:</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="enter your price">
                    </div>
                    <div class="form-group">
                        <label for="category">Category:</label><br>
                        <select id="category" name="category">
                            <option value="" disabled selected>Select category</option>
                            <option value="web_application">Web Application</option>
                            <option value="desktop_application">Desktop Application</option>
                            <option value="template_building">Template Building</option>
                            <option value="graphic_design">Graphic Design</option>
                            <option value="content_writing">Content Writing</option>
                            <option value="seo_services">SEO Services</option>
                            <option value="social_media_management">Social Media Management</option>
                            <option value="other">Other</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label><br>
                        <textarea id="description" class="form-control" name="description" rows="4" cols="50" placeholder="Enter your description here..."></textarea>
                    </div>  
                    <div class="form-group">
                        <label for="description">uplode pictures:</label><br>
                        <input class="form-control" name="gallery" type="file" id="gallery">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
            </form>
            
    </div>
</div>
<div>
@endsection