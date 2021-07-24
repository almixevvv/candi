<div>
    <hr />
    <form wire:submit.prevent="save">
        @foreach ($ratings as $key => $rating)
            <span style="font-weight: bold; font-size: 2rem;">
                Rating {{ $key + 1 }} 
                @if (count($ratings) != 1)
                    <button type="button" class="btn btn-danger btn-sm" wire:click="delete({{ $key }})">
                        <i class="fas fa-trash fa-md"></i>
                    </button>
                @endif
            </span>
            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control" wire:model="ratings.{{ $key }}.category_id">
                    <option value="">-- Select --</option>
                    @foreach ($ratingCategories as $id => $value)
                        <option value="{{ $id }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Rating</label>
                <input type="number" name="rating" class="form-control"  wire:model="ratings.{{ $key }}.rating">
            </div>
            <div class="form-group">
                @if ($key == count($ratings) - 1)
                    <button type="button" class="btn btn-info" wire:click="addNewRating">Add New</button>
                @endif
            </div>
            <hr />
        @endforeach
        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session('error_message') }}
            </div>
        @endif
        <div class="form-group">
            <input type="submit" class="btn btn-primary" />
        </div>
    </form>
</div>
