<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micaella Modelo</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- HEADER -->
    <header class="d-flex align-items-center p-4 gap-3">
        <div class="header-logo">M</div>
        <button class="resume-btn btn btn-primary">Download PDF Resume</button>
    </header>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="row g-0 h-100">  <!-- g-0 removes all spacing, h-100 makes row full height -->

            <!-- LEFT 50% -->
            <div class="col-lg-6 left-content d-flex align-items-center">
                <div class="px-5">
                    <h1 class="hero-title">
                        I'm Mica 👋 <br>
                        CS Student
                    </h1>

                    <p class="hero-desc mt-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                    </p>
                </div>
            </div>

            <!-- RIGHT 50% - Full bleed image -->
            <div class="col-lg-6 right-image-container">
                <img src="{{ asset('images/me.jpg') }}" class="hero-img" alt="Profile Photo">
            </div>

        </div>
    </section>

</body>
</html>