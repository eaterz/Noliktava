document.addEventListener("DOMContentLoaded", function () {
    // Get all open modal buttons
    const openModalButtons = document.querySelectorAll(
        '[id^="openModalremove"]'
    );

    // Get all close modal buttons
    const closeModalButtons = document.querySelectorAll(
        '[id^="closeModalremove"]'
    );

    // Attach click event to each open modal button
    openModalButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const modalId = button.getAttribute("data-target");
            const modal = document.querySelector(modalId);
            modal.style.display = "block";
        });
    });

    // Attach click event to each close modal button
    closeModalButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const modal = button.closest(".modal");
            modal.style.display = "none";
        });
    });

    // Attach click event to window to close modal when clicking outside
    window.addEventListener("click", (event) => {
        if (event.target.classList.contains("modal")) {
            event.target.style.display = "none";
        }
    });
});
