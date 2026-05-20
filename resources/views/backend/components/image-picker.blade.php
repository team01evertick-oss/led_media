{{-- Reusable Image Picker Component --}}
@php $mediaId = $mediaId ?? null; $mediaUrl = $mediaUrl ?? null; $fieldName = $fieldName ?? 'featured_image_id'; @endphp
<div class="form-group">
    <label class="form-label">{{ $label ?? 'Featured Image' }}</label>
    <input type="hidden" name="{{ $fieldName }}" id="{{ $fieldName }}" value="{{ old($fieldName, $mediaId) }}">

    <div id="{{ $fieldName }}_preview" style="margin-bottom:10px;{{ !$mediaUrl ? 'display:none;' : '' }}">
        <div style="position:relative;display:inline-block;">
            <img id="{{ $fieldName }}_img" src="{{ $mediaUrl }}" style="width:200px;height:130px;object-fit:cover;border-radius:10px;border:1px solid var(--admin-border);" alt="">
            <button type="button" onclick="clearImage('{{ $fieldName }}')"
                style="position:absolute;top:-8px;right:-8px;width:24px;height:24px;background:#dc2626;color:#fff;border:none;border-radius:50%;cursor:pointer;font-size:14px;display:flex;align-items:center;justify-content:center;">×</button>
        </div>
    </div>

    <button type="button" onclick="openMediaPicker('{{ $fieldName }}')" class="btn btn-secondary">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        {{ $mediaUrl ? 'Change Image' : 'Select Image' }}
    </button>
    @if($hint ?? false)
    <div class="form-hint">{{ $hint }}</div>
    @endif
</div>