<ul class="list-unstyled">
                <li class="active"><a href="{{url('home')}}"> <i class="icon-home"></i></a>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i></a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a  href="{{url('create_room')}}"></a></li>
                    <li><a  href="{{url('view_room')}}"></a></li>
                  </ul>
                </li>
                <li><a href="#bookingDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-calendar"></i></a>
                  <ul id="bookingDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('view_bookings')}}"></a></li>
                  </ul>
                </li>
                <li><a href="{{ route('admin.contacts.index') }}"> <i class="icon-email"></i></a></li>
      </nav>