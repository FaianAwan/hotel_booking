<!DOCTYPE html>
<html lang="en">
   <head>
      <base href="/public">
      @include('home.css')
      
<style type="text/css">
  label {
    display: inline-block;
    width: 200px;
  }

  input {
    width: 100%;
  }
  
  .room-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
  }
  
  .room-image:hover {
    transform: scale(1.02);
    box-shadow: 0 12px 35px rgba(0,0,0,0.2);
  }
  
  .room-details {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 15px;
    margin-top: 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  }
  
  .booking-form {
    background: #fff;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    position: sticky;
    top: 20px;
  }
  
  .booking-form h1 {
    color: #333;
    margin-bottom: 25px;
    text-align: center;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .form-group label {
    font-weight: 600;
    color: #555;
    margin-bottom: 8px;
    display: block;
  }
  
  .form-group input {
    width: 100%;
    padding: 12px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    transition: all 0.3s ease;
  }
  
  .form-group input:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
  }
  
  .btn-book {
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
  }
  
  .btn-book:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
  }
</style>

   </head>
   <body class="main-layout">
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#"/></div>
      </div>
      <header>
         @include('home.header')
      </header>

      <div class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Room Details</h2>
                     <p>Discover the perfect accommodation for your stay</p>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-8">
                  <div id="serv_hover" class="room">
                     <div style="padding:20px" class="room_img">
                        <img class="room-image" src="{{ asset('room/' . $room->image) }}" alt="{{ $room->room_title }}"/>
                     </div>
                  </div>
                  <div class="room-details">
                     <h3 style="color: #333; margin-bottom: 20px;">{{$room->room_title}}</h3>
                     <p style="padding: 12px; line-height: 1.6; color: #666;">{{$room->description}}</p>
                     <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                        <div style="text-align: center; padding: 15px; background: #e3f2fd; border-radius: 10px; flex: 1; margin: 0 5px;">
                           <i class="fa fa-wifi" style="color: #2196f3; font-size: 1.5rem;"></i>
                           <h5 style="margin: 10px 0 5px 0; color: #333;">WiFi</h5>
                           <p style="margin: 0; color: #666;">{{$room->wifi}}</p>
                        </div>
                        <div style="text-align: center; padding: 15px; background: #f3e5f5; border-radius: 10px; flex: 1; margin: 0 5px;">
                           <i class="fa fa-bed" style="color: #9c27b0; font-size: 1.5rem;"></i>
                           <h5 style="margin: 10px 0 5px 0; color: #333;">Type</h5>
                           <p style="margin: 0; color: #666;">{{$room->room_type}}</p>
                        </div>
                        <div style="text-align: center; padding: 15px; background: #e8f5e8; border-radius: 10px; flex: 1; margin: 0 5px;">
                           <i class="fa fa-dollar" style="color: #4caf50; font-size: 1.5rem;"></i>
                           <h5 style="margin: 10px 0 5px 0; color: #333;">Price</h5>
                           <p style="margin: 0; color: #666;">${{$room->price}}/night</p>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="col-md-4">
                  <div class="booking-form">
                     <h1 style="font-size: 32px!important;">Book Room</h1> 
                     
                     <form action="{{ url('add_booking/' . $room->id) }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                           <label>Name</label>
                           <input type="text" name="name" required>
                        </div>

                        <div class="form-group">
                           <label>Email</label>
                           <input type="email" name="email" required>
                        </div>

                        <div class="form-group">
                           <label>Phone</label>
                           <input type="number" name="phone" required>
                        </div>
                        
                        <div class="form-group">
                           <label>Start Date</label>
                           <input type="date" name="startDate" id="startDate" required>
                        </div>

                        <div class="form-group">
                           <label>End Date</label>
                           <input type="date" name="endDate" id="endDate" required>
                        </div>

                        <div class="form-group">
                           <button type="submit" class="btn-book">Book Room</button>
                        </div>
                     </form>  
                  </div>
               </div>
            </div>
         </div>
      </div>
       
      @include('home.footer')

<script type="text/javascript">
   $(function(){
  var dtToday = new Date();

  var month = dtToday.getMonth() + 1;
  var day = dtToday.getDate();
  var year = dtToday.getFullYear();

  if(month < 10)
    month = '0' + month.toString();

  if(day < 10)
    day = '0' + day.toString();

  var maxDate = year + '-' + month + '-' + day;
  $('#startDate').attr('min', maxDate);
  $('#endDate').attr('min', maxDate);
});

</script>

   </body>
</html>
