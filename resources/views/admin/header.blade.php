<header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 10px; padding: 10px; color: white; transition: all 0.3s ease;">
              <i class="fa fa-bars floating"></i>
            </button>
            
            <!-- Logo/Brand -->
            <div class="navbar-brand ml-3" style="color: white; font-weight: 700; font-size: 1.5rem; text-transform: uppercase; letter-spacing: 2px;">
              <i class="fa fa-hotel mr-2" style="color: #ffd700;"></i>
              Hotel Admin
            </div>
          </div>
          
          <div class="right-menu list-inline no-margin-bottom">    
            <!-- User Info -->
            <div class="list-inline-item mr-3">
              <div class="d-flex align-items-center" style="background: var(--glass-bg); border-radius: 25px; padding: 8px 15px; border: 1px solid var(--glass-border);">
                <i class="fa fa-user-circle fa-2x mr-2" style="color: #ffd700;"></i>
                <div>
                  <div style="color: white; font-weight: 600; font-size: 0.9rem;">{{ Auth::user()->name ?? 'Admin' }}</div>
                  <div style="color: rgba(255,255,255,0.7); font-size: 0.8rem;">{{ Auth::user()->usertype ?? 'admin' }}</div>
                </div>
              </div>
            </div>
            
            <!-- Notifications -->
            <div class="list-inline-item mr-3">
              <button class="btn" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 50%; width: 45px; height: 45px; color: white; position: relative;">
                <i class="fa fa-bell floating"></i>
                <span class="badge badge-danger" style="position: absolute; top: -5px; right: -5px; background: #e74c3c; border-radius: 50%; width: 20px; height: 20px; font-size: 0.7rem; display: flex; align-items: center; justify-content: center;">3</span>
              </button>
            </div>
            
            <!-- Log out -->
            <div class="list-inline-item logout">  
              <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn" style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%); border: none; border-radius: 25px; padding: 10px 20px; color: white; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; transition: all 0.3s ease;">
                  <i class="fa fa-sign-out mr-2"></i> Logout
                </button>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- Welcome Banner -->
    <div class="welcome-banner" style="background: var(--glass-bg); backdrop-filter: blur(10px); border-bottom: 1px solid var(--glass-border); padding: 1rem 0; margin-bottom: 2rem;">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 style="color: white; font-weight: 700; margin: 0; font-size: 1.8rem;">
              <i class="fa fa-sun-o mr-2" style="color: #ffd700;"></i>
              Welcome back, {{ Auth::user()->name ?? 'Administrator' }}!
            </h2>
            <p style="color: rgba(255,255,255,0.8); margin: 0; font-size: 1rem;">
              Here's what's happening with your hotel today
            </p>
          </div>
          <div class="col-md-4 text-right">
            <div style="background: var(--glass-bg); border-radius: 15px; padding: 15px; border: 1px solid var(--glass-border);">
              <div style="color: white; font-weight: 600; font-size: 1.2rem;">
                <i class="fa fa-clock-o mr-2" style="color: #ffd700;"></i>
                {{ now()->format('l, F j, Y') }}
              </div>
              <div style="color: rgba(255,255,255,0.7); font-size: 0.9rem;">
                {{ now()->format('g:i A') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center" style="padding: 2rem 1rem; border-bottom: 1px solid var(--glass-border);">
          <div class="title" style="color: white; font-weight: 700; font-size: 1.2rem; text-transform: uppercase; letter-spacing: 1px;">
            <i class="fa fa-cogs mr-2" style="color: #ffd700;"></i>
            Dashboard
          </div>
        </div>