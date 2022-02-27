
// show/hide nav
const toggler = document.querySelector('.toggler')
const bars = document.querySelectorAll('.bar')
const nav = document.querySelector('nav')
const ul = document.querySelector('nav ul')
const loadMoreBtn = document.querySelector('.load-more-btn');
const gallery2 = document.querySelector('.gallery2');

const toggleNavDisplay = () => {
    ul.classList.toggle('active-ul')
    bars.forEach(bar => bar.classList.toggle('active'))
}

toggler.addEventListener('click', toggleNavDisplay)

// toggle gallery2
if(loadMoreBtn) {
    loadMoreBtn.addEventListener('click', function(e) {
        gallery2.classList.toggle('show');
        e.target.innerHTML == 'More...'? e.target.innerHTML = 'Less' : e.target.innerHTML = 'More...'
    })
}
