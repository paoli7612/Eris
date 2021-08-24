<div class="collapse" id="{{ $id }}">
    <form method="GET" class="my-3">
        <div class="input-group col-6 mx-auto">
            <input placeholder="{{ __('search..') }}" name="search" type="search" class="form-control"
                value="{{ request('search') ?? '' }}" />
            <button type="button" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
</div>