const collapsibles = document.querySelectorAll('.collapsible');

console.log("tester");

collapsibles.forEach(collapsible => {
    collapsible.addEventListener('click', function () {
        collapsibleDetails(collapsible);
    });
});

function collapsibleDetails(collapsible) {
    let content = collapsible.nextElementSibling;
    content.classList.toggle("hidden");
}