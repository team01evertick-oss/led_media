<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login — LED Media</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
@vite(['resources/css/admin.css'])
<style>
body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0f172a 100%);
    font-family: 'Plus Jakarta Sans', sans-serif;
}
.login-wrap {
    width: 100%;
    max-width: 420px;
    padding: 20px;
}
.login-card {
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.3);
}
.login-logo {
    text-align: center;
    margin-bottom: 32px;
}
.login-logo-text {
    font-size: 22px;
    font-weight: 800;
    letter-spacing: 5px;
    color: #0f172a;
    text-transform: uppercase;
}
.login-logo-text span { color: #1a56ff; }
.login-logo-sub {
    font-size: 12px;
    color: #94a3b8;
    letter-spacing: 1.5px;
    margin-top: 4px;
}
.login-title {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 6px;
}
.login-subtitle {
    font-size: 13.5px;
    color: #64748b;
    margin-bottom: 28px;
}
</style>
</head>
<body class="admin-body">
<div class="login-wrap">
    <div class="login-card">
        <div class="login-logo">
            <div class="login-logo-text">LED <span>MEDIA</span></div>
            <div class="login-logo-sub">CONTENT MANAGEMENT SYSTEM</div>
        </div>

        <div class="login-title">Welcome back</div>
        <div class="login-subtitle">Sign in to your admin panel</div>

        @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="form-group">
                <label class="form-label form-required">Email Address</label>
                <input type="email" name="email" class="form-input @error('email') error @enderror"
                    value="{{ old('email') }}" placeholder="admin@ledmedia.com.kh" autofocus>
            </div>
            <div class="form-group">
                <label class="form-label form-required">Password</label>
                <input type="password" name="password" class="form-input @error('password') error @enderror"
                    placeholder="••••••••">
            </div>
            <div class="form-group" style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" name="remember" id="remember" style="width:16px;height:16px;">
                <label for="remember" style="font-size:13.5px;color:#64748b;cursor:pointer;">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:12px;">
                Sign In
            </button>
        </form>
    </div>
    <p style="text-align:center;margin-top:20px;font-size:12px;color:rgba(255,255,255,0.4);">
        LED Media CMS &copy; {{ date('Y') }}
    </p>
</div>
</body>
</html>