<style>
  /* Enhanced Button Hover Effects */
  .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3) !important;
  }
  
  /* Card Hover Effects */
  .block:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease;
  }
  
  /* Table Row Hover */
  .table tbody tr:hover {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%) !important;
    transform: scale(1.01);
    transition: all 0.3s ease;
  }
  
  /* Status Item Hover */
  .status-item:hover {
    transform: scale(1.05);
    transition: all 0.3s ease;
  }
  
  /* Stat Item Hover */
  .stat-item:hover {
    transform: scale(1.1);
    transition: all 0.3s ease;
  }
  
  /* Badge Enhancements */
  .badge {
    font-size: 0.9em;
    padding: 8px 12px;
    border-radius: 20px;
  }
  
  /* Icon Enhancements */
  .fa {
    transition: all 0.3s ease;
  }
  
  .btn:hover .fa {
    transform: scale(1.2);
  }
  
  /* Gradient Text */
  .gradient-text {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
</style>

<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard Overview</h2>
          </div>
        </div>
        
        <!-- Statistics Cards -->
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon" style="color: white;"><i class="fa fa-bed"></i></div><strong style="color: white;">Total Rooms</strong>
                    </div>
                    <div class="number" style="color: white; font-size: 2.5em; font-weight: bold;">{{ $totalRooms ?? 0 }}</div>
                  </div>
                  <div class="progress progress-template" style="background: rgba(255,255,255,0.2);">
                    <div role="progressbar" style="width: 100%; background: rgba(255,255,255,0.8);" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon" style="color: white;"><i class="fa fa-calendar-check-o"></i></div><strong style="color: white;">Total Bookings</strong>
                    </div>
                    <div class="number" style="color: white; font-size: 2.5em; font-weight: bold;">{{ $totalBookings ?? 0 }}</div>
                  </div>
                  <div class="progress progress-template" style="background: rgba(255,255,255,0.2);">
                    <div role="progressbar" style="width: 100%; background: rgba(255,255,255,0.8);" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon" style="color: white;"><i class="fa fa-dollar"></i></div><strong style="color: white;">Total Revenue</strong>
                    </div>
                    <div class="number" style="color: white; font-size: 2.5em; font-weight: bold;">${{ number_format($totalRevenue ?? 0, 0) }}</div>
                  </div>
                  <div class="progress progress-template" style="background: rgba(255,255,255,0.2);">
                    <div role="progressbar" style="width: 100%; background: rgba(255,255,255,0.8);" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon" style="color: white;"><i class="fa fa-home"></i></div><strong style="color: white;">Available</strong>
                    </div>
                    <div class="number" style="color: white; font-size: 2.5em; font-weight: bold;">{{ ($totalRooms ?? 0) - ($totalBookings ?? 0) }}</div>
                  </div>
                  <div class="progress progress-template" style="background: rgba(255,255,255,0.2);">
                    <div role="progressbar" style="width: 100%; background: rgba(255,255,255,0.8);" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <!-- Quick Actions -->
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block" style="border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                  <div class="title"><strong>Quick Actions</strong></div>
                  <div class="row">
                    <div class="col-md-3 col-sm-6 mb-3">
                      <a href="{{ url('create_room') }}" class="btn btn-primary btn-block" style="border-radius: 10px; padding: 15px; font-size: 16px; font-weight: bold; box-shadow: 0 4px 15px rgba(0,123,255,0.3); transition: all 0.3s ease;">
                        <i class="fa fa-plus-circle fa-2x mb-2"></i><br>
                        Add New Room
                      </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                      <a href="{{ url('view_room') }}" class="btn btn-info btn-block" style="border-radius: 10px; padding: 15px; font-size: 16px; font-weight: bold; box-shadow: 0 4px 15px rgba(23,162,184,0.3); transition: all 0.3s ease;">
                        <i class="fa fa-bed fa-2x mb-2"></i><br>
                        View All Rooms
                      </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                      <a href="{{ url('view_bookings') }}" class="btn btn-success btn-block" style="border-radius: 10px; padding: 15px; font-size: 16px; font-weight: bold; box-shadow: 0 4px 15px rgba(40,167,69,0.3); transition: all 0.3s ease;">
                        <i class="fa fa-calendar fa-2x mb-2"></i><br>
                        View Bookings
                      </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">
                      <a href="{{ url('/') }}" class="btn btn-warning btn-block" style="border-radius: 10px; padding: 15px; font-size: 16px; font-weight: bold; box-shadow: 0 4px 15px rgba(255,193,7,0.3); transition: all 0.3s ease;">
                        <i class="fa fa-globe fa-2x mb-2"></i><br>
                        Public Site
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <!-- Recent Bookings -->
        @if(isset($recentBookings) && $recentBookings->count() > 0)
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block" style="border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                  <div class="title"><strong>Recent Bookings</strong></div>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover" style="border-radius: 10px; overflow: hidden;">
                      <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                        <tr>
                          <th>ID</th>
                          <th>Guest Name</th>
                          <th>Room</th>
                          <th>Check-in</th>
                          <th>Check-out</th>
                          <th>Total Price</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($recentBookings as $booking)
                        <tr style="transition: all 0.3s ease;">
                          <td><span class="badge badge-primary">{{ $booking->id }}</span></td>
                          <td><strong>{{ $booking->name }}</strong></td>
                          <td>{{ $booking->room ? $booking->room->room_title : 'Room Deleted' }}</td>
                          <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('M d, Y') }}</td>
                          <td>{{ \Carbon\Carbon::parse($booking->end_date)->format('M d, Y') }}</td>
                          <td>
                            @if($booking->room)
                              @php
                                $start = \Carbon\Carbon::parse($booking->start_date);
                                $end = \Carbon\Carbon::parse($booking->end_date);
                                $days = $start->diffInDays($end);
                              @endphp
                              <span class="badge badge-success">${{ number_format($booking->room->price * $days, 2) }}</span>
                            @else
                              <span class="badge badge-secondary">N/A</span>
                            @endif
                          </td>
                          <td><span class="badge badge-info">Active</span></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        @endif
        
        <!-- System Status -->
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="block" style="border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                  <div class="title"><strong>System Status</strong></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="status-item" style="text-align: center; padding: 20px; border-radius: 10px; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; margin: 10px 0;">
                        <i class="fa fa-check-circle fa-3x mb-2"></i>
                        <h5>System Online</h5>
                        <p>All systems operational</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="status-item" style="text-align: center; padding: 20px; border-radius: 10px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; margin: 10px 0;">
                        <i class="fa fa-database fa-3x mb-2"></i>
                        <h5>Database</h5>
                        <p>Connected & Secure</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="block" style="border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                  <div class="title"><strong>Quick Stats</strong></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="stat-item" style="text-align: center; padding: 15px;">
                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                        <h4>{{ \App\Models\User::count() }}</h4>
                        <p>Total Users</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="stat-item" style="text-align: center; padding: 15px;">
                        <i class="fa fa-clock-o fa-2x text-warning mb-2"></i>
                        <h4>{{ now()->format('H:i') }}</h4>
                        <p>Current Time</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
</section>
        </section>