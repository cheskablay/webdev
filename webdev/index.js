const navbar = document.querySelector('nav');
window.onscroll = () => {
    if (window.scrollY > 270) {
        navbar.classList.add('nav-colored');
    } else {
        navbar.classList.remove('nav-colored');
    }
};

const text = document.querySelector(".sec-text");

const textLoad = () => {
  const texts = [
    "Francheska Mae D. Blay",
    "Our Lady of Fatima University",
    "Bachelor of Science in Information Technology",
    "Fatima Computing and Multimedia Society Officer",
    "Social Orientation Community Involvement Volunteer"
  ];

  let currentIndex = 0;

  const updateText = () => {
    text.textContent = texts[currentIndex];
    currentIndex = (currentIndex + 1) % texts.length;
  };

  updateText();

  const intervalId = setInterval(updateText, 4000);

};

textLoad();
