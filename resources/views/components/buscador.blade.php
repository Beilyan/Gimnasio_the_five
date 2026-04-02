<div class="relative w-full">
    
    <input 
        class="form-control border-dark" 
        type="text" 
        id="buscador"
        placeholder="Buscar ejercicio..."
        autocomplete="off"
    >

    <div id="resultados" 
         class="absolute left-0 top-full w-full hidden z-9999 bg-white border rounded shadow-lg max-h-80 overflow-y-auto">
    </div>

</div>

<script>
const datos = @json($datos);

const input = document.getElementById('buscador');
const resultados = document.getElementById('resultados');

input.addEventListener('keyup', function() {
    let valor = this.value.toLowerCase().trim();
    resultados.innerHTML = '';

    if (valor === '') {
        resultados.classList.add('hidden');
        return;
    }

    let filtrados = datos.filter(d => 
        d.nombre.toLowerCase().includes(valor)
    ).slice(0, 6);

    if (filtrados.length > 0) {
        resultados.classList.remove('hidden');

        filtrados.forEach(d => {
            resultados.innerHTML += `
                <div onclick="window.location.href='${d.ruta}'" 
                     class="flex items-center gap-3 p-3 cursor-pointer hover:bg-gray-100 transition">

                    <div class="w-10 h-10 bg-gray-200 rounded flex items-center justify-center text-lg">
                         
                    </div>

                    <div class="flex flex-col">
                        <span class="text-sm font-medium text-gray-800">
                            ${d.nombre}
                        </span>
                        <span class="text-xs text-gray-500">
                            Ejercicio
                        </span>
                    </div>
                </div>
            `;
        });

    } else {
        resultados.classList.add('hidden');
    }
});

document.addEventListener('click', function(e) {
    if (!input.contains(e.target) && !resultados.contains(e.target)) {
        resultados.classList.add('hidden');
    }
});

input.addEventListener('focus', function() {
    if (input.value.trim() !== '' && resultados.innerHTML !== '') {
        resultados.classList.remove('hidden');
    }
});
</script>