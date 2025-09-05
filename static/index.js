document.querySelector("form").addEventListener("submit", async function (e) {
  e.preventDefault(); // Prevenir el envío normal del formulario

  // Mostrar alerta y esperar confirmación
  const result = await Swal.fire({
    title: "Colaborador guardado!",
    text: "El colaborador ha sido guardado exitosamente.",
    icon: "success",
    confirmButtonText: "OK",
  });

  // Si el usuario confirmó, enviar el formulario
  if (result.isConfirmed) {
    this.submit();
  }
});

// Manejador para los botones de eliminar
document.querySelectorAll(".btnEliminar").forEach((button) => {
  button.addEventListener("click", async function (e) {
    e.preventDefault();

    const result = await Swal.fire({
      title: "¿Estás seguro de eliminar este colaborador?",
      text: "¡Se eliminará definitivamente!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sí, eliminar!",
      cancelButtonText: "Cancelar",
    });

    if (result.isConfirmed) {
      // Si el usuario confirma, redirigir a la URL de eliminar
      window.location.href = this.href;
    }
  });
});
