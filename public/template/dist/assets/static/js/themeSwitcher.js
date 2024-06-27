document.addEventListener('DOMContentLoaded', function() {
    const themeSelect = document.getElementById('theme-select');
    const body = document.body;

    themeSelect.addEventListener('change', function() {
        // Hapus semua kelas tema dari body
        body.classList.remove('theme-light', 'theme-dark', 'theme-forest', 'theme-snow', 'theme-ricefield');

        // Tambah kelas tema baru
        const selectedTheme = themeSelect.value;
        body.classList.add(`theme-${selectedTheme}`);

        // Simpan tema di localStorage
        localStorage.setItem('selectedTheme', selectedTheme);
    });

    // Ambil tema dari localStorage saat halaman dimuat
    const savedTheme = localStorage.getItem('selectedTheme');
    if (savedTheme) {
        themeSelect.value = savedTheme;
        body.classList.add(`theme-${savedTheme}`);
    }
});
