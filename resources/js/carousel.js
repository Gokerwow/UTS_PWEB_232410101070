const trendDiv = document.getElementById('trend-div')
const trenChevronLeft = document.getElementById('trend-chevron-left')
const trenChevronRight = document.getElementById('trend-chevron-right')

const heroCarousel = document.getElementById('hero-carousel')
const heroChevronLeft = document.getElementById('hero-chevron-left')
const heroChevronRight = document.getElementById('hero-chevron-right')

heroChevronRight.addEventListener('click', function() {
    heroCarousel.scrollBy({left : 300, behavior: "smooth"})
})

heroChevronLeft.addEventListener('click', function() {
    heroCarousel.scrollBy({left : -300, behavior: "smooth"})
})

heroCarousel.addEventListener('scroll', function() {
    if(heroCarousel.scrollLeft > 2) {
        heroChevronLeft.classList.remove('hidden')
    } else {
        heroChevronLeft.classList.add('hidden')
    }
})


trenChevronRight.addEventListener('click', function() {
    trendDiv.scrollBy({left : 300, behavior: "smooth"})
})

trenChevronLeft.addEventListener('click', function() {
    trendDiv.scrollBy({left : -300, behavior: "smooth"})
})

trendDiv.addEventListener('scroll', function() {
    if(trendDiv.scrollLeft > 2) {
        trenChevronLeft.classList.remove('hidden')
    } else {
        trenChevronLeft.classList.add('hidden')
    }
})
