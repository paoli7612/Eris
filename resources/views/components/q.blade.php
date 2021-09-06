<div class="col-{{ $col ?? '12 col-sm-6 mx-auto' }}">
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">
            {{ $ask }}
        </div>
        <div class="card-footer small">
            <form action="{{ $action }}" method="POST">
                @csrf
                @method($method ?? 'GET')
                <input type="submit" class="btn btn-danger" value="{{ $title }}">
                <x-dd-button id="collapseLogout" title="{{ __('Back') }}" />
            </form>
        </div>
    </div>
</div>