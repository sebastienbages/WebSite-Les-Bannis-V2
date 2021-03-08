const submit = document.querySelector('.submit-email');
const submitLoading = document.querySelector('.submit-loading');
const form = document.querySelector('#form-email');
const email = document.querySelector('#email');
const message = document.querySelector('#message');

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

const emptyInput = () => {
  email.value = "";
  message.value = "";
};


submit.addEventListener('click', (e) => {
  e.preventDefault();
  if (document.querySelector('#message-send')) {
    document.querySelector('#message-send').remove();
  }
  switchSubmit();
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../fonctions/sendmail_ovh.php");
  xhr.withCredentials = true;
  let formData = new FormData();
  formData.append("email", email.value);
  formData.append("message", message.value);
  xhr.send(formData);
  xhr.onload = function() {
    if (xhr.status == 200) {
      emptyInput();
      switchSubmit();
      const succes = document.createElement('p');
      succes.classList.add('shadow-green', 'center', 'm-0');
      succes.id = "message-send";
      succes.innerHTML = 'Email Envoyé ! Merci !';
      form.appendChild(succes);
    } else {
      switchSubmit();
      const error = document.createElement('p');
      error.classList.add('shadow-red', 'center', 'm-0');
      error.id = "message-send";
      error.innerHTML = 'Erreur d\'envoi, veuillez réessayer !';
      form.appendChild(error);
    }
  };
});

