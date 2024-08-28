function toggleModal(modalId, show){
    const modal = document.getElementById(modalId);
    if (show == true){
        modal.style.display = 'flex'
    }else if (show == false){
        modal.style.display = 'none'
    }
}

document.querySelectorAll('.modal-btn').forEach(button => {
    button.addEventListener('click', () => {
        const modalId = button.getAttribute('data-modal');
        if(modalId){
            toggleModal(modalId, true)
        }
    })
})

document.querySelectorAll('.modal').forEach(modal =>{
    modal.addEventListener('click', event => {
        if (event.target.classList.contains('modal') || event.target.classList.contains('close')){
            toggleModal(modal.id, false);
        }
    })
})

