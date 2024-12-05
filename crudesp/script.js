ListarEspecies();
function ListarEspecies(busqueda) {
    fetch("listar.php", {
        method: "POST",
        body: busqueda
    }).then(response => response.text()).then(response => {
        resultado.innerHTML = response;
    })
}

registrar.addEventListener("click", (event) => {
    event.preventDefault();
    
    const nombreValue = nombre.value.trim();
    const tipoValue = tipo.value.trim();

    if (!nombreValue || !tipoValue) {
        Swal.fire({
            icon: "error",
            title: "Campos obligatorios",
            text: "Por favor, completa todos los campos.",
        });
        return;
    }
    fetch("registrar.php", {
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.text()).then(response => {
        if (response == "ok") {
            Swal.fire({
                icon: "success",
                title: "Registrado",
                showConfirmButton: false,
                timer: 1500
            })
            frm.reset();
            ListarEspecies();
        }else{
            Swal.fire({
                icon: "success",
                title: "Modificado",
                showConfirmButton: false,
                timer: 1500
            })
            registrar.value = "Registrar";
            ide.value = "";
            ListarEspecies();
            frm.reset();
        }
    })
});

function Eliminar(idE) {
    Swal.fire({
        title: "Esta seguro de eliminar?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si",
        cancelButtonText: "NO"
    }).then((result) => {
        if (result.isConfirmed) {
            fetch("eliminar.php", {
                method: "POST",
                body: idE
            }).then(response => response.text()).then(response => {
                if (response == "ok") {
                   ListarEspecies();
                   Swal.fire({
                       icon: "success",
                       title: "Eliminado",
                       showConfirmButton: false,
                       timer: 1500
                   })
                }
                
            })
            
        }
    })
}

function Editar(idE) {
    fetch("editar.php", {
        method: "POST",
        body: idE
    }).then(response => response.json()).then(response => {
        ide.value = response.idEspecie;
        nombre.value = response.nombre;
        tipo.value = response.tipo;
        registrar.value = "Actualizar"
    })
}

buscar.addEventListener("keyup", () => {
    const valor = buscar.value;
    if (valor == "") {
        ListarEspecies();
    }else{
        ListarEspecies(valor);
    }
});
