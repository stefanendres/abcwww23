window.onload = () => {
    console.log('hellohello');
    //console.log(window);
    //console.log(window.navigator);
    //console.log(document);


    let main = document.querySelector('main');
    main.classList.add('loaded');


    let headerLinks = document.querySelector('header').querySelectorAll('.menu-link');

    let animatedElement = document.querySelector('.site-logo')

    headerLinks.forEach((headerLink) => {
        headerLink.addEventListener('click', (event) => {
            main.classList.remove('loaded');
            animatedElement.style.animationDuration = 1+'s';
        });
    });


    let projectLinks = document.querySelectorAll('.project-link');

    projectLinks.forEach((projectLink) => {
        projectLink.addEventListener('click', (event) => {
            main.classList.remove('loaded');
        });
    });

    window.addEventListener('scroll', () => {
        console.log(window.scrollY)
    })

};