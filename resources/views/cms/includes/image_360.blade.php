@php $unique = uniqid(); @endphp

@once
    @push('extra-css')
        <style>
            #img-{{ $unique }} iframe {
                width: 600px;
                height: 400px;
            }
        </style>
    @endpush
@endonce

<div id='img-{{ $unique }}'></div>

@once
    @push('extra-js')
        <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
    @endpush
@endonce

@push('extra-js')
<script>
    window.addEventListener('load', function () {
        // Selector '#vrview' finds element with id 'vrview'.
        var vrView = new VRView.Player('#img-{{ $unique }}', {
            image: "{{ $imageUrl }}",
            is_stereo: false
        })
    })
</script>
@endpush
