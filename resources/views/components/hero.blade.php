<section class="relative bg-gray-800 text-white">
    <div x-data="{ activeSlide: 1, slides: [1, 2, 3] }" class="relative overflow-hidden">
        <!-- Slides -->
        <template x-for="slide in slides" :key="slide">
            <div
                x-show="activeSlide === slide"
                class="absolute inset-0 transition-all duration-500 transform"
                :class="{'translate-x-0': activeSlide === slide, '-translate-x-full': activeSlide < slide, 'translate-x-full': activeSlide > slide}"
            >
                <!-- Replace with your own image links -->
                <img :src="'/images/slide-' + slide + '.jpg'" alt="Slider Image" class="w-full h-[80vh] object-cover">
            </div>
        </template>

        <!-- Hero content -->
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to NEXBYTES</h1>
            <p class="text-lg md:text-2xl mb-6">Your digital partner for innovative web solutions</p>
            <a href="/contact" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-6 rounded-lg">Get Started</a>
        </div>

        <!-- Controls -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-4">
            <button @click="activeSlide = slide" :class="{'bg-white': activeSlide === slide, 'bg-gray-500': activeSlide !== slide}" class="w-3 h-3 rounded-full" x-for="slide in slides"></button>
        </div>

        <!-- Previous/Next buttons -->
        <button @click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 p-3 text-white">
            &#9664;
        </button>
        <button @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 p-3 text-white">
            &#9654;
        </button>
    </div>
</section>
