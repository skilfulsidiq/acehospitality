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
