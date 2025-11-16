//Começo Inicialização
document.addEventListener("DOMContentLoaded", () => {
    const selectAula = document.getElementById("aula");
    const inputQuantidade = document.getElementById("quantidade");
    const inputTotal = document.getElementById("total");
    const form = document.getElementById("formAula");

    //Começo Atualizar Total
    function atualizarTotal() {
        const preco = parseFloat(selectAula.selectedOptions[0]?.getAttribute("data-preco")) || 0;
        const qtd = parseInt(inputQuantidade.value) || 0;

        if (preco > 0 && qtd > 0) {
            inputTotal.value = (preco * qtd).toFixed(2);
        } else {
            inputTotal.value = "";
        }
    }
    //Final Atualizar Total

    //Começo Event Listeners
    selectAula.addEventListener("change", atualizarTotal);
    inputQuantidade.addEventListener("input", atualizarTotal);
    //Final Event Listeners

    //Começo Submit Form
    form.addEventListener("submit", function(e) {
        e.preventDefault();

        if (!confirm("Confirmar reserva?")) return;

        const formData = new FormData(form);

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "php/registrar_aula.php", true);

        xhr.onload = () => {
            const resp = xhr.responseText.trim();
            if (resp.includes("OK")) {
                alert("Reserva realizada com sucesso!");
                form.reset();
                atualizarTotal();
            } else {
                alert("Erro: " + resp);
            }
        };

        xhr.onerror = () => alert("Erro de conexão.");
        xhr.send(formData);
    });
    //Final Submit Form

    atualizarTotal();
});
//Final Inicialização