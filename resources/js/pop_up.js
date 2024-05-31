document.addEventListener("DOMContentLoaded", function () {
    const openModalBtn = document.getElementById("openModalBtn");
    const closeModalBtns = document.querySelectorAll(".close");

    openModalBtn.addEventListener("click", () => {
        const modal = document.getElementById("addProductModal");
        modal.style.display = "block";
    });

    closeModalBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            const modal = btn.closest(".modal");
            modal.style.display = "none";
        });
    });

    window.addEventListener("click", (event) => {
        if (event.target.classList.contains("modal")) {
            event.target.style.display = "none";
        }
    });
});
