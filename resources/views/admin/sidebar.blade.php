<ul class="list-unstyled" style="padding: 1rem 0;">
                <li class="sidebar-item" style="margin-bottom: 0.5rem;">
                  <a href="{{url('home')}}" class="sidebar-link" style="display: flex; align-items: center; padding: 15px 20px; color: white; text-decoration: none; border-radius: 15px; margin: 0 10px; transition: all 0.3s ease; background: var(--glass-bg); border: 1px solid var(--glass-border);">
                    <i class="fa fa-dashboard mr-3" style="color: #ffd700; font-size: 1.2rem;"></i>
                    <span style="font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Dashboard</span>
                  </a>
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