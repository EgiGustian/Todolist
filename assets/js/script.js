document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('.form form');
  
  if (form) {
    form.addEventListener('submit', function(e) {
      const taskInput = document.querySelector('.form-input');
      const taskValue = taskInput.value.trim();
      let errorMsg = document.querySelector('.error-message');
      
      if (taskValue === '') {
        e.preventDefault();
        
        // Buat elemen error jika belum ada
        if (!errorMsg) {
          errorMsg = document.createElement('div');
          errorMsg.className = 'error-message';
          form.parentElement.insertBefore(errorMsg, form);
        }
        
        errorMsg.textContent = 'Masukkan tugas terlebih dahulu!';
        errorMsg.style.display = 'block';
        taskInput.focus();
      } else {
        // Hapus pesan error jika form valid
        if (errorMsg) {
          errorMsg.style.display = 'none';
        }
      }
    });
  }
});