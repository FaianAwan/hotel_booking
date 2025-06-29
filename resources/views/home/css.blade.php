<!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Hotel Booking System</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      
      <!-- Debug: Show asset URLs -->
      <script>
        console.log('Asset URLs:');
        console.log('Bootstrap CSS:', '{{ asset("css/bootstrap.min.css") }}');
        console.log('Style CSS:', '{{ asset("css/style.css") }}');
        console.log('Responsive CSS:', '{{ asset("css/responsive.css") }}');
      </script>
      
      <!-- bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
      <!-- Responsive-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- fevicon -->
      <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3081/3081559.png" type="image/png" />
      <!-- Scrollbar Custom CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mcustomscrollbar/3.1.13/jquery.mCustomScrollbar.min.css" rel="stylesheet">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      
      <!-- Custom styles for hotel theme -->
      <style>
        body { 
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
          margin: 0; 
          padding: 0; 
          background: #f8f9fa;
        }
        .header { 
          background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
          color: white; 
          padding: 15px 0; 
          box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header a { 
          color: white; 
          text-decoration: none; 
          margin: 0 15px; 
          font-weight: 500;
          transition: all 0.3s ease;
        }
        .header a:hover { 
          color: #ffd700; 
          transform: translateY(-2px);
        }
        .banner_main { 
          background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'); 
          background-size: cover;
          background-position: center;
          padding: 100px 0; 
          text-align: center; 
          color: white;
        }
        .our_room { 
          padding: 80px 0; 
          background: white;
        }
        .room { 
          border: 1px solid #e9ecef; 
          margin: 20px 0; 
          padding: 20px; 
          border-radius: 10px;
          box-shadow: 0 5px 15px rgba(0,0,0,0.1);
          transition: transform 0.3s ease;
        }
        .room:hover { 
          transform: translateY(-5px);
          box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .gallery { 
          padding: 80px 0; 
          background: #f8f9fa;
        }
        .blog { 
          padding: 80px 0; 
          background: white;
        }
        .contact { 
          padding: 80px 0; 
          background: #f8f9fa;
        }
        .footer { 
          background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%); 
          color: white; 
          padding: 50px 0; 
        }
        .container { 
          max-width: 1200px; 
          margin: 0 auto; 
          padding: 0 15px; 
        }
        .row { 
          display: flex; 
          flex-wrap: wrap; 
        }
        .col-md-4 { 
          flex: 0 0 33.333%; 
          padding: 0 15px; 
        }
        .col-md-6 { 
          flex: 0 0 50%; 
          padding: 0 15px; 
        }
        .col-md-12 { 
          flex: 0 0 100%; 
          padding: 0 15px; 
        }
        .btn { 
          padding: 12px 25px; 
          background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
          color: white; 
          border: none; 
          cursor: pointer; 
          border-radius: 25px;
          font-weight: 500;
          transition: all 0.3s ease;
        }
        .btn:hover { 
          background: linear-gradient(135deg, #764ba2 0%, #667eea 100%); 
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .loader_bg { 
          position: fixed; 
          top: 0; 
          left: 0; 
          width: 100%; 
          height: 100%; 
          background: rgba(255,255,255,0.9); 
          z-index: 9999; 
          display: flex; 
          align-items: center; 
          justify-content: center;
        }
        .loader { 
          width: 50px; 
          height: 50px; 
          border: 5px solid #f3f3f3; 
          border-top: 5px solid #667eea; 
          border-radius: 50%; 
          animation: spin 1s linear infinite;
        }
        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
        .titlepage h2 {
          color: #2c3e50;
          font-size: 2.5rem;
          font-weight: 700;
          margin-bottom: 20px;
          text-align: center;
        }
        .titlepage p {
          color: #7f8c8d;
          font-size: 1.1rem;
          text-align: center;
          margin-bottom: 40px;
        }
      </style>
      
      <!-- Script to hide loader -->
      <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                var loader = document.querySelector('.loader_bg');
                if (loader) {
                    loader.classList.add('hidden');
                }
            }, 1000); // Hide after 1 second
        });
        
        // Fallback: hide loader after 3 seconds regardless
        setTimeout(function() {
            var loader = document.querySelector('.loader_bg');
            if (loader) {
                loader.classList.add('hidden');
            }
        }, 3000);
      </script>