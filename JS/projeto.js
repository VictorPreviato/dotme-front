  
//  Toggle para mostrar e esconder senhas
  document.querySelectorAll('.show-psswd').forEach(button => {
    const targetSelector = button.getAttribute('data-toggle-target')
    const input = document.querySelector(targetSelector)
    const icon = button.querySelector('img')

    button.addEventListener('click', () => {
      if (input) {
        input.type = input.type === 'password' ? 'text' : 'password'

        icon.src = icon.src.includes('eye_open')
          ? './IMG/ICONSENHA/eye_closed.svg'
          : './IMG/ICONSENHA/eye_open.svg'
      }
    })
  })

// Posicionamento de coordenadas para o mapa
var lat = -23.6469595;
var lon = -46.7032713;

var map = L.map('map').setView([lat, lon], 17);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker([lat, lon]).addTo(map);
marker.bindPopup("R. Dr. Antônio Bento, 393 – Santo Amaro, SP").openPopup();

// Filtro de CEP
function buscarCEP() {
  const cep = document.getElementById('cep').value.replace(/\D/g, '');

  fetch(`https://viacep.com.br/ws/${cep}/json/`)
    .then(response => response.json())
    .then(data => {
      if (data.erro) {
        alert("CEP não encontrado.");
        document.getElementById('cidade').value = '';
        document.getElementById('estado').value = '';
      } else {
        document.getElementById('cidade').value = data.localidade;
        document.getElementById('estado').value = data.uf;
      }
    })
    .catch(() => alert("Erro ao buscar CEP."));
}

// Collapse de animais para o feed
function mostrarMais() {
  document.querySelectorAll('.foto.hidden').forEach(card => {
    card.classList.remove('hidden');
  });
  document.querySelector('.load-more').style.display = 'none';
}

   // Função para mostrar/ocultar campo "Outro tipo de animal"
    function verificarOutroTipo() {
      const select = document.getElementById("tipo-animal");
      const campoOutro = document.getElementById("campo-outro-animal");

      if (select.value === "outro") {
        campoOutro.style.display = "block";
      } else {
        campoOutro.style.display = "none";
      }
    }

    // Função para mostrar/ocultar campo "Nome do pet"
    function mostrarCampoNome() {
      const select = document.getElementById("tem-nome");
      const campoNome = document.getElementById("campo-nome");

      if (select.value === "sim") {
        campoNome.style.display = "block";
      } else {
        campoNome.style.display = "none";
      }
    }

    // Função para mostrar/ocultar campo "Última localização" baseado no tipo de cadastro
    function gerenciarCamposPerdido() {
      const tipoCadastroSelect = document.getElementById("tipo-cadastro");
      const campoUltimaLocalizacao = document.getElementById("campo-ultima-localizacao");

      if (tipoCadastroSelect.value === "perdido") {
        campoUltimaLocalizacao.style.display = "block";
      } else {
        campoUltimaLocalizacao.style.display = "none";
      }
    }

    // --- Funcionalidade de Pré-visualização de Imagens ---
    document.addEventListener('DOMContentLoaded', () => {
      const inputArquivo = document.getElementById('inputArquivo');
      const previewContainer = document.getElementById('preview-imagens');

      if (inputArquivo && previewContainer) {
        inputArquivo.addEventListener('change', (event) => {
          previewContainer.innerHTML = ''; // Limpa as pré-visualizações anteriores
          const files = event.target.files;
          const maxImages = 5; // Limite de 5 imagens

          if (files.length > maxImages) {
            alert(`Você pode enviar no máximo ${maxImages} imagens.`);
            inputArquivo.value = ''; // Limpa a seleção de arquivos para forçar o limite
            return;
          }

          for (const file of files) {
            if (file.type.startsWith('image/')) { // Verifica se é um arquivo de imagem
              const reader = new FileReader();

              reader.onload = (e) => {
                const imgWrapper = document.createElement('div');
                imgWrapper.classList.add('preview-imagem-item'); // Classe para estilização

                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = 'Pré-visualização da imagem';

                imgWrapper.appendChild(img);
                previewContainer.appendChild(imgWrapper);
              };

              reader.readAsDataURL(file); // Lê o arquivo como URL de dados (base64)
            }
          }
        });
      }
    });

   

    
    

    