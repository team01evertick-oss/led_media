@extends('backend.layout.app')
@section('title', 'Settings')
@section('breadcrumb')<span>Settings</span>@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Settings</h1>
        <p class="page-subtitle">Manage site-wide configuration</p>
    </div>
</div>

<div class="admin-tabs">
    <a href="?tab=general" class="admin-tab {{ request('tab','general') === 'general' ? 'active' : '' }}">General</a>
    <a href="?tab=contact" class="admin-tab {{ request('tab') === 'contact' ? 'active' : '' }}">Contact</a>
    <a href="?tab=seo" class="admin-tab {{ request('tab') === 'seo' ? 'active' : '' }}">SEO</a>
    <a href="?tab=social" class="admin-tab {{ request('tab') === 'social' ? 'active' : '' }}">Social</a>
    <a href="?tab=company" class="admin-tab {{ request('tab') === 'company' ? 'active' : '' }}">Company</a>
</div>

@php $tab = request('tab', 'general'); @endphp

<form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="group" value="{{ $tab }}">

    @if($tab === 'general')
    <div class="admin-card">
        <div class="admin-card-header"><span class="admin-card-title">General Settings</span></div>
        <div class="admin-card-body">
            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Site Name</label>
                    <input type="text" name="site_name" class="form-input"
                        value="{{ \App\Models\Setting::get('site_name', 'LED Media') }}"
                        placeholder="LED Media">
                </div>
                <div class="form-group">
                    <label class="form-label">Site Tagline</label>
                    <input type="text" name="site_tagline" class="form-input"
                        value="{{ \App\Models\Setting::get('site_tagline', '') }}"
                        placeholder="Premium LED Display Solutions">
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Logo</label>
                <input type="file" name="logo_file" class="form-input" accept="image/*">
                @if(\App\Models\Setting::get('logo'))
                <div style="margin-top:8px;"><img src="{{ asset('storage/'.\App\Models\Setting::get('logo')) }}" style="height:50px;"></div>
                @endif
            </div>
            <div class="form-group">
                <label class="form-label">Favicon</label>
                <input type="file" name="favicon_file" class="form-input" accept="image/*">
            </div>
            <div class="form-group">
                <label class="form-label">Company Profile PDF URL</label>
                <input type="text" name="company_profile_url" class="form-input"
                    value="{{ \App\Models\Setting::get('company_profile_url', '') }}">
            </div>
        </div>
    </div>

    @elseif($tab === 'contact')
    <div class="admin-card">
        <div class="admin-card-header"><span class="admin-card-title">Contact Information</span></div>
        <div class="admin-card-body">
            <div class="form-group">
                <label class="form-label">Head Office Address</label>
                <textarea name="office_address" class="form-textarea" rows="2"
                    placeholder="#159A, Street No. 2011...">{{ \App\Models\Setting::get('office_address', '') }}</textarea>
            </div>
            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Phone 1</label>
                    <input type="text" name="phone_1" class="form-input"
                        value="{{ \App\Models\Setting::get('phone_1', '089 911 988') }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Phone 2</label>
                    <input type="text" name="phone_2" class="form-input"
                        value="{{ \App\Models\Setting::get('phone_2', '081 688 880') }}">
                </div>
            </div>
            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="contact_email" class="form-input"
                        value="{{ \App\Models\Setting::get('contact_email', 'Khemarin.ctn@gmail.com') }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Website</label>
                    <input type="text" name="website_url" class="form-input"
                        value="{{ \App\Models\Setting::get('website_url', 'www.ledmedia.com.kh') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Business Hours</label>
                <input type="text" name="business_hours" class="form-input"
                    value="{{ \App\Models\Setting::get('business_hours', 'Monday – Saturday, 8:00 AM – 5:30 PM') }}">
            </div>
        </div>
    </div>

    @elseif($tab === 'seo')
    <div class="admin-card">
        <div class="admin-card-header"><span class="admin-card-title">Default SEO Settings</span></div>
        <div class="admin-card-body">
            <div class="form-group">
                <label class="form-label">Default Meta Title</label>
                <input type="text" name="seo_default_title" class="form-input"
                    value="{{ \App\Models\Setting::get('seo_default_title', 'LED Media Cambodia') }}">
            </div>
            <div class="form-group">
                <label class="form-label">Default Meta Description</label>
                <textarea name="seo_default_description" class="form-textarea" rows="3">{{ \App\Models\Setting::get('seo_default_description', '') }}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Default Keywords</label>
                <input type="text" name="seo_default_keywords" class="form-input"
                    value="{{ \App\Models\Setting::get('seo_default_keywords', 'LED display Cambodia, LED billboard, LED Media') }}">
            </div>
            <div class="form-group">
                <label class="form-label">Google Analytics ID</label>
                <input type="text" name="google_analytics_id" class="form-input"
                    value="{{ \App\Models\Setting::get('google_analytics_id', '') }}"
                    placeholder="G-XXXXXXXXXX">
            </div>
        </div>
    </div>

    @elseif($tab === 'social')
    <div class="admin-card">
        <div class="admin-card-header"><span class="admin-card-title">Social Media Links</span></div>
        <div class="admin-card-body">
            @foreach([
                ['key'=>'social_facebook',  'label'=>'Facebook URL'],
                ['key'=>'social_telegram',  'label'=>'Telegram URL'],
                ['key'=>'social_whatsapp',  'label'=>'WhatsApp Number'],
                ['key'=>'social_instagram', 'label'=>'Instagram URL'],
                ['key'=>'social_youtube',   'label'=>'YouTube URL'],
                ['key'=>'social_linkedin',  'label'=>'LinkedIn URL'],
            ] as $social)
            <div class="form-group">
                <label class="form-label">{{ $social['label'] }}</label>
                <input type="text" name="{{ $social['key'] }}" class="form-input"
                    value="{{ \App\Models\Setting::get($social['key'], '') }}">
            </div>
            @endforeach
        </div>
    </div>

    @elseif($tab === 'company')
    <div class="admin-card">
        <div class="admin-card-header"><span class="admin-card-title">Company Information</span></div>
        <div class="admin-card-body">
            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Founded Year</label>
                    <input type="text" name="company_founded" class="form-input"
                        value="{{ \App\Models\Setting::get('company_founded', '2015') }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Team Size</label>
                    <input type="text" name="company_team_size" class="form-input"
                        value="{{ \App\Models\Setting::get('company_team_size', '30+') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Company Description (Footer)</label>
                <textarea name="company_description" class="form-textarea" rows="4">{{ \App\Models\Setting::get('company_description', '') }}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">About Us (Homepage)</label>
                <textarea name="about_us" class="form-textarea" rows="5">{{ \App\Models\Setting::get('about_us', '') }}</textarea>
            </div>
        </div>
    </div>
    @endif

    <div style="margin-top:20px;display:flex;justify-content:flex-end;">
        <button type="submit" class="btn btn-primary btn-lg">Save Settings</button>
    </div>
</form>
@endsection