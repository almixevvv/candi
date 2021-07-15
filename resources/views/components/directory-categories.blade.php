<div class="destinations" style="padding:0">
    <div class="wrap">
        <div class="wrap_float">
            <div class="section_content">
                <center>
                @foreach($categories as $category)
                    <div class="box_image">
                        <a href="{{ route('directory') }}?category_id={{ $category->id }}" class="logo">
                            <img src="{{ $category->image->image_url }}" alt="{{ $category->name }}">
                        </a>
                        <label>{{ $category->name }}</label>
                    </div>
                @endforeach
                </center>
            </div>
        </div>
    </div>
</div>
