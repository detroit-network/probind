<div class="box-body">
    <div class="callout callout-info">
        <h4>{{ __('general.info') }}</h4>

        <p>{!! $info_message !!}</p>
    </div>
</div>
<div class="box-footer">
    <a href="{{ route('home') }}" class="btn btn-primary" role="button">
            <i class="fa fa-arrow-left"></i> {{ __('general.back') }}
    </a>
</div>
