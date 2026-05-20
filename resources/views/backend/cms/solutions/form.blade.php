@extends('backend.layout.app')
@section('title', isset($solution) ? 'Edit Solution' : 'New Solution')
@section('breadcrumb')
    <a href="{{ route('admin.solutions.index') }}">Solutions</a>
    <span>›</span>
    <span>{{ isset($solution) ? 'Edit' : 'New' }}</span>
@endsection

@section('content')
<form method="POST" action="{{ isset($solution) ? route('admin.solutions.update', $solution) : route('admin.solutions.store') }}">
    @csrf
    @if(isset($solution)) @method('PUT') @endif

    <div class="page-header">
        <div>
            <h1 class="page-title">{{ isset($solution) ? 'Edit Solution' : 'New Solution' }}</h1>
        </div>
        <div style="display:flex;gap:10px;">
            <a href="{{ route('admin.solutions.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save Solution</button>
        </div>
    </div>

    <div style="display:grid;grid-template-columns:2fr 1fr;gap:24px;">

        {{-- LEFT COLUMN --}}
        <div>

            {{-- Basic Info --}}
            <div class="admin-card" style="margin-bottom:24px;">
                <div class="admin-card-header"><span class="admin-card-title">Basic Information</span></div>
                <div class="admin-card-body">

                    <div class="form-group">
                        <label class="form-label form-required">Solution Title</label>
                        <input type="text" name="title" class="form-input @error('title') error @enderror"
                            value="{{ old('title', $solution->title ?? '') }}"
                            placeholder="e.g. Outdoor LED Billboards">
                        @error('title')<div class="form-error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label class="form-label">Hero Eyebrow Text</label>
                            <input type="text" name="hero_eyebrow" class="form-input"
                                value="{{ old('hero_eyebrow', $solution->hero_eyebrow ?? '') }}"
                                placeholder="e.g. Outdoor LED Billboards">
                        </div>
                        <div class="form-group">
                            <label class="form-label">CTA Title</label>
                            <input type="text" name="cta_title" class="form-input"
                                value="{{ old('cta_title', $solution->cta_title ?? '') }}"
                                placeholder="e.g. Ready to install?">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tagline / Subtitle</label>
                        <input type="text" name="tagline" class="form-input"
                            value="{{ old('tagline', $solution->tagline ?? '') }}"
                            placeholder="Short hero description">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-textarea" rows="4"
                            placeholder="Full solution description">{{ old('description', $solution->description ?? '') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">What This Solution Is</label>
                        <textarea name="what_it_is" class="form-textarea" rows="4"
                            placeholder="Explain what this solution provides">{{ old('what_it_is', $solution->what_it_is ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            {{-- Where Used & Benefits --}}
            <div class="admin-card" style="margin-bottom:24px;">
                <div class="admin-card-header"><span class="admin-card-title">Where It Is Used & Benefits</span></div>
                <div class="admin-card-body">
                    <div class="form-grid-2">
                        <div class="form-group">
                            <label class="form-label">Where It Is Used</label>
                            <textarea name="where_used_raw" class="form-textarea" rows="8"
                                placeholder="One item per line:&#10;Shopping malls&#10;Retail stores&#10;Corporate offices">{{ old('where_used_raw', isset($solution) ? implode("\n", $solution->where_used ?? []) : '') }}</textarea>
                            <div class="form-hint">One item per line</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Benefits</label>
                            <textarea name="benefits_raw" class="form-textarea" rows="8"
                                placeholder="One benefit per line:&#10;High visibility day and night&#10;Weather-resistant performance">{{ old('benefits_raw', isset($solution) ? implode("\n", $solution->benefits ?? []) : '') }}</textarea>
                            <div class="form-hint">One benefit per line</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Technical Features --}}
            <div class="admin-card" style="margin-bottom:24px;">
                <div class="admin-card-header"><span class="admin-card-title">Technical Features</span></div>
                <div class="admin-card-body">
                    <div class="form-group">
                        <label class="form-label">Features (Title | Description)</label>
                        <textarea name="features_raw" class="form-textarea" rows="8"
                            placeholder="Feature Title | Feature description&#10;High-brightness panels | Outdoor rated LED panels&#10;Waterproof systems | IP65 rated enclosures">{{ old('features_raw', isset($solution) ? collect($solution->features ?? [])->map(fn($f) => $f['title'].'|'.($f['description']??''))->join("\n") : '') }}</textarea>
                        <div class="form-hint">Format: Title | Description — one per line</div>
                    </div>
                </div>
            </div>

            {{-- FAQs --}}
            <div class="admin-card" style="margin-bottom:24px;">
                <div class="admin-card-header">
                    <span class="admin-card-title">FAQs</span>
                    <button type="button" onclick="addFaq()" class="btn btn-secondary btn-sm">+ Add FAQ</button>
                </div>
                <div class="admin-card-body">
                    <div id="faq-list">
                        @php $faqs = old('faqs_parsed', $solution->faqs ?? []); @endphp
                        @foreach($faqs as $i => $faq)
                        <div class="faq-row" style="display:grid;grid-template-columns:1fr 1fr auto;gap:12px;margin-bottom:12px;">
                            <input type="text" class="form-input faq-q" value="{{ $faq['question'] ?? '' }}" placeholder="Question">
                            <input type="text" class="form-input faq-a" value="{{ $faq['answer'] ?? '' }}" placeholder="Answer">
                            <button type="button" onclick="this.closest('.faq-row').remove()" class="btn btn-danger btn-sm">×</button>
                        </div>
                        @endforeach
                    </div>
                    <input type="hidden" name="faqs_data" id="faqs_data">
                </div>
            </div>

            {{-- SEO --}}
            @include('backend.components.seo-fields')
        </div>

        {{-- RIGHT COLUMN --}}
        <div>

            {{-- Publish Settings --}}
            <div class="admin-card" style="margin-bottom:20px;">
                <div class="admin-card-header"><span class="admin-card-title">Publish Settings</span></div>
                <div class="admin-card-body">

                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="draft" {{ old('status', $solution->status ?? 'draft') === 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status', $solution->status ?? '') === 'published' ? 'selected' : '' }}>Published</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Display Order</label>
                        <input type="number" name="order" class="form-input"
                            value="{{ old('order', $solution->order ?? 0) }}" min="0">
                    </div>

                    <div class="toggle-wrap">
                        <label class="toggle">
                            <input type="hidden" name="is_active" value="0">
                            <input type="checkbox" name="is_active" value="1"
                                {{ old('is_active', $solution->is_active ?? true) ? 'checked' : '' }}>
                            <span class="toggle-slider"></span>
                        </label>
                        <span class="toggle-label">Show on Website</span>
                    </div>

                </div>
            </div>

            {{-- Featured Image --}}
            <div class="admin-card">
                <div class="admin-card-header"><span class="admin-card-title">Featured Image</span></div>
                <div class="admin-card-body">
                    @include('backend.components.image-picker', [
                        'fieldName' => 'featured_image_id',
                        'mediaId'   => $solution->featured_image_id ?? null,
                        'mediaUrl'  => $solution->featuredImage->url ?? null,
                        'label'     => 'Hero Image',
                        'hint'      => 'Recommended: 1440×700px'
                    ])
                </div>
            </div>

        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
function addFaq() {
    const list = document.getElementById('faq-list');
    const row = document.createElement('div');
    row.className = 'faq-row';
    row.style.cssText = 'display:grid;grid-template-columns:1fr 1fr auto;gap:12px;margin-bottom:12px;';
    row.innerHTML = `
        <input type="text" class="form-input faq-q" placeholder="Question">
        <input type="text" class="form-input faq-a" placeholder="Answer">
        <button type="button" onclick="this.closest('.faq-row').remove()" class="btn btn-danger btn-sm">×</button>
    `;
    list.appendChild(row);
}

// Serialize FAQs before submit
document.querySelector('form').addEventListener('submit', function() {
    const rows = document.querySelectorAll('.faq-row');
    const faqs = Array.from(rows).map(row => ({
        question: row.querySelector('.faq-q').value,
        answer: row.querySelector('.faq-a').value
    })).filter(f => f.question.trim());
    document.getElementById('faqs_data').value = JSON.stringify(faqs);
});

// Media picker placeholder
function openMediaPicker(field) {
    alert('Media picker: connect to admin.media.index with picker mode.');
}
function clearImage(field) {
    document.getElementById(field).value = '';
    document.getElementById(field + '_preview').style.display = 'none';
}
</script>
@endpush