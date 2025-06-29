<ul class="list-unstyled" style="padding: 1rem 0;">
                <li class="sidebar-item" style="margin-bottom: 0.5rem;">
                  <a href="{{url('home')}}" class="sidebar-link" style="display: flex; align-items: center; padding: 15px 20px; color: white; text-decoration: none; border-radius: 15px; margin: 0 10px; transition: all 0.3s ease; background: var(--glass-bg); border: 1px solid var(--glass-border);">
                    <i class="fa fa-dashboard mr-3" style="color: #ffd700; font-size: 1.2rem;"></i>
                    <span style="font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Dashboard</span>
                  </a>
                </li>
                
                <li class="sidebar-item" style="margin-bottom: 0.5rem;">
                  <a href="#roomDropdown" aria-expanded="false" data-toggle="collapse" class="sidebar-link" style="display: flex; align-items: center; justify-content: space-between; padding: 15px 20px; color: white; text-decoration: none; border-radius: 15px; margin: 0 10px; transition: all 0.3s ease; background: var(--glass-bg); border: 1px solid var(--glass-border);">
                    <div style="display: flex; align-items: center;">
                      <i class="fa fa-bed mr-3" style="color: #ffd700; font-size: 1.2rem;"></i>
                      <span style="font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Room Management</span>
                    </div>
                    <i class="fa fa-chevron-down" style="color: #ffd700; transition: all 0.3s ease;"></i>
                  </a>
                  <ul id="roomDropdown" class="collapse list-unstyled" style="margin-left: 20px; margin-top: 0.5rem;">
                    <li style="margin-bottom: 0.3rem;">
                      <a href="{{url('create_room')}}" class="sidebar-sub-link" style="display: flex; align-items: center; padding: 12px 20px; color: rgba(255,255,255,0.8); text-decoration: none; border-radius: 10px; margin: 0 10px; transition: all 0.3s ease; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa fa-plus-circle mr-3" style="color: #4facfe; font-size: 1rem;"></i>
                        <span style="font-weight: 500;">Add New Room</span>
                      </a>
                    </li>
                    <li style="margin-bottom: 0.3rem;">
                      <a href="{{url('view_room')}}" class="sidebar-sub-link" style="display: flex; align-items: center; padding: 12px 20px; color: rgba(255,255,255,0.8); text-decoration: none; border-radius: 10px; margin: 0 10px; transition: all 0.3s ease; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa fa-list mr-3" style="color: #43e97b; font-size: 1rem;"></i>
                        <span style="font-weight: 500;">View All Rooms</span>
                      </a>
                    </li>
                  </ul>
                </li>
                
                <li class="sidebar-item" style="margin-bottom: 0.5rem;">
                  <a href="#bookingDropdown" aria-expanded="false" data-toggle="collapse" class="sidebar-link" style="display: flex; align-items: center; justify-content: space-between; padding: 15px 20px; color: white; text-decoration: none; border-radius: 15px; margin: 0 10px; transition: all 0.3s ease; background: var(--glass-bg); border: 1px solid var(--glass-border);">
                    <div style="display: flex; align-items: center;">
                      <i class="fa fa-calendar-check-o mr-3" style="color: #ffd700; font-size: 1.2rem;"></i>
                      <span style="font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Bookings</span>
                    </div>
                    <i class="fa fa-chevron-down" style="color: #ffd700; transition: all 0.3s ease;"></i>
                  </a>
                  <ul id="bookingDropdown" class="collapse list-unstyled" style="margin-left: 20px; margin-top: 0.5rem;">
                    <li style="margin-bottom: 0.3rem;">
                      <a href="{{url('view_bookings')}}" class="sidebar-sub-link" style="display: flex; align-items: center; padding: 12px 20px; color: rgba(255,255,255,0.8); text-decoration: none; border-radius: 10px; margin: 0 10px; transition: all 0.3s ease; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa fa-list-alt mr-3" style="color: #f093fb; font-size: 1rem;"></i>
                        <span style="font-weight: 500;">View All Bookings</span>
                      </a>
                    </li>
                  </ul>
                </li>
                
                <li class="sidebar-item" style="margin-bottom: 0.5rem;">
                  <a href="{{ route('admin.contacts.index') }}" class="sidebar-link" style="display: flex; align-items: center; padding: 15px 20px; color: white; text-decoration: none; border-radius: 15px; margin: 0 10px; transition: all 0.3s ease; background: var(--glass-bg); border: 1px solid var(--glass-border);">
                    <i class="fa fa-envelope mr-3" style="color: #ffd700; font-size: 1.2rem;"></i>
                    <span style="font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Messages</span>
                  </a>
                </li>
                
                <li class="sidebar-item" style="margin-bottom: 0.5rem;">
                  <a href="{{url('/')}}" class="sidebar-link" style="display: flex; align-items: center; padding: 15px 20px; color: white; text-decoration: none; border-radius: 15px; margin: 0 10px; transition: all 0.3s ease; background: var(--glass-bg); border: 1px solid var(--glass-border);">
                    <i class="fa fa-globe mr-3" style="color: #ffd700; font-size: 1.2rem;"></i>
                    <span style="font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Public Site</span>
                  </a>
                </li>
                
                <!-- Quick Stats in Sidebar -->
                <li class="sidebar-item" style="margin-top: 2rem;">
                  <div style="background: var(--glass-bg); border-radius: 15px; padding: 20px; margin: 0 10px; border: 1px solid var(--glass-border);">
                    <h6 style="color: white; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 15px; text-align: center;">
                      <i class="fa fa-chart-line mr-2" style="color: #ffd700;"></i>
                      Quick Stats
                    </h6>
                    <div style="text-align: center; color: white;">
                      <div style="font-size: 2rem; font-weight: 700; color: #ffd700;">{{ \App\Models\Room::count() }}</div>
                      <div style="font-size: 0.9rem; color: rgba(255,255,255,0.7);">Total Rooms</div>
                    </div>
                    <div style="text-align: center; color: white; margin-top: 15px;">
                      <div style="font-size: 2rem; font-weight: 700; color: #43e97b;">{{ \App\Models\Booking::count() }}</div>
                      <div style="font-size: 0.9rem; color: rgba(255,255,255,0.7);">Total Bookings</div>
                    </div>
                  </div>
                </li>
      </nav>