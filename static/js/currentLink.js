window.onload = () => {
  const path = window.location.href;
  const links = document.querySelectorAll('.header-content .links a');

  for (const link of links) {
    if (link.href === path) {
      link.classList.add('active');
    } else if (link.classList.contains('active')) {
      link.classList.remove('active');
    }
  }
};