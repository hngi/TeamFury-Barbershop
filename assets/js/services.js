let services = document.querySelector('.services')
let serviceIcon = document.querySelectorAll('.color-circle')

for (let i = 0; i < serviceIcon.length; i++) {
    serviceIcon[i].addEventListener('click', () => {
        if (i === 0) {
            serviceIcon[0].classList.add('color-circle-active');
            serviceIcon[1].classList.remove('color-circle-active');
            serviceIcon[2].classList.remove('color-circle-active');
            serviceIcon[3].classList.remove('color-circle-active');
            services.style.backgroundImage = 'url("../assets/img/bg-1.png")'
        }else if(i === 1){
            serviceIcon[1].classList.add('color-circle-active');
            serviceIcon[0].classList.remove('color-circle-active');
            serviceIcon[2].classList.remove('color-circle-active');
            serviceIcon[3].classList.remove('color-circle-active');
            services.style.backgroundImage = 'url("../assets/img/bg-1.png")'
        }else if(i === 2){
            serviceIcon[2].classList.add('color-circle-active');
            serviceIcon[1].classList.remove('color-circle-active');
            serviceIcon[0].classList.remove('color-circle-active');
            serviceIcon[3].classList.remove('color-circle-active');
            services.style.backgroundImage = 'url("../assets/img/bg-1.png")'
        }else if(i === 3){
            serviceIcon[3].classList.add('color-circle-active');
            serviceIcon[1].classList.remove('color-circle-active');
            serviceIcon[2].classList.remove('color-circle-active');
            serviceIcon[0].classList.remove('color-circle-active');
            services.style.backgroundImage = 'url("../assets/img/bg-1.png")'
        }
    })
}