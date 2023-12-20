
// Получаем ссылку на элемент gallery
let gallery = document.querySelector(".gallery");

// Проверяем, существует ли элемент gallery
if (gallery) {
    // Ищем все элементы <br> внутри элемента gallery
    let brElements = gallery.getElementsByTagName("br");

    // Проходимся по найденным элементам <br> и удаляем их
    for (let i = 0; i < brElements.length; i++) {
        let brElement = brElements[i];
        brElement.parentNode.removeChild(brElement);
    }
} else {
}
