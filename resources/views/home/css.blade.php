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
      
      <!-- bootstrap css - Using CDN for testing -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- style css - Try relative path -->
      <link rel="stylesheet" href="/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      
      <!-- Fallback inline styles for basic layout -->
      <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .header { background: #333; color: white; padding: 10px 0; }
        .header a { color: white; text-decoration: none; margin: 0 10px; }
        .banner_main { background: #f0f0f0; padding: 50px 0; text-align: center; }
        .our_room { padding: 50px 0; }
        .room { border: 1px solid #ddd; margin: 20px 0; padding: 20px; }
        .gallery { padding: 50px 0; }
        .blog { padding: 50px 0; }
        .contact { padding: 50px 0; }
        .footer { background: #333; color: white; padding: 50px 0; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 15px; }
        .row { display: flex; flex-wrap: wrap; }
        .col-md-4 { flex: 0 0 33.333%; padding: 0 15px; }
        .col-md-6 { flex: 0 0 50%; padding: 0 15px; }
        .col-md-12 { flex: 0 0 100%; padding: 0 15px; }
        .btn { padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer; }
        .btn:hover { background: #0056b3; }
      </style>