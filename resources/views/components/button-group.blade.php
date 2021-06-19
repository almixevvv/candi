<div>
    <a href="{{ $editUrl }}" class="btn btn-info btn-hover-light" data-toggle="tooltip" title="Edit">Edit</a>
    <form method="POST" action="{{ $deleteUrl }}" style="display: inline">
        @csrf
        @method("DELETE")
        <button class="btn btn-danger btn-hover-light" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure want to delete?')">
            Delete
        </button>
    </form>
</div>
