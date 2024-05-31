document.getElementById('mobile-menu-button').addEventListener('click', function() {
    var mobileMenu = document.getElementById('mobile-menu');
    var button = this;
    var svgIcons = button.querySelectorAll('svg');

    // Toggle max-height for transition
    if (mobileMenu.style.maxHeight) {
        mobileMenu.style.maxHeight = null;
    } else {
        mobileMenu.style.maxHeight = mobileMenu.scrollHeight + "px";
    }

    svgIcons.forEach(function(icon) {
        icon.classList.toggle('hidden');
    });

    // Toggle aria-expanded
    var isExpanded = button.getAttribute('aria-expanded') === 'true';
    button.setAttribute('aria-expanded', !isExpanded);
});
