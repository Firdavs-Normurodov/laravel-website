<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $slot }}</h2>
            <ol>
                <li><a href={{ route('home') }}>Home</a></li>
                <li>{{ $slot }}</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
