@extends('layouts.front.index', ['title' => $listingDetail->metadata->title])

@once
@push('metadata')
    @include('front.meta', ["metadata" => $listingDetail->metadata])
@endpush
@endonce

@push('extra-css')
<style>
    .text-lg {
        font-size: 3rem;
    }

    .text-md {
        font-size: 1.75rem;
    }

    h2 {
        font-size: 2rem;
    }
</style>
@endpush

@section('content')

<link rel="stylesheet" href="./css/directory/detail.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
<script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>

<div class="container-fluid px-0">
  <div class="breadcrumbs">
    <div class="wrap">
      <div class="wrap_float">
        <a href="#">Home</a>
        <span class="separator">/</span>
        <a href="#">Travel List Right Sidebar</a>
      </div>
    </div>
  </div>
  <div class="mt-3">
    <img class="img-fluid" src="{{ $listingDetail->image->image_url }}" alt="Food Feature Image" style="max-height: 500px; height: auto; width: 100%; object-fit: cover;">
</div>
  <div class="page px-4 full-width">

    <div class="container-fluid px-0">

      <div class="directory-header bg-white border-bottom pb-4">
        <div class="row g-0">
            <div class="col-12">
                
            </div>
        </div>

        <div class="row mt-4">

          <div class="col-12">
            <div>
              <span>
                <h1 class="fw-bold text-lg">
                  {{ $listingDetail->title }}
                </h1>
              </span>
            </div>
          </div>

        </div>

        <div class="row d-md-block mt-2">
            <div class="col-12">
                <div class="d-flex">
                <span class="me-2 pe-3">
                    @foreach ($listingDetail->tags as $tag)
                        {{ $tag->name }}
                    @endforeach
                </span>
                </div>
            </div>
            <div class="col-6 col-md-3 mt-4">
                <span class="border-end me-2 pe-3">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>
                        {{ $listingDetail->address }}
                    </span>
                </span>
            </div>
            <div class="col-6 col-md-3 mt-4">
                <span class="border-end me-2 pe-3">
                    Rp.&nbsp;
                    <span>
                        {{ number_format($listingDetail->low_price) }} - {{ number_format($listingDetail->high_price) }}
                    </span>
                </span>
            </div>
            <div class="col-6 col-md-3 mt-4">
                @if ($listingDetail->phone_number)
                    <span class="border-end me-2 pe-3">
                        <i class="fas fa-phone-alt"></i>
                        <span>
                        {{ $listingDetail->phone_number }}
                        </span>
                    </span>
                @endif
            </div>
            <div class="col-6 col-md-3 mt-4" style="word-wrap: break-word;">
                @if ($listingDetail->website)
                    <i class="fas fa-desktop"></i>
                    <a href="{{ $listingDetail->website }}">{{ Str::of($listingDetail->website)->limit(40) }}</a>
                @endif
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="px-4">
          {!! $listingDetail->details !!}
      </div>

      <div class="directory-cards mt-3 pb-4 pt-3 d-md-block">
        @if ($listingDetail->ratings->count())
            <div class="bg-white pt-3 me-4" style="min-width: 300px;">
            <div class="row">
                <div class="col-12">
                <div class="px-4">
                    <h2 class="fw-bold text-md">Ratings</h2>
                </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                <div class="px-4">
                    <div class="border-top mt-2 pt-2 rating-section">
                    @foreach($listingDetail->ratings as $rating)
                        <div class="row my-2">
                            <div class="col-5 col-md-2">
                                @for ($i = 0; $i < $rating->rating; $i++)
                                    <i class="fas fa-star fa-xs text-warning"></i>
                                @endfor
                            </div>
                            <div class="col-6">
                                <span>{{ $rating->category->name }}</span>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                </div>
            </div>
            </div>
        @endif

        <div class="bg-white pt-3 me-4" style="min-width: 300px;">
          <div class="row">
            <div class="col-12">
              <div class="px-4">
                <h2 class="fw-bold">Location and Contact</h2>
              </div>

              <div class="px-4 pt-2">
                <div>
                  <span>
                    <iframe class="w-100" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCQGNMGUsmXbzXFMqbYIE53AtYsCk7c5Bc&q={{ $listingDetail->lat . ',' . $listingDetail->long }}&center={{ $listingDetail->lat . ',' . $listingDetail->long }}">
                    </iframe>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        
      @if ($listingDetail->faqs->count())
        <div class="bg-white pt-3 me-4" style="min-width: 300px;">
          <div class="row">
            <div class="col-12">
              <div class="px-4">
                <h2 class="fw-bold">FAQ</h2>
              </div>

              <div class="px-4 pt-2">
                <div class="row">
                    @foreach ($listingDetail->faqs as $faq)
                        <div class="col-12 mb-2">
                            <strong>Q: {{ $faq->question }} </strong><br>
                            A: {{ $faq->answer }}
                        </div>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif

      <div class="directory-location mt-3 bg-white border-bottom pb-4 pt-3">
        @if ($listingDetail->image_360_url)
            <div class="row">
                <div class="col-12">
                    <div class="px-4">
                        <h2 class="fw-bold">360 View</h2>
                    </div>
                    <div class="px-4 pt-2">
                        <button class="btn btn-primary" id="show360Image">Show 360 Image</button>
                    </div>
                </div>
                <div class="col-12 px-4 pt-2" style="padding-left: 2.25rem !important">
                    <iframe class="ku-embed"
                        width="100%"
                        height="500px"
                        frameborder="0"
                        allowfullscreen
                        allow="xr-spatial-tracking; gyroscope; accelerometer"
                        scrolling="no"
                        src="{{ $listingDetail->image_360_url }}"
                    ></iframe>
                </div>
            </div>
        @endif
      </div>
    </div>
  </div>
</div>


@endsection

@push('extra-js')
<script>
    document.querySelector('#show360Image').addEventListener('click', load360Image)
  function load360Image(event) {
    event.target.style.display = 'none'
    // Selector '#vrview' finds element with id 'vrview'.
    var vrView = new VRView.Player('#vwview', {
      image: '{{ $listingDetail->image_360_url }}',
    //   stereo: true,
      width: '100%',
      height: '450px'
    });
  }
</script>
@endpush
