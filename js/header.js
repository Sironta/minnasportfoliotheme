/* CHANGING THE COLOR OF HEADER WHILE SCROLLING */

window.addEventListener('scroll', function() {
    let headerContainer = document.getElementById('headerContainer');
    if (window.scrollY > 0) {
            headerContainer.style.transition = 'background-color 0.5s';
            headerContainer.style.backgroundColor = 'var(--secondary-color)';
        } else {
            headerContainer.style.transition = 'background-color 0.5s';
            headerContainer.style.backgroundColor = ''; // Reset to default color
        }
    });
