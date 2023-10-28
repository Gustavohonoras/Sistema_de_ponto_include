function handleModal() {
    const button = document.querySelector(".header__button2");
    const button2 = document.querySelector(".banner__button");
    const modalController = document.querySelector(".modal");
    button.addEventListener("click", () => {
        modalController.showModal();
      }); 
      closeModal()

       button2.addEventListener("click", () =>{
        modalController.showModal()
        preventDefault()
    });
    closeModal()
    }

   
handleModal()

function closeModal(){
    const button = document.querySelector('.modal__close')
    const modalController = document.querySelector('.modal')

    button.addEventListener("click", () => {
        modalController.close();
      });
    
}

