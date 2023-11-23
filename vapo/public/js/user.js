function abrirMenu() {
    const menuUser = document.getElementById('janela-menu')
    menuUser.classList.add('abrir-menu')

    menuUser.addEventListener('click', (e) => {
        if (e.target.id == 'fechar-menu' || e.target.id == 'janela-menu' || e.target.id == 'user') {
            menuUser.classList.remove('abrir-menu')
        }
    })
}