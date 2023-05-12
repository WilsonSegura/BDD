












































/*
    Carrossel
*/

const wrapper = document.querySelector(".wrapperDoacaoRequisitadas");
const carrossel = document.querySelector(".carrosselDoacaoRequisitadas");
const setaBotao = document.querySelectorAll(".wrapperDoacaoRequisitadas i");
const larguraPrimeiraCaixa = carrossel.querySelector(".caixa").offsetWidth;
const carrosselChildrens = [...carrossel.children];

let isDragging = false, starX, starScrollLerf, timeoutId;

// Obtenha o número de caixas que cabem no carrossel de uma só vez
let caixaPerView = Math.round(carrossel.offsetWidth / larguraPrimeiraCaixa);

// Insira cópias das últimas caixas no início do carrossel para rolagem infinita
carrosselChildrens.slice(-caixaPerView).reverse().forEach(caixa => {
    carrossel.insertAdjacentHTML("afterbegin", caixa.outerHTML);
});

// Insira cópias das primeiras caixas no final do carrossel para rolagem infinita
carrosselChildrens.slice(0, caixaPerView).forEach(caixa => {
    carrossel.insertAdjacentHTML("beforeend", caixa.outerHTML);
});

// Adicione ouvintes de evento para os botões de seta para rolar o carrossel para a esquerda e para a direita
setaBotao.forEach(btn => {
    btn.addEventListener("click", () => {
        carrossel.scrollLeft += btn.id === "left" ? -larguraPrimeiraCaixa : larguraPrimeiraCaixa;
    })
});

const dragStart = (e) => {
    isDragging = true;
    carrossel.classList.add("dragging");
    // Registra o cursor inicial e a posição de rolagem do carrossel
    starX = e.pageX;
    starScrollLerf = carrossel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // Se isDragging for falso, retorne daqui
    // Atualiza a posição de rolagem do carrossel com base no movimento do cursor
    carrossel.scrollLeft = starScrollLerf - (e.pageX - starX);
}

const dragStop = () => {
    isDragging = false;
    carrossel.classList.remove("dragging");
}

const autoPlay = () => {
    if(window.innerWidth < 800) return; // Retorne se a janela for menor que 800
    // Reproduzir automaticamente o carrossel a cada 2500ms
    timeoutId = setTimeout(() =>carrossel.scrollLeft += larguraPrimeiraCaixa, 3000);

}
autoPlay();

const infiniteScroll = () => {
    // Se o carrossel estiver no início, role até o final
    if(carrossel.scrollLeft === 0) {
        carrossel.classList.add("no-transition");
        carrossel.scrollLeft = carrossel.scrollWidth - ( 2 * carrossel.offsetWidth);
        carrossel.classList.remove("no-transition");
    } 
    // Se o carrossel estiver no final, role até o início
    else if (Math.ceil(carrossel.scrollLeft) === carrossel.scrollWidth - carrossel.offsetWidth){
        carrossel.classList.add("no-transition");
        carrossel.scrollLeft = carrossel.offsetWidth;
        carrossel.classList.remove("no-transition");
    }

    // Limpe o tempo limite existente e inicie a reprodução automática se o mouse não estiver pairando sobre o carrossel
    clearTimeout(timeoutId);
    if(wrapper.matches(":hover")) autoPlay();
}

carrossel.addEventListener("mousedown", dragStart);
carrossel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carrossel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);



/*
    Perguntas Frequentes
*/

const perguntas = document.querySelectorAll(".perguntas");

perguntas.forEach((perguntas) => {
    perguntas.addEventListener("click", () => {
        perguntas.classList.toggle("active");
    });
});