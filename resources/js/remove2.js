document.addEventListener("DOMContentLoaded", function () {
    // Function to handle showing modals for products with no category
    function handleCategoryModals() {
        const openCategoryModalButtons = document.querySelectorAll(
            '[id^="openModalCategory"]'
        );
        const closeCategoryModalButtons = document.querySelectorAll(
            '[id^="closeModalCategory"]'
        );

        openCategoryModalButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const modalId = button.getAttribute("data-target");
                const modal = document.querySelector(modalId);
                modal.style.display = "block";
            });
        });

        closeCategoryModalButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const modal = button.closest(".modal");
                modal.style.display = "none";
            });
        });

        window.addEventListener("click", (event) => {
            if (event.target.classList.contains("modal")) {
                event.target.style.display = "none";
            }
        });
    }

    // Function to handle showing modals for products with no order
    function handleOrderModals() {
        const openOrderModalButtons = document.querySelectorAll(
            '[id^="openModalOrder"]'
        );
        const closeOrderModalButtons = document.querySelectorAll(
            '[id^="closeModalOrder"]'
        );

        openOrderModalButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const modalId = button.getAttribute("data-target");
                const modal = document.querySelector(modalId);
                modal.style.display = "block";
            });
        });

        closeOrderModalButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const modal = button.closest(".modal");
                modal.style.display = "none";
            });
        });

        window.addEventListener("click", (event) => {
            if (event.target.classList.contains("modal")) {
                event.target.style.display = "none";
            }
        });
    }

    // Function to handle showing modals for removing products
    function handleRemoveModals() {
        const openModalButtons = document.querySelectorAll(
            '[id^="openModalremove"]'
        );
        const closeModalButtons = document.querySelectorAll(
            '[id^="closeModalremove"]'
        );

        openModalButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const modalId = button.getAttribute("data-target");
                const modal = document.querySelector(modalId);
                modal.style.display = "block";
            });
        });

        closeModalButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const modal = button.closest(".modal");
                modal.style.display = "none";
            });
        });

        window.addEventListener("click", (event) => {
            if (event.target.classList.contains("modal")) {
                event.target.style.display = "none";
            }
        });
    }

    // Call the respective functions based on your requirement
    handleCategoryModals();
    handleOrderModals();
    handleRemoveModals(); // Add this line to ensure the remove modals are handled
});
