document.addEventListener("DOMContentLoaded", function() {
    function loadHTML(selector, url) {
        fetch(url)
            .then(response => response.text())
            .then(data => document.querySelector(selector).innerHTML = data);
    }

    loadHTML('#header', 'Partials/header.html');
    loadHTML('#footer', 'Partials/footer.html');
    loadHTML('#footer', 'Partials/sidebar.html');
});
