<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style type="text/css">
        .form-container {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 40px;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .form-title {
            color: white;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            color: white;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 10px;
            background: rgba(255,255,255,0.1);
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #ffd700;
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255,255,255,0.7);
        }

        .form-group textarea {
            min-height: 100px;
            resize: vertical;
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1.1rem;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .image-options {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .image-option {
            flex: 1;
            padding: 15px;
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 10px;
            background: rgba(255,255,255,0.05);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .image-option:hover {
            border-color: #ffd700;
            background: rgba(255,255,255,0.1);
        }

        .image-option.active {
            border-color: #ffd700;
            background: rgba(255, 215, 0, 0.1);
        }

        .image-option input[type="radio"] {
            margin-right: 10px;
        }

        .image-option label {
            color: white;
            font-weight: 500;
            cursor: pointer;
        }
    </style>
</head>
<body>
    @include('admin.header')
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h3" style="color: white; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin: 0;">
                    <i class="fa fa-plus-circle mr-3" style="color: #ffd700;"></i>
                    Add New Room
                </h2>
                <p style="color: rgba(255,255,255,0.8); margin: 0; font-size: 1.1rem;">
                    Create a new room for your hotel
                </p>
            </div>
        </div>

        <div class="form-container">
            <h1 class="form-title">Add New Room</h1>
 
            <form action="{{ route('add_room') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label>Room Title</label>
                    <input type="text" name="title" required placeholder="Enter room title">
                </div>
                
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" required placeholder="Enter room description"></textarea>
                </div>
                
                <div class="form-group">
                    <label>Price (per night)</label>
                    <input type="number" name="price" required placeholder="Enter price">
                </div>
                
                <div class="form-group">
                    <label>Room Type</label>
                    <select name="type" required>
                        <option value="regular">Regular</option>
                        <option value="premium">Premium</option>
                        <option value="deluxe">Deluxe</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Free WiFi</label>
                    <select name="wifi" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Room Image</label>
                    <div class="image-options">
                        <div class="image-option" onclick="selectImageOption('upload')">
                            <input type="radio" name="image_type" value="upload" id="upload" checked>
                            <label for="upload">Upload Image</label>
                        </div>
                        <div class="image-option" onclick="selectImageOption('url')">
                            <input type="radio" name="image_type" value="url" id="url">
                            <label for="url">Online URL</label>
                        </div>
                        <div class="image-option" onclick="selectImageOption('default')">
                            <input type="radio" name="image_type" value="default" id="default">
                            <label for="default">Use Default</label>
                        </div>
                    </div>
                    
                    <div id="upload-section">
                        <input type="file" name="image" accept="image/*">
                    </div>
                    
                    <div id="url-section" style="display: none;">
                        <input type="url" name="image_url" placeholder="Enter image URL (e.g., https://images.unsplash.com/...)">
                    </div>
                    
                    <div id="default-section" style="display: none;">
                        <p style="color: rgba(255,255,255,0.8); font-style: italic;">
                            A default image will be selected based on the room type.
                        </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn-submit">
                        <i class="fa fa-plus-circle mr-2"></i>Add Room
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    @include('admin.footer')

    <script>
        function selectImageOption(type) {
            // Hide all sections
            document.getElementById('upload-section').style.display = 'none';
            document.getElementById('url-section').style.display = 'none';
            document.getElementById('default-section').style.display = 'none';
            
            // Show selected section
            document.getElementById(type + '-section').style.display = 'block';
            
            // Update radio button
            document.getElementById(type).checked = true;
            
            // Update active class
            document.querySelectorAll('.image-option').forEach(option => {
                option.classList.remove('active');
            });
            event.currentTarget.classList.add('active');
        }
    </script>
</body>
</html>
