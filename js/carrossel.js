//Começo Variáveis do Carrossel
const controls = document.querySelectorAll(".control");
let currentItem = 0;
const items = document.querySelectorAll(".item");
const maxItens = items.length; 
//Final Variáveis do Carrossel

//Começo Controles do Carrossel
controls.forEach((control) => {
    control.addEventListener("click", () =>{
        
        const isleft = control.classList.contains("arrow-left"); 
       
       //Começo Looping do Carrossel
       if(isleft) {
         currentItem -= 1;
       } else {
         currentItem += 1;
       }
       
       if(currentItem >= maxItens) {
         currentItem = 0;
       }
       
       if(currentItem < 0) {
         currentItem = maxItens -1;
       }
       //Final Looping do Carrossel
      
       //Começo Atualizar Item Atual
       items.forEach(item => item.classList.remove("atual"));
       
       items[currentItem].scrollIntoView({
         inline: "center",
         behavior: "smooth"
       });
      
       items[currentItem].classList.add("atual");
       //Final Atualizar Item Atual
    });
});
//Final Controles do Carrossel