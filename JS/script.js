emailjs.init("_Kkw6273loqcF5YVv"); 

document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();

    emailjs.sendForm('service_zeri4bj', 'template_zvx2udl', this)
        .then(() => {
            alert('✅ Mensaje enviado con éxito');
            this.reset();
        })
        .catch((err) => {
            console.error('❌ Error:', err);
            alert('❌ No se pudo enviar el mensaje');
        });
});