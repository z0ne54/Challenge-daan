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

    newsletterForm.addEventListener("submit", async (event) => {
        event.preventDefault();
        newsletterStatus.textContent = "";
        newsletterStatus.classList.remove("error");

        try {
            const response = await fetch(newsletterForm.action, {
                method: "POST",
                body: new FormData(newsletterForm),
                headers: { Accept: "application/json" }
            });
            const result = await response.json();

            if (!response.ok) {
                throw new Error(result.message || "Controleer je gegevens en probeer het opnieuw.");
            }

            newsletterStatus.textContent = result.message;
            newsletterForm.reset();
        } catch (error) {
            newsletterStatus.textContent = `Inschrijving niet gelukt: ${error.message}`;
            newsletterStatus.classList.add("error");
        }
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