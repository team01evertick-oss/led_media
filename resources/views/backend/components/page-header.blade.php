<div class="page-header">
    <div>
        <h1 class="page-title">{{ $title }}</h1>
        @if(isset($subtitle))
        <p class="page-subtitle">{{ $subtitle }}</p>
        @endif
    </div>
    @if(isset($actions))
    <div style="display:flex;gap:10px;">{{ $actions }}</div>
    @endif
</div>