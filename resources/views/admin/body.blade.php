<style>
  /* Enhanced Modern Admin Styles */
  .page-content {
    background: transparent;
    padding: 2rem;
    min-height: 100vh;
  }

  .statistic-block {
    position: relative;
    overflow: hidden;
    border: none;
    background: var(--glass-bg);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 2rem;
    transition: all 0.3s ease;
  }

  .statistic-block:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
  }

  .statistic-block::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: conic-gradient(from 0deg, transparent, rgba(255,255,255,0.1), transparent);
    animation: rotate 4s linear infinite;
    z-index: 0;
  }

  .statistic-block .progress-details {
    position: relative;
    z-index: 1;
  }

  .statistic-block .icon {
    font-size: 3rem;
    margin-bottom: 1rem;
    display: block;
  }

  .statistic-block .number {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
  }

  .statistic-block .title strong {
    font-size: 1.1rem;
    font-weight: 600;
  }

  /* Animated Background Elements */
  .animated-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
    animation: shimmer 3s infinite;
    z-index: 0;
  }

  @keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
  }

  /* Enhanced Cards */
  .glass-card {
    background: var(--glass-bg);
    backdrop-filter: blur(10px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
  }

  .glass-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 48px rgba(0,0,0,0.2);
  }

  .glass-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--primary-gradient);
  }

  /* Enhanced Buttons */
  .action-btn {
    background: var(--glass-bg);
    backdrop-filter: blur(10px);
    border: 1px solid var(--glass-border);
    border-radius: 15px;
    padding: 1.5rem;
    text-align: center;
    text-decoration: none;
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    display: block;
    margin-bottom: 1rem;
  }

  .action-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
  }

  .action-btn:hover::before {
    left: 100%;
  }

  .action-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    text-decoration: none;
    color: white;
  }

  .action-btn .fa {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    display: block;
  }

  /* Enhanced Tables */
  .modern-table {
    background: var(--glass-bg);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid var(--glass-border);
  }

  .modern-table thead th {
    background: var(--primary-gradient);
    color: white;
    border: none;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 1.5rem 1rem;
    font-size: 0.9rem;
  }

  .modern-table tbody tr {
    transition: all 0.3s ease;
    border: none;
  }

  .modern-table tbody tr:hover {
    background: rgba(255,255,255,0.1);
    transform: scale(1.01);
  }

  .modern-table tbody td {
    padding: 1.2rem 1rem;
    border: none;
    color: white;
    font-weight: 500;
  }

  /* Enhanced Badges */
  .modern-badge {
    border-radius: 25px;
    padding: 8px 16px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.8rem;
  }

  /* Status Indicators */
  .status-indicator {
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin-right: 8px;
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(76, 175, 80, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(76, 175, 80, 0); }
    100% { box-shadow: 0 0 0 0 rgba(76, 175, 80, 0); }
  }

  /* Floating Elements */
  .floating-element {
    animation: floating 3s ease-in-out infinite;
  }

  @keyframes floating {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
  }

  /* Progress Bars */
  .modern-progress {
    background: rgba(255,255,255,0.2);
    border-radius: 10px;
    overflow: hidden;
    height: 8px;
  }

  .modern-progress-bar {
    background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%);
    height: 100%;
    border-radius: 10px;
    transition: width 0.3s ease;
  }
</style>

<div class="page-content">
        <div class="page-header" style="margin-bottom: 2rem;">
          <div class="container-fluid">
            <h2 class="h3" style="color: white; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin: 0;">
              <i class="fa fa-tachometer mr-3" style="color: #ffd700;"></i>
              Dashboard Overview
            </h2>
            <p style="color: rgba(255,255,255,0.8); margin: 0; font-size: 1.1rem;">
              Real-time insights and management tools for your hotel
            </p>
          </div>
        </div>
        
        <!-- Quick Actions - Moved to Top -->
        <section class="no-padding-bottom" style="margin-bottom: 3rem;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="glass-card">
                  <div class="title">
                    <strong><i class="fa fa-rocket mr-2" style="color: #ffd700;"></i>Quick Actions</strong>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <a href="{{ url('create_room') }}" class="action-btn" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <i class="fa fa-plus-circle"></i>
                        Add New Room
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <a href="{{ url('view_room') }}" class="action-btn" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <i class="fa fa-bed"></i>
                        View All Rooms
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <a href="{{ url('view_bookings') }}" class="action-btn" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                        <i class="fa fa-calendar"></i>
                        View Bookings
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <a href="{{ url('/') }}" class="action-btn" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <i class="fa fa-globe"></i>
                        Public Site
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <!-- Enhanced Statistics Cards -->
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="statistic-block" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                  <div class="animated-bg"></div>
                  <div class="progress-details d-flex align-items-center justify-content-between">
                    <div class="title">
                      <div class="icon floating-element"><i class="fa fa-bed"></i></div>
                      <strong>Total Rooms</strong>
                    </div>
                    <div class="number">{{ $totalRooms ?? 0 }}</div>
                  </div>
                  <div class="modern-progress">
                    <div class="modern-progress-bar" style="width: 100%;"></div>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="statistic-block" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                  <div class="animated-bg"></div>
                  <div class="progress-details d-flex align-items-center justify-content-between">
                    <div class="title">
                      <div class="icon floating-element"><i class="fa fa-calendar-check-o"></i></div>
                      <strong>Total Bookings</strong>
                    </div>
                    <div class="number">{{ $totalBookings ?? 0 }}</div>
                  </div>
                  <div class="modern-progress">
                    <div class="modern-progress-bar" style="width: 100%;"></div>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="statistic-block" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                  <div class="animated-bg"></div>
                  <div class="progress-details d-flex align-items-center justify-content-between">
                    <div class="title">
                      <div class="icon floating-element"><i class="fa fa-dollar"></i></div>
                      <strong>Total Revenue</strong>
                    </div>
                    <div class="number">${{ number_format($totalRevenue ?? 0, 0) }}</div>
                  </div>
                  <div class="modern-progress">
                    <div class="modern-progress-bar" style="width: 100%;"></div>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="statistic-block" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                  <div class="animated-bg"></div>
                  <div class="progress-details d-flex align-items-center justify-content-between">
                    <div class="title">
                      <div class="icon floating-element"><i class="fa fa-home"></i></div>
                      <strong>Available</strong>
                    </div>
                    <div class="number">{{ ($totalRooms ?? 0) - ($totalBookings ?? 0) }}</div>
                  </div>
                  <div class="modern-progress">
                    <div class="modern-progress-bar" style="width: 100%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <!-- Enhanced Recent Bookings -->
        @if(isset($recentBookings) && $recentBookings->count() > 0)
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="glass-card">
                  <div class="title">
                    <strong><i class="fa fa-clock-o mr-2" style="color: #ffd700;"></i>Recent Bookings</strong>
                  </div>
                  <div class="table-responsive">
                    <table class="table modern-table">
                      <thead>
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
                        <tr>
                          <td><span class="modern-badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">{{ $booking->id }}</span></td>
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
                              <span class="modern-badge" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">${{ number_format($booking->room->price * $days, 2) }}</span>
                            @else
                              <span class="modern-badge" style="background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);">N/A</span>
                            @endif
                          </td>
                          <td>
                            <span class="status-indicator" style="background: #4CAF50;"></span>
                            <span class="modern-badge" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">Active</span>
                          </td>
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
        
        <!-- Enhanced System Status -->
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="glass-card">
                  <div class="title">
                    <strong><i class="fa fa-server mr-2" style="color: #ffd700;"></i>System Status</strong>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="status-item" style="text-align: center; padding: 2rem; border-radius: 15px; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; margin: 1rem 0; position: relative; overflow: hidden;">
                        <div class="animated-bg"></div>
                        <div style="position: relative; z-index: 1;">
                          <i class="fa fa-check-circle fa-3x mb-3 floating-element"></i>
                          <h5>System Online</h5>
                          <p>All systems operational</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="status-item" style="text-align: center; padding: 2rem; border-radius: 15px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; margin: 1rem 0; position: relative; overflow: hidden;">
                        <div class="animated-bg"></div>
                        <div style="position: relative; z-index: 1;">
                          <i class="fa fa-database fa-3x mb-3 floating-element"></i>
                          <h5>Database</h5>
                          <p>Connected & Secure</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="glass-card">
                  <div class="title">
                    <strong><i class="fa fa-chart-bar mr-2" style="color: #ffd700;"></i>Quick Stats</strong>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="stat-item" style="text-align: center; padding: 2rem; border-radius: 15px; background: var(--glass-bg); border: 1px solid var(--glass-border); margin: 1rem 0;">
                        <i class="fa fa-users fa-3x mb-3" style="color: #ffd700;"></i>
                        <h4 style="color: white; font-weight: 700;">{{ \App\Models\User::count() }}</h4>
                        <p style="color: rgba(255,255,255,0.8);">Total Users</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="stat-item" style="text-align: center; padding: 2rem; border-radius: 15px; background: var(--glass-bg); border: 1px solid var(--glass-border); margin: 1rem 0;">
                        <i class="fa fa-clock-o fa-3x mb-3" style="color: #ffd700;"></i>
                        <h4 style="color: white; font-weight: 700;">{{ now()->format('H:i') }}</h4>
                        <p style="color: rgba(255,255,255,0.8);">Current Time</p>
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