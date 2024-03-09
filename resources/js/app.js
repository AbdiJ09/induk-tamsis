import "./bootstrap";
import scrollreveal from "scrollreveal";
import "animate.css";
import emailjs from "@emailjs/browser";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
    autoplay: {
        delay: false,
        disableOnInteraction: false,
    },
    speed: 2000,
});
const swiperr = new Swiper(".mySwiper1", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
const swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    effect: "creative",
    creativeEffect: {
        prev: {
            // will set `translateZ(-400px)` on previous slides
            translate: [0, 0, -400],
        },
        next: {
            // will set `translateX(100%)` on next slides
            translate: ["100%", 0, 0],
        },
    },
    speed: 1000,
    thumbs: {
        swiper: swiperr,
    },
});
const swiperGaleri = new Swiper(".swiperGaleri", {
    pagination: {
        el: ".swiper-pagination",
    },
    effect: "fade",
    speed: 1000,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
const sr = scrollreveal({
    origin: "top",
    distance: "100px",
});
sr.reveal(".box-tentang", { distance: 0, duration: 2500 });
sr.reveal(".album-tentang-1", { origin: "left", duration: 2500 });
sr.reveal(".album-tentang-2", { origin: "right", duration: 2500 });
sr.reveal(".tentang-text", { delay: 300, origin: "bottom", duration: 2500 });
sr.reveal(".tentang-title", { delay: 300, origin: "top", duration: 2500 });
sr.reveal(".visi-judul", { distance: "0px", duration: 2500 });
sr.reveal(".visi-text", { distance: "0px", delay: 200, duration: 2500 });
sr.reveal(".indikator-visi", { distance: "0px", delay: 300, duration: 2500 });
sr.reveal(".polygon", { origin: "left", delay: 300, duration: 2500 });
sr.reveal(".visi-1", { distance: "0px", delay: 350, duration: 2500 });
sr.reveal(".visi-2", { distance: "0px", delay: 400, duration: 2500 });
sr.reveal(".visi-3", { distance: "0px", delay: 450, duration: 2500 });
sr.reveal(".visi-4", { distance: "0px", delay: 500, duration: 2500 });
sr.reveal(".visi-5", { distance: "0px", delay: 550, duration: 2500 });
sr.reveal(".gambar-visi", { origin: "right", duration: 2500 });
sr.reveal(".box-misi", { origin: "bottom", duration: 2500 });
sr.reveal(".misi-text", { origin: "top", duration: 2500 });
sr.reveal(".misi-1", { origin: "left", delay: 500, duration: 2500 });
sr.reveal(".misi-2", { distance: 0, delay: 500, duration: 3000 });
sr.reveal(".misi-3", { origin: "right", delay: 500, duration: 2500 });
sr.reveal(".garis", { delay: 1500, origin: "top", duration: 2500 });
sr.reveal(".head-tujuan", { origin: "left", duration: 2500 });
sr.reveal(".img-tujuan", { origin: "top", delay: 300, duration: 2500 });
sr.reveal(".text-tujuan", { distance: 0, delay: 300, duration: 2500 });
sr.reveal(".text-tujuan-1", { distance: 0, delay: 400, duration: 2500 });
sr.reveal(".text-tujuan-2", { distance: 0, delay: 500, duration: 2500 });
sr.reveal(".text-tujuan-3", { distance: 0, delay: 600, duration: 2500 });
sr.reveal(".text-tujuan-4", { distance: 0, delay: 700, duration: 2500 });
sr.reveal(".text-tujuan-5", { distance: 0, delay: 800, duration: 2500 });
sr.reveal(".tujuan-image", { origin: "right", delay: 800, duration: 2500 });
sr.reveal(".output-image", { origin: "right", delay: 800, duration: 2500 });
sr.reveal(".output-text", { origin: "left", delay: 800, duration: 2500 });
sr.reveal(".output-text-1", { distance: 0, delay: 400, duration: 2500 });
sr.reveal(".output-text-2", { distance: 0, delay: 500, duration: 2500 });
sr.reveal(".output-text-3", { distance: 0, delay: 600, duration: 2500 });
sr.reveal(".output-text-4", { distance: 0, delay: 700, duration: 2500 });
sr.reveal(".output-text-5", { distance: 0, delay: 800, duration: 2500 });
sr.reveal(".struktur-organisasi", { origin: "bottom", duration: 2500 });

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach((link) => {
    link.addEventListener("click", () => {
        navLink.forEach((link) => {
            link.classList.remove("active");
        });
        link.classList.add("active");
    });
});
emailjs.init({
    publicKey: "kWgFGpjaklT2M6Unl",
});
document
    .getElementById("contactForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();
        emailjs
            .send("service_0qat0rd", "template_nnrphwd", {
                tamansiswa: "Abdi",
                name: event.target.name.value,
                email: event.target.email.value,
                message: event.target.message.value,
            })
            .then(alert("Pesan Terkirim!")),
            (error) => {
                console.log("FAILED", error);
            };
    });
