const primaryNav = document.querySelector('.primary-navigation');
const navToggle = document.querySelector('.mob-nav-toogle');
const body = document.querySelector('body');
const background = document.querySelector('.black-background');

/* 
* Función que se encarga de hacer el navegador responsive. Al igual
* que activa que el background se ponga oscuro si es que se le hace
* click al menú.
*/
navToggle.addEventListener('click', () => {
  const visibility = primaryNav.getAttribute('data-visible');

  if (visibility === "false") {
    primaryNav.setAttribute('data-visible', true);
    navToggle.setAttribute('aria-expanded', true);
    body.style.overflow = 'hidden';
    background.style.display = 'block';
  } else if (visibility === "true") {
    primaryNav.setAttribute('data-visible', false);
    navToggle.setAttribute('aria-expanded', false);
    body.style.overflow = 'auto';
    background.style.display = null;
  }
});

/* 
* Función que se encarga de hacer que si en el menú se abre, 
* se pueda salir picandole al body de background oscuro.
*/
background.addEventListener('click', () => {
  primaryNav.setAttribute('data-visible', false);
  navToggle.setAttribute('aria-expanded', false);
  body.style.overflow = 'auto';
  background.style.display = null;
});
