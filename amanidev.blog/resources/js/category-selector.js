const categoryLinks = document.querySelectorAll('.category-link');

categoryLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    categoryLinks.forEach(link => link.classList.remove('selected'));
    link.classList.add('selected');
  });
});