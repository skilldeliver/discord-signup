<div class="cookie-consent">
    <button class="close" id="cookie-hide">
        <i class="icon-close-popup"></i>
    </button>
    <div class="wrapper">
        <p>
            {!! trans('cookies.message', ['link' => url('/')]) !!}
        </p>
        <button class="button" id="cookie-agree">
            <span>{{ trans('cookies.dismiss') }}</span>
        </button>
    </div>
</div>
