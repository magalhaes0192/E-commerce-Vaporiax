function abrirEnd() {
    const modal = document.getElementById('form')
    modal.classList.add('abrir-form')

    modal.addEventListener('click', (e) => {
        if (e.target.id == 'fechar-form' || e.target.id == 'fechar-h3' || e.target.id == 'fechar-i') {
            modal.classList.remove('abrir-form')
        }
    })
}