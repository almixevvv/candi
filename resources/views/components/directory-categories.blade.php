<div class="destinations" style="padding:0">
    <center>
        <div class="wrap" style="max-width: unset; width: 85%;">
            <div class="wrap_float">
                <div class="section_content">
                    <center>
                    @foreach($categories as $category)
                        <div class="box_image">
                            <a href="{{ route('directory') }}?category_name={{ $category->name }}" class="logo">
                                <img src="{{ $category->image->image_url }}" alt="{{ $category->name }}">
                            </a>
                            <label style="margin-top: 10px;">{{ $category->name }}</label>
                        </div>
                    @endforeach
                    </center>
                </div>
            </div>
        </div>
    </center>
</div>
