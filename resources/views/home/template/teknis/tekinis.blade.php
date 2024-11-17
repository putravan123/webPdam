<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        
        <!-- Libraries Stylesheet -->
        <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
        @vite([
            'resources/css/app.css', 'resources/js/app.js'
        ])
    </head>

<body>

    <!-- Navbar Start -->
    @include('home.template.teknis.navbar')
    <!-- Navbar End -->

    <!-- Layanan Warga Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h1 class="display-4 text-capitalize mb-3">Teknis</h1>
                <p>Informasi mengenai layanan yang tersedia untuk warga, termasuk pengaduan dan perizinan.</p>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach($teknis as $item)
                    <div class="col-lg-6 col-xl-4">
                        <div class="service-item shadow-sm rounded">
                            <div class="service-img">
                                <img src="{{ asset($item->image) }}" class="img-fluid rounded-top w-100" alt="{{ $item->title }}" style="height: 250px; object-fit: cover;">
                            </div>
                            <div class="service-content rounded-bottom p-4">
                                <h5 class="mb-3">{{ $item->title }}</h5>
                                <p>{{ Str::limit($item->content, 100) }}...</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Control -->
            <div class="d-flex justify-content-center mt-4">
                {{-- {{ $layanan->links('pagination::bootstrap-5') }} --}}
            </div>
        </div>
    </div>
    <!-- Layanan Warga Section End -->

    @include('home.template.footer')

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    
    <!-- Template Javascript -->
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>
</html>
