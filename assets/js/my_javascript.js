// call functions once page is loaded
document.addEventListener("DOMContentLoaded", function() {
    addClassToElement('ea-new-form', 'row');
});

function addClassToElement(elementName, className) {
    let element = document.getElementById(elementName);

    if (element != null) {
        element.classList.add(className);
    }
}