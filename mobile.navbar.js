class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);

    }

    animateLinks() {
        this.navLinks.forEach((link) => {
            link.style.animation
                ? (link.style.animation = "")
                : (link.style.animation = `navLinkFade 0.5s ease forwards 0.3s`);
        });
    }

    handleClick() {
        this.navList.classList.toggle(this.activeClass);
        this.animateLinks();
        
        document.querySelector("#ativo").style.display = "flex";
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
        
    }

    addMouseEvent() {
        this.mobileMenu.addEventListener("keypress", this.handleClick);

    }

    init() {
        if(this.mobileMenu) {
            this.addClickEvent();
            this.addMouseEvent();
        }
        
        return this;
   
    }

}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-item",
);

mobileNavbar.init();

window.addEventListener('resize', function(){

    let tamanho = window.innerWidth;

    if (tamanho >= 999){

        document.querySelector("#ativo").style.display = "none";
        document.querySelector(".nav-list").style.display = "flex";

    } else {

        document.querySelector("#ativo").style.display = "flex";

    }

});