<div class="gridy-3" style="background-color: #fff;box-shadow: inset 0 0 0 0px #fff;">
    <div class="row">
        <div class="col-12 col-md-5">
            Sort by:
            <select class="form-control" style="width: 75%" wire:model="choosenSortable">
                <option value="">-- Select --</option>
                @foreach ($sortable as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-5" style="margin-top: 1em;">
            Search:
            <input type="text" class="form-control" wire:model="searchQuery">
        </div>
        <div class="col-12 col-md-2" style="margin-top: 1em;">
            <br>
            <button class="btn btn-primary btn-block" wire:click="searchPromotion">Search</button>
        </div>
    </div>
    <div class="row">
        @foreach ($promotions as $promotion)
            <div class="gridy-3" style="margin-top: 30px; box-shadow: inset 0 0 0 0px #fff;" >
                <div class="gridy-1" style="padding: 0px;text-align: center;">
                    @if ($promotion->cashback or $promotion->discount_percentage)
                        <div style="position: absolute;top: 62%;background-color: #30ddd4;width:auto;right: 30px;font-size: 24px;border-radius: 50%;padding:15px;color: #fff;font-weight: bolder;">
                            {{ $promotion->cashback ?? $promotion->discount_percentage }}%
                        </div>
                    @endif
                    <img src="{{ $promotion->image->image_url }}" style="width: 100%; height: 200px;">
                    <br><br>

                    @if ($promotion->discount_value)
                        <label style="font-weight: bolder;font-size: 32px;">{{ $promotion->discount_value }}</label>
                    @endif
                </div>

                <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff;">
                    <h2 class="text-lg">{{ $promotion->title }}</h2>
                    <hr>
                </div>
                <div class="gridy-2" style="box-shadow: inset 0 0 0 0px #fff; padding-top: 0px;" >
                    <label>{!! $promotion->details !!}</label>
                </div>
            </div>
        @endforeach
    </div>
</div>
