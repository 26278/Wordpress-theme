//scripts voor submenu

const heeftSubMenu  = document.querySelectorAll('.menu-item-has-children');
for(let i=0; i<heeftSubMenu.length; i++){
  const submenu     = heeftSubMenu[i].querySelector('.sub-menu');
  const linkSubMenu = heeftSubMenu[i].querySelector('a');

//Eerst het submenu verbergen, voorbeeld van gracefull degradation
submenu.classList.toggle('menu-verbergen');

linkSubMenu.addEventListener('click', (e) => {
  e.preventDefault();
  submenu.classList.toggle('menu-verbergen');
  linkSubMenu.classList.toggle('menu-is-open');
  })
}

// placeholder tekst & type. Stop de input tekst in een var
let zoekVenster = document.getElementById('s');
zoekVenster.setAttribute('placeholder' , 'Zoeken...');
zoekVenster.setAttribute('type' , 'search');
 
