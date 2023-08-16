const searchInput = document.getElementById('search-input');
searchInput.addEventListener('input', () => {
  const searchTerm = searchInput.value.toLowerCase();
  const cursos = document.querySelectorAll('.btnCursos');
  cursos.forEach(curso => {
    const nombreCurso = curso.textContent.toLowerCase();
    if (nombreCurso.includes(searchTerm)) {
      curso.style.display = 'block';
    } else {
      curso.style.display = 'none';
    }
  });
});