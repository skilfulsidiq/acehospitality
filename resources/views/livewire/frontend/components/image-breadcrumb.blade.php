{{-- <section id="pageTitle" class="image-wrapper bg-image bg-cover bg-overlay bg-overlay-700 text-body text-center pt-28 pb-20" data-image-src="{{ asset('assets/img/background/bg7.jpg') }}" data-bs-theme="dark" style="background-image: url({{ asset('assets/img/background/bg1.jpg') }});">
            <div class="bg-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-7 col-lg-9 col-md-11">
                            <h1 class="text-uppercase ff-heading">Ace Hospitality</h1>
                            <p class="fs-4 fw-normal"> Est dictas legendos scribentur an. Vis ei tation iisque suscipit, vim id tota dolores hendrerit. Eu molestie reprehendunt mea molestiae cum </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

<section class="page-title-area" data-background="{{ asset('assets/img/background/bg7.jpg') }}" style="background-image: url({{ asset('assets/img/background/bg7.jpg') }});">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="page-title-wrapper">
              <h1 class="page-title mb-10">{{ $title }}</h1>
            </div>
            <div class="breadcrumb-menu">
              <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items">
                  <li class="trail-item trail-begin"><span><a href="{{ route('home') }}">home</a></span></li>
                  <li class="trail-item trail-end"><span>{{ strtolower($title) }}</span></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
