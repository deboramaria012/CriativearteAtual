function showAlert(mensagem,targetElementId,timeout = 3000){
    var messageDiv = document.getElementById(targetElementId);
    messageDiv.innerHTML = mensagem;
    messageDiv.classList.remove('msgContato');

    setTimeout (function() {
        messageDiv.classList.add('msgContato');
    }, timeout);
}

function displayError(erros){
    let todosOsErros = "";

    for(const[key,value] of Object.entries(erros)){
        todosOsErros += `<div class = "alert alert-danger">${value.join(",")}</div>`;
    }

    if (todosOsErros){
        showAlert(todosOsErros,"contatoMensagem");
    }
}



document.getElementById('formContato').addEventListener('submit', function(e){

    e.preventDefault();

    var data = {
        nomeContato : document.getElementById('nomeContato').value,
        emailContato : document.getElementById('emailContato').value,
        foneContato : document.getElementById('foneContato').value,
        assuntoContato : document.getElementById('assuntoContato').value,
        mensContato : document.getElementById('mensContato').value,
    }

    fetch('/contato/enviar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })



    .then(response => {
        if(!response.ok){
           return response.json().then(errorData => {
            throw errorData;
           });
        }
        return response.json();
    })



    .then((data) => {
        // echo ("Email enviado com sucesso!");

        if (data.sucess) {
            showAlert(
                `<div class="alert-sucess">${data.sucess}</div>`,
                'contatoMensagem'
                );
                document.getElementById('formContato').reset();
        } else{
            showAlert(
            `div class="alert alert-danger">Erro ao enviar o email.</div>`,
            'contatoMensagem'
            );
        }

    })


    .catch(error => {
        if (error.errors) {
            displayError(error.errors);
        } else{
            console.log("Erro desconhecido", error);
        }

    });
});


        //newletter//

        function new_letters(e) {

            e.preventDefault();
            e.stopPropagation();

            var data = {
            emailNews: document.getElementById("emailNews").value,
            };

            fetch("/contato/enviarNew", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
                body: JSON.stringify(data),
            })
            .then((response) => {
                if (!response.ok) {
                    return response.json().then((errorData) => {
                        throw errorData;
                    });
                }
                return response.json();
            })
            .then((data) => {
                if (!data.ok) {
                    showAlert(
                        `<div class="alert alert-success">${data.success}</div>`,
                        "newsMensagem"
                    );
                    document.getElementById("new_letters").reset();
                } else {
                    showAlert(
                        `<div class="alert alert-danger">Erro ao enviar email.</div>`,
                        "newsMensagem"
                    );
                }
            })
            .catch((error) => {
                if (error.errors) {
                    displayError(error.erros);
                } else {
                    console.log("Erro desconhecido", error);
                }
            });
        };




