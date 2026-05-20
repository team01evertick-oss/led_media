// LED Media Admin JS

// Sidebar toggle
document.addEventListener('DOMContentLoaded', () => {
    // Submenu toggle
    document.querySelectorAll('[data-submenu]').forEach(btn => {
        btn.addEventListener('click', function () {
            const target = document.getElementById(this.dataset.submenu);
            const isOpen = target.classList.contains('open');
            document.querySelectorAll('.sidebar-submenu').forEach(m => m.classList.remove('open'));
            document.querySelectorAll('[data-submenu]').forEach(b => b.classList.remove('open'));
            if (!isOpen) {
                target.classList.add('open');
                this.classList.add('open');
            }
        });
    });

    // Mobile sidebar
    const menuBtn = document.getElementById('sidebar-toggle');
    const sidebar = document.querySelector('.admin-sidebar');
    if (menuBtn && sidebar) {
        menuBtn.addEventListener('click', () => sidebar.classList.toggle('open'));
    }

    // Auto-dismiss alerts
    setTimeout(() => {
        document.querySelectorAll('.alert-auto-dismiss').forEach(el => {
            el.style.opacity = '0';
            el.style.transition = 'opacity 0.5s';
            setTimeout(() => el.remove(), 500);
        });
    }, 4000);

    // SEO preview updater
    const titleInput = document.getElementById('seo_title');
    const descInput = document.getElementById('seo_description');
    const previewTitle = document.getElementById('seo-preview-title');
    const previewDesc = document.getElementById('seo-preview-desc');

    if (titleInput && previewTitle) {
        titleInput.addEventListener('input', () => {
            previewTitle.textContent = titleInput.value || 'Page Title';
        });
    }
    if (descInput && previewDesc) {
        descInput.addEventListener('input', () => {
            previewDesc.textContent = descInput.value || 'Page description will appear here.';
        });
    }

    // Character counters
    document.querySelectorAll('[data-maxlength]').forEach(el => {
        const max = parseInt(el.dataset.maxlength);
        const countEl = document.getElementById(el.id + '_count');
        if (countEl) {
            el.addEventListener('input', () => {
                const len = el.value.length;
                countEl.textContent = len;
                countEl.style.color = len > max ? '#dc2626' : '#64748b';
            });
        }
    });

    // Confirm delete
    document.querySelectorAll('[data-confirm]').forEach(el => {
        el.addEventListener('click', function (e) {
            if (!confirm(this.dataset.confirm || 'Are you sure?')) e.preventDefault();
        });
    });

    // Media upload zone
    const uploadZone = document.getElementById('upload-zone');
    const fileInput = document.getElementById('file-input');
    if (uploadZone && fileInput) {
        uploadZone.addEventListener('click', () => fileInput.click());
        uploadZone.addEventListener('dragover', e => { e.preventDefault(); uploadZone.classList.add('dragover'); });
        uploadZone.addEventListener('dragleave', () => uploadZone.classList.remove('dragover'));
        uploadZone.addEventListener('drop', e => {
            e.preventDefault();
            uploadZone.classList.remove('dragover');
            fileInput.files = e.dataTransfer.files;
            fileInput.dispatchEvent(new Event('change'));
        });
    }
});