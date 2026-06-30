const teamModal = document.getElementById("teamProfileModal");

document.querySelectorAll(".view-team-profile").forEach((button) => {
  button.addEventListener("click", function () {
    document.getElementById("modalTeamImage").src = this.dataset.image;

    document.getElementById("modalTeamName").textContent = this.dataset.name;

    document.getElementById("modalTeamPosition").textContent =
      this.dataset.position;

    document.getElementById("modalTeamEmail").textContent = this.dataset.email;

    document.getElementById("modalTeamDescription").textContent =
      this.dataset.description;

    document.getElementById("modalTeamLinkedin").href = this.dataset.linkedin;

    // document.getElementById("modalTeamProfileLink").href =dataset.profile; this.
    const profileLink = document.getElementById("modalTeamProfileLink");

    if (profileLink) {
      profileLink.href = this.dataset.profile;
    }

    // teamModal.classList.remove("hidden");
    // teamModal.classList.add("flex");

    teamModal.classList.remove("hidden");
    teamModal.classList.add("flex");

    setTimeout(() => {
      document
        .getElementById("teamModalContent")
        .classList.remove("opacity-0", "scale-95");

      document
        .getElementById("teamModalContent")
        .classList.add("opacity-100", "scale-100");
    }, 10);

    document.body.style.overflow = "hidden";
  });
});

document
  .getElementById("closeTeamModal")
  .addEventListener("click", closeTeamModal);

function closeTeamModal() {
  teamModal.classList.add("hidden");
  teamModal.classList.remove("flex");

  document.body.style.overflow = "";
}

teamModal.addEventListener("click", function (e) {
  if (e.target === this) {
    closeTeamModal();
  }
});
