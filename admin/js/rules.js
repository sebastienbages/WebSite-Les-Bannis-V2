const listOfBtnForDelete = document.querySelectorAll('.btn-delete-rule');

listOfBtnForDelete.forEach((currentValue) => {
    currentValue.addEventListener('click', (e) => {
        e.preventDefault();
        const base = currentValue.parentNode.querySelector('.btn-base');
        const id = currentValue.parentNode.querySelector('.btn-id');
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../fonctions/del_rule.php");
        xhr.withCredentials = true;
        let formData = new FormData();
        formData.append('base', base.value);
        formData.append('id', id.value);
        xhr.send(formData)
        xhr.onload = () => {
            location.reload();
            if (xhr.status == 200) {
                // alert("Règle supprimée avec succès");
            } else {
                alert("Erreur, veuillez réesayer ou contacter un administrateur");
            }
        }
    })
});

const listOfBtnForModify = document.querySelectorAll('.btn-modify-rule');

listOfBtnForModify.forEach((currentValue) => {
    currentValue.addEventListener('click', (e) => {
        e.preventDefault();
        const base = currentValue.parentNode.querySelector('.input-base');
        const id = currentValue.parentNode.querySelector('.input-id');
        const rule = currentValue.parentNode.querySelector('.input-rule');
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../fonctions/modify_rule.php");
        xhr.withCredentials = true;
        let formData = new FormData();
        formData.append('base', base.value);
        formData.append('id', id.value);
        formData.append('rule', rule.value);
        xhr.send(formData)
        xhr.onload = () => {
            location.reload();
            if (xhr.status == 200) {
                // alert("Règle modifiée avec succès");
            } else {
                alert("Erreur, veuillez réesayer ou contacter un administrateur");
            }
        }
    })
});

const listOfInput = document.querySelectorAll('.input-submit');

listOfInput.forEach((currentValue) => {
    currentValue.addEventListener('click', (e) => {
        e.preventDefault();
        const base = currentValue.parentNode.querySelector('.input-base');
        const rule = currentValue.parentNode.querySelector('.input-rule');
        if (rule.value == "") {
            return alert("Veuillez saisir une valeur");
        }
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../fonctions/post_rule.php");
        xhr.withCredentials = true;
        let formData = new FormData();
        formData.append('base', base.value);
        formData.append('rule', rule.value);
        xhr.send(formData)
        xhr.onload = () => {
            location.reload();
            if (xhr.status == 200) {
                // alert("Règle ajoutée avec succès");
            } else {
                alert("Erreur, veuillez réesayer ou contacter un administrateur");
            }
        }
    });
});