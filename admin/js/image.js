//AFFICHAGE DES IMAGES DYNAMIQUE
const img = document.querySelector('#image-selected');
const select = document.querySelector('#image');
img.src = "../" + select.value;
const emptyOption = new Option("", "");

select.addEventListener("change", () => {
  img.src = "../" + select.value;
});