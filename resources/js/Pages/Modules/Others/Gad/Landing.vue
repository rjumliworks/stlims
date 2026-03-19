<script>
import { Link, Head } from '@inertiajs/vue3';

import { Autoplay, Navigation, Pagination } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/autoplay";
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Import Images
import Img1 from "@assets/images/demos/default.png";
import Img2 from "@assets/images/demos/saas.png";
import Img3 from "@assets/images/demos/material.png";
import Img4 from "@assets/images/demos/minimal.png";
import Img5 from "@assets/images/demos/creative.png";
import Img6 from "@assets/images/demos/modern.png";
import Img7 from "@assets/images/demos/interactive.png";

export default {
    data() {
        return {
            Img1, Img2, Img3, Img4, Img5, Img6, Img7,
            Autoplay, Navigation, Pagination,
        };
    },
    components: {
        Swiper,
        SwiperSlide,
        Link,
    Head
    },
    methods: {

        topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        },

        monthly() {
            const highlightedItems = document.querySelectorAll(".month");

            highlightedItems.forEach(function (userItem) {
                userItem.style.display = "block";
            });
            const highlightedItems2 = document.querySelectorAll(".annual");

            highlightedItems2.forEach(function (userItem) {
                userItem.style.display = "none";
            });
        },
        anually() {
            const highlightedItems = document.querySelectorAll(".month");

            highlightedItems.forEach(function (userItem) {
                userItem.style.display = "none";
            });
            const highlightedItems2 = document.querySelectorAll(".annual");

            highlightedItems2.forEach(function (userItem) {
                userItem.style.display = "block";
            });
        },
        scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
    },
    unmounted() {
        window.removeEventListener('scroll', this.setActiveSection);
    },
    mounted() {
        window.addEventListener('scroll', this.setActiveSection);
        let backtoTop = document.getElementById("back-to-top");

        if (backtoTop) {
            backtoTop = document.getElementById("back-to-top");
            window.onscroll = function () {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    backtoTop.style.display = "block";
                } else {
                    backtoTop.style.display = "none";
                }
            };
        }

        this.monthly();
        document.getElementById("plan-switch").addEventListener('change', () => {
            if (document.getElementById("plan-switch").checked == true) {
                this.anually();
            } else if (document.getElementById("plan-switch").checked == false) {
                this.monthly();
            }
        });
        window.addEventListener('scroll', function (ev) {
            ev.preventDefault();
            var navbar = document.getElementById("navbar");
            if (navbar) {
                if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
                    navbar.classList.add("is-sticky");
                } else {
                    navbar.classList.remove("is-sticky");
                }
            }
        });

        document.querySelector('.currentyear').innerHTML = new Date().getFullYear() + " © Velzon - Themesbrand";
    },
};
</script>

<template>
   
      
</template>
