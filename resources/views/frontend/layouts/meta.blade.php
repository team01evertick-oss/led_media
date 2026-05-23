<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
/>

<title>@yield('title', 'LED Media')</title>

<!-- 
     BOOTSTRAP
 -->
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
/>

<!--
     FONT AWESOME
-->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
/>

<!--
     GOOGLE FONT
-->
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet"
/>


<!-- 
     CUSTOM CSS
 -->

@vite([
    'resources/css/app.css',
    'resources/css/home/navbar.css',
    'resources/css/home/footer.css',
    'resources/css/home/style.css',
    'resources/css/home/about.css',
    'resources/css/home/services.css',
    'resources/css/home/industries.css',
    'resources/css/home/featured-projects.css',
    'resources/css/home/solutions.css',
    'resources/css/solutions/why-led.css',
    'resources/css/solutions/technical-features.css',
    'resources/css/solutions/usage-benefits.css',
    'resources/css/solutions/featured-projects.css',
    'resources/css/solutions/faq.css',
    'resources/css/solutions/cta.css',
    'resources/css/solutions/partner.css',
    'resources/css/projects/index.css',
    'resources/css/Service/why-us.css',
    'resources/css/why-led/index.css',
    'resources/css/insight/index.css',
    'resources/js/app.js',
])