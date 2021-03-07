const listOfBtn = document.querySelectorAll('.btn-del-image');

listOfBtn.forEach((currentValue) => {
    currentValue.addEventListener('click', (e) => {
        e.preventDefault();
        const input = currentValue.parentNode.firstElementChild;
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../fonctions/del_img.php");
        xhr.withCredentials = true;
        let formData = new FormData();
        formData.append("del", input.value);
        xhr.send(formData);
        xhr.onload = function() {
            location.reload();
            if (xhr.status == 200) {
                alert("Image supprimée avec succès");
            } else {
                alert("Erreur, veuillez réessayer ou contactez un administrateur");
            }
          };
    });
});