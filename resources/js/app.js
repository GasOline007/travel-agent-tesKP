import "./bootstrap";

import Alpine from 'alpinejs' 
window.Alpine = Alpine
Alpine.start()

import AOS from "aos";
import "aos/dist/aos.css"; // You can also use <link> for styles
// Memastikan HTML dan DOM selesai diload sebelum AOS menghitung posisi elemen
document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100, // Opsional: Animasi mulai saat elemen masuk 100px dari bawah layar
    });
});

/* logika navbar */
/* kode harus dibungkus dalam listener DOMContentLoaded. Karena Vite memuat script sebagai module, terkadang script jalan sebelum elemen HTML selesai dibuat*/
document.addEventListener("DOMContentLoaded", function() {
    // Logika Scroll Navbar (dari atas)
    const navbar = document.getElementById('navbar');
    window.onscroll = () => {
        if (window.scrollY > 50) {
            navbar.classList.replace('bg-black/20', 'bg-black/50');
        } else {
            navbar.classList.replace('bg-black/50', 'bg-black/20');
        }
    };

    //logika sidebar (mobile)
    const sidebarMenu = document.getElementById('sidebarMenu');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const openSidebarBtn = document.getElementById('openSidebarBtn');
    const closeSidebarBtn = document.getElementById('closeSidebarBtn');

    if (openSidebarBtn) { // Cek apakah elemen ada di halaman ini
        function toggleSidebar() {
            sidebarMenu.classList.toggle('translate-x-full');
            sidebarOverlay.classList.toggle('opacity-0');
            sidebarOverlay.classList.toggle('pointer-events-none');
        }

        openSidebarBtn.addEventListener('click', toggleSidebar);
        closeSidebarBtn.addEventListener('click', toggleSidebar);
        sidebarOverlay.addEventListener('click', toggleSidebar);
    }
});
