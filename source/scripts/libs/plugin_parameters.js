//Swiper Slider
import Swiper from "swiper/bundle";

export default function plugindParameters() {
	// Selector styling
	$("select.selectori").each(function () {
		var placeholder = $(this).data("placeholder") || "Default placeholder";
		$(this).select2({
			allowClear: true,
			minimumResultsForSearch: -1,
			placeholder: placeholder,
		});
	});
	// Slider
	let about_us_slider = new Swiper(".about_slider", {
		slidesPerView: 1,
		autoplay: {
			dalay: 3000,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
	let reviews_slider = new Swiper(".reviews_slider", {
		autoplay: {
			dalay: 3000,
		},
		slidesPerView: 1,
		pagination: {
			el: ".swiper-pagination",
		},
	});
	// Gallery
	$(".magnific").each(function () {
		$(this).magnificPopup({
			delegate: "a",
			type: "image",
			gallery: {
				enabled: true,
			},
			zoom: {
				enabled: true,
				duration: 300,
			},
		});
	});
	if ($(".magnific_video").length) {
		$(".magnific_video").magnificPopup({
			disableOn: 700,
			type: "iframe",
			mainClass: "mfp-fade",
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false,
		});
	}
}
