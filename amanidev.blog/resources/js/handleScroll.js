window.addEventListener('scroll', () => {
    const navLinks = document.querySelectorAll('.nav-link');
    const firstSectionHeight = document.getElementById('hero').offsetHeight;
  
    if (window.scrollY > firstSectionHeight - 74) {
      navLinks.forEach(link => link.classList.add('scrolled'));
    } else {
      navLinks.forEach(link => link.classList.remove('scrolled'));
    }
  });