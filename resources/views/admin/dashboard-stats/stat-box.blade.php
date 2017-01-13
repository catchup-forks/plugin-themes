<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="small-box bg-blue">
        <div class="inner">
            <h3>{{ $count or 0 }} <small class="font-white">themes</small></h3>
            <p>Activated: <b>{{ array_get($activatedTheme, 'alias') }}</b></p>
        </div>
        <div class="icon">
            <i class="icon-magic-wand"></i>
        </div>
        <a href="{{ route('admin::plugins.index.get') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
