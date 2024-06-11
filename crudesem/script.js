
ListarDesembarques();
function ListarDesembarques(busqueda) {
    fetch("listar.php", {
        method: "POST",
        body: busqueda
    }).then(response => response.text()).then(response => {
        resultado.innerHTML = response;
    })
}

registrar.addEventListener("click", () => {
    fetch("registrar.php", {
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.text()).then(response => {
        if (response == "ok") {
            Swal.fire({
                icon: 'success',
                title: 'Registrado',
                showConfirmButton: false,
                timer: 1500
            })
            frm.reset();
            ListarDesembarques();
        }else{
            Swal.fire({
                icon: 'success',
                title: 'Modificado',
                showConfirmButton: false,
                timer: 1500
            })
            registrar.value = "Registrar";
            idd.value = "";
            ListarDesembarques();
            frm.reset();
        }
    })
});

function Eliminar(idD) {
    Swal.fire({
        title: 'Esta seguro de eliminar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'NO'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch("eliminar.php", {
                method: "POST",
                body: idD
            }).then(response => response.text()).then(response => {
                if (response == "ok") {
                   ListarDesembarques();
                   Swal.fire({
                       icon: 'success',
                       title: 'Eliminado',
                       showConfirmButton: false,
                       timer: 1500
                   })
                }
                
            })
            
        }
    })
}

function Editar(idD) {
    fetch("editar.php", {
        method: "POST",
        body: idD
    }).then(response => response.json()).then(response => {
        idd.value = response.idDesembarque;
        idEspecie.value = response.idEspecie;
        fecha.value = response.fecha;
        kg_dia.value = response.kg_dia;
        registrar.value = "Actualizar"
    })
}

buscar.addEventListener("keyup", () => {
    const valor = buscar.value;
    if (valor == "") {
        ListarDesembarques();
    }else{
        ListarDesembarques(valor);
    }
});
