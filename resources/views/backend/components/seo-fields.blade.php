{{-- Reusable SEO Fields - Include in any edit form --}}
<div class="admin-card" style="margin-top:24px;">
    <div class="admin-card-header">
        <span class="admin-card-title">🔍 SEO Settings</span>
    </div>
    <div class="admin-card-body">

        {{-- SEO Preview --}}
        <div class="seo-preview" style="margin-bottom:20px;">
            <div class="seo-preview-url">ledmedia.com.kh › {{ request()->segment(3) ?? 'page' }}</div>
            <div class="seo-preview-title" id="seo-preview-title">{{ old('seo_title', $seo->meta_title ?? $model->title ?? '') ?: 'Page Title' }}</div>
            <div class="seo-preview-desc" id="seo-preview-desc">{{ old('seo_description', $seo->meta_description ?? '') ?: 'Page description will appear here.' }}</div>
        </div>

        <div class="form-grid-2">
            <div class="form-group">
                <label class="form-label">Meta Title</label>
                <input type="text" name="seo_title" id="seo_title" class="form-input"
                    data-maxlength="60"
                    value="{{ old('seo_title', $seo->meta_title ?? $model->title ?? '') }}"
                    placeholder="60 characters recommended">
                <div class="form-hint"><span id="seo_title_count">0</span>/60 characters</div>
            </div>
            <div class="form-group">
                <label class="form-label">Meta Keywords</label>
                <input type="text" name="seo_keywords" class="form-input"
                    value="{{ old('seo_keywords', $seo->meta_keywords ?? '') }}"
                    placeholder="keyword1, keyword2, keyword3">
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Meta Description</label>
            <textarea name="seo_description" id="seo_description" class="form-textarea" rows="3"
                data-maxlength="160"
                placeholder="160 characters recommended">{{ old('seo_description', $seo->meta_description ?? '') }}</textarea>
            <div class="form-hint"><span id="seo_description_count">0</span>/160 characters</div>
        </div>

        <div class="form-grid-2">
            <div class="form-group">
                <label class="form-label">OG Title</label>
                <input type="text" name="og_title" class="form-input"
                    value="{{ old('og_title', $seo->og_title ?? '') }}"
                    placeholder="Social share title">
            </div>
            <div class="form-group">
                <label class="form-label">Robots</label>
                <select name="seo_robots" class="form-select">
                    @foreach(['index,follow','noindex,nofollow','index,nofollow','noindex,follow'] as $opt)
                    <option value="{{ $opt }}" {{ old('seo_robots', $seo->robots ?? 'index,follow') === $opt ? 'selected' : '' }}>{{ $opt }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">OG Description</label>
            <textarea name="og_description" class="form-textarea" rows="2"
                placeholder="Social share description">{{ old('og_description', $seo->og_description ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Canonical URL</label>
            <input type="url" name="canonical_url" class="form-input"
                value="{{ old('canonical_url', $seo->canonical_url ?? '') }}"
                placeholder="https://ledmedia.com.kh/page">
        </div>
    </div>
</div>