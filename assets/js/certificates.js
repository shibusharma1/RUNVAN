const filterBtns = document.querySelectorAll(".cert-filter");
const certificationcards = document.querySelectorAll(".certification-card");

filterBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    filterBtns.forEach((b) => b.classList.remove("active-filter"));

    btn.classList.add("active-filter");

    const filter = btn.dataset.filter;

    certificationcards.forEach((card) => {
      if (filter === "all" || card.classList.contains(filter)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
});

// model js
const certificateModal = document.getElementById("certificateModal");

const viewButtons = document.querySelectorAll(".view-certificate");

const closeCertificateModal = document.getElementById("closeCertificateModal");

const closeModalBtn = document.getElementById("closeModalBtn");

viewButtons.forEach((button) => {
  button.addEventListener("click", () => {
    document.getElementById("modalCertificateImage").src = button.dataset.image;

    document.getElementById("modalTitle").textContent = button.dataset.title;

    document.getElementById("modalCategory").textContent =
      button.dataset.category;

    document.getElementById("modalIssuer").textContent = button.dataset.issuer;

    document.getElementById("modalDate").textContent = button.dataset.date;

    document.getElementById("modalNumber").textContent = button.dataset.number;

    document.getElementById("modalDescription").textContent =
      button.dataset.description;

    document.getElementById("modalPdf").href = button.dataset.pdf;

    certificateModal.classList.remove("hidden");

    document.body.style.overflow = "hidden";
  });
});

function closeCertificate() {
  certificateModal.classList.add("hidden");

  document.body.style.overflow = "";
}

closeCertificateModal.addEventListener("click", closeCertificate);

closeModalBtn.addEventListener("click", closeCertificate);

certificateModal.addEventListener("click", (e) => {
  if (e.target === certificateModal) {
    closeCertificate();
  }
});

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && !certificateModal.classList.contains("hidden")) {
    closeCertificate();
  }
});
