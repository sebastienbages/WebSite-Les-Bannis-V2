const submit = document.querySelector('.submit-add-quest');
const submitLoading = document.querySelector('.submit-loading');

const switchSubmit = () => {
    if (submit.classList.contains('hidden')) {
      submit.classList.remove('hidden');
      submitLoading.classList.add('hidden');
    }
    else {
      submitLoading.classList.remove('hidden');
      submit.classList.add('hidden');
    }
};

const listOfSubmitForDelete = document.querySelectorAll('.submit-quest');

listOfSubmitForDelete.forEach((currentValue) => {
    currentValue.addEventListener('click', (e) => {
        e.preventDefault();
        const input = currentValue.parentNode.firstElementChild;
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../fonctions/del_quest.php");
        xhr.withCredentials = true;
        let formData = new FormData();
        formData.append("id", input.value);
        xhr.send(formData);
        xhr.onload = () => {
            location.reload();
            if (xhr.status == 200) {
                alert("Quête supprimée avec succès");
            } else {
                alert("Erreur, veuillez réessayer ou contactez un administrateur");
            }
          };
    });
});

const submitAddQuest = document.querySelector('.submit-add-quest');

submitAddQuest.addEventListener('click', (e) => {
    e.preventDefault();
    switchSubmit();
    const titre = document.querySelector('#titre');
    const article = document.querySelector('#article');
    const img = document.querySelector('#image');
    console.log(titre.value);
    console.log(article.value);
    console.log(image.value);
    console.log(document.querySelector('#flexCheckChecked').checked);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../fonctions/post_quest.php");
    xhr.withCredentials = true;
    let formData = new FormData();
    formData.append("titre", titre.value);
    formData.append("article", article.value);
    if (document.querySelector('#flexCheckChecked').checked) {
        formData.append("img", img.value);
    }
    xhr.send(formData);
    xhr.onload = () => {
        location.reload();
        if (xhr.status == 200) {
            switchSubmit();
            titre.value = "";
            article.value = "";
            alert("Quête ajoutée avec succès");
        } else {
            switchSubmit();
            alert("Erreur, veuillez réessayer ou contactez un administrateur");
        }
    };
});