const element = document.getElementById("heroText");

const texts = [
  "Volunteer Leadership",
  "Community Development",
  "Social Impact",
  "Global Cooperation",
];

let textIndex = 0;
let charIndex = 0;

function typeText() {
  if (charIndex < texts[textIndex].length) {
    element.textContent += texts[textIndex].charAt(charIndex);

    charIndex++;

    setTimeout(typeText, 80);
  } else {
    setTimeout(() => {
      element.textContent = "";

      charIndex = 0;

      textIndex++;

      if (textIndex >= texts.length) {
        textIndex = 0;
      }

      typeText();
    }, 2000);
  }
}

typeText();
