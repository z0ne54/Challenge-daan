const newsletterDialog = document.getElementById("newsletter-dialog");
const openNewsletter = document.getElementById("open-newsletter");
const closeNewsletter = document.getElementById("close-newsletter");
const newsletterForm = document.getElementById("newsletter-form");
const newsletterStatus = document.getElementById("newsletter-status");

if (newsletterDialog && openNewsletter && closeNewsletter && newsletterForm && newsletterStatus) {
    openNewsletter.addEventListener("click", () => {
        newsletterDialog.showModal();
    });

    closeNewsletter.addEventListener("click", () => {
        newsletterDialog.close();
    });

    newsletterDialog.addEventListener("click", (event) => {
        if (event.target === newsletterDialog) {
            newsletterDialog.close();
        }
    });

    newsletterForm.addEventListener("submit", (event) => {
        event.preventDefault();
        const name = document.getElementById("newsletter-name").value.trim();
        newsletterStatus.textContent = `Bedankt, ${name}! Je staat nu ingeschreven voor ons nieuws.`;
        newsletterForm.reset();
    });

    if (window.location.hash === "#newsletter-dialog") {
        newsletterDialog.showModal();
    }
}






const themeToggle = document.getElementById("themeToggle");

if (localStorage.getItem("theme") === "light") {
    document.body.classList.add("light");
}

if (themeToggle) {
    themeToggle.addEventListener("click", () => {
        document.body.classList.toggle("light");
        localStorage.setItem(
            "theme",
            document.body.classList.contains("light") ? "light" : "dark"
        );
    });
}