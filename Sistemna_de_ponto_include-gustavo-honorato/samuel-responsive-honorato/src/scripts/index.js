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
    });
    closeModal()
    }

    

   
handleModal()

function closeModal(){
    const button = document.querySelector('.modal__close')
    const button2 = document.querySelector('.register__close')
    const modalController = document.querySelector('.modal')
    const modalController2 = document.querySelector('.modal__register')

    button.addEventListener("click", () => {
        modalController.close();
      });
    button2.addEventListener("click", () => {
        modalController2.close();
      });
    
}

function handleModal2() {
    const button = document.querySelector(".modal__button2");
    const modalController = document.querySelector(".modal__register");
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

   
handleModal2()


