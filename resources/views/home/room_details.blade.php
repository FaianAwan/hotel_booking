
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
</style>

   </head>
   <body class="main-layout">
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <header>
         @include('home.header')
      </header>

      <div class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-8">
                  <div id="serv_hover" class="room">
                     <div style="padding:20px" class="room_img">
                        <img style="height: 300px; width:800px" src="/room/{{$room->image}}" alt="#"/>
                     </div>
                  </div>
                  <div class="bed_room">
                     <h3>{{$room->room_title}}</h3>
                     <p style="padding: 12px">{{$room->description}}</p>
                     <h4 style="padding: 12px"> Free wifi : {{$room->wifi}}</h4>
                     <h4 style="padding: 12px"> Room Type : {{$room->room_type}}</h4>
                     <h3 style="padding: 12px"> Price: {{$room->price}}</h3>
                  </div>
               </div>
               
               <div class="col-md-4">
                  <h1 style="font-size: 40px!important;">Book Room</h1> 
                  
                     <form action="{{ url('add_booking/' . $room->id) }}" method="POST">

    @csrf
   
   
                  <div>
                     <label>Name</label>
                     <input type="text" name="name">
                  </div>

                  <div>
                     <label>Email</label>
                     <input type="email" name="email">
                  </div>

                  <div>
                     <label>Phone</label>
                     <input type="number" name="phone">
                  </div>
                  <div>
                     <label>Start Date</label>
                     <input type="date" name="startDate" id="startDate">
                  </div>

                  <div>
                     <label>End Date</label>
                     <input type="date" name="endDate" id="endDate">
                  </div>

                  <div>
                     <input type="submit" class="btn btn-primary" value="Book Room">
                  </div>
                  </form>  
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
