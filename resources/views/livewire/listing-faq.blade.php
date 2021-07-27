<div>
    <hr />
    <form wire:submit.prevent="save">
        @foreach ($faqs as $key => $faq)
            <h2>Faq {{ $key+1 }} &nbsp;
                @if (count($faqs) != 1)
                    <i class="fas fa-trash fa-lg text-danger" 
                        style="cursor:pointer"
                        wire:click="delete({{ $key }})"></i>
                @endif</h2>
            <div class="form-group">
                <label>
                    Question &nbsp;
                </label>
                <input type="text" name="question[]" class="form-control"  wire:model="faqs.{{ $key }}.question">
            </div>
            <div class="form-group">
                <label>Answer</label>
                <input type="text" name="answer[]" class="form-control"  wire:model="faqs.{{ $key }}.answer">
            </div>
            <div class="form-group" style="width: 80%">
                @if ($key == count($faqs) - 1)
                    <button type="button" class="btn btn-info" wire:click="addNewFaq">Add New</button>
                @endif
            </div>
            <hr />
        @endforeach
        <div class="form-group">
            <input type="submit" class="btn btn-primary" />
        </div>
        
        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session('error_message') }}
            </div>
        @endif
    </form>
</div>
