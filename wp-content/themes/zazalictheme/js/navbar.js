document.addEventListener('DOMContentLoaded', function(){
  const navbar = document.getElementById('navbarNav')
  const navbarButton = document.getElementById('navbarButton')
  if(navbar == null) return
  if(navbarButton == null) return
  navbarButton.addEventListener('click', () => {
    navbar.classList.toggle('collapse')
  })
})