<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
.table_deg
{
    background: var(--glass-bg);
    backdrop-filter: blur(10px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    overflow: hidden;
    margin: auto;
    width: 100%;
    text-align: center;
    margin-top: 40px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}

.th_deg
{
    background: var(--primary-gradient);
    color: white;
    padding: 20px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
}

tr
{
    border: none;
    transition: all 0.3s ease;
}

tr:hover {
    background: rgba(255,255,255,0.1);
    transform: scale(1.01);
}

td
{
    padding: 15px;
    color: white;
    font-weight: 500;
    border: none;
}

.room-image {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.room-image:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

.btn {
    border-radius: 10px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 8px 16px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}
</style>
  </head>
  <body>
    @include('admin.header')
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h3" style="color: white; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin: 0;">
              <i class="fa fa-bed mr-3" style="color: #ffd700;"></i>
              Room Management
            </h2>
            <p style="color: rgba(255,255,255,0.8); margin: 0; font-size: 1.1rem;">
              Manage all your hotel rooms
            </p>
          </div>
        </div>

<table  class='table_deg'>
    <tr>
        <th class="th_deg">Room Title</th>
       <th class="th_deg">Description</th>
        <th class="th_deg">Price</th>
        <th class="th_deg">Wifi</th>
        <th class="th_deg">Room Type</th>
        <th class="th_deg">Image</th>
         <th class="th_deg">Delete</th>
         <th class="th_deg">Update</th>
    </tr>
   @foreach($data as $data)
<tr>
    <td>{{$data->room_title}}</td>
    <td>{{ Str::limit($data->description, 50) }}</td>
    <td>${{$data->price}}</td>
    <td>{{$data->wifi}}</td>
    <td>{{$data->room_type}}</td>
    <td>
        @php
          // Check if the image exists locally, if not use online placeholder
          $imagePath = public_path('room/' . $data->image);
          $imageUrl = '';
          
          if (file_exists($imagePath) && $data->image) {
              $imageUrl = asset('room/' . $data->image);
          } else {
              // Use online placeholder based on room type
              switch(strtolower($data->room_type)) {
                  case 'deluxe':
                      $imageUrl = 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=150&h=100&fit=crop';
                      break;
                  case 'premium':
                      $imageUrl = 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=150&h=100&fit=crop';
                      break;
                  default:
                      $imageUrl = 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=150&h=100&fit=crop';
                      break;
              }
          }
        @endphp
        <img class="room-image" src="{{ $imageUrl }}" alt="{{ $data->room_title }}" onerror="this.src='https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=150&h=100&fit=crop'">
    </td>
   <td>
    <a onclick="return confirm('Are you sure to delete this room?');" class="btn btn-danger" href="{{url('room_delete',$data->id)}}">
        <i class="fa fa-trash mr-1"></i>Delete
    </a>
</td>
    <td>
    <a class="btn btn-warning" href="{{url('room_update',$data->id)}}">
        <i class="fa fa-edit mr-1"></i>Update
    </a>
</td>
<tr>
@endforeach
</table>

</div>
</div>
</div>


        @include('admin.footer')
  </body>
</html>