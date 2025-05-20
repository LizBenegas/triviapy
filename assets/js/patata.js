document.addEventListener('DOMContentLoaded', function() {
    console.log('hola mundo');

    const btn = document.querySelector('button');

        btn.addEventListener('click', () => {
            document.body.style.transition = 'background 0.5s ease';
            document.body.style.background = '#010f0c';
        })

});
