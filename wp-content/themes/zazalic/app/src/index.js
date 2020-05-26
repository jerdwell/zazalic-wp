// scripts
import './js/navbar'
// scripts

// styles
import './styles/app.scss'
import './styles/all.css'
// styles

//images
import logoZazalic from './images/logo_zazalic.png'
import bgAbstract01 from './images/bg_abstract_01.jpeg'
//images


// functions

document.addEventListener('DOMContentLoaded', function(){
  // setTimeout(() => {
  // }, 2000);
  document.querySelector('.loader').className += ' d-none'
})

let brandlogo = document.getElementById('navbar-brand-logo')
brandlogo.src = logoZazalic

let coverIndex = document.getElementById('cover-index')
coverIndex.src = bgAbstract01
// functions