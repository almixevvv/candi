<div class="destinations listing-categories">
    <div class="wrap">
        <div class="wrap_float">
            <div class="section_content">
                @foreach($categories as $category)
                    <div class="box_image">
                        <a href="/home" class="logo">
                            <img src="{{ $category->image->image_url }}" alt="{{ $category->name }}">
                        </a>
                        <label>{{ $category->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
