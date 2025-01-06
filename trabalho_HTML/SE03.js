document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('forgot-password-form');
    const message = document.getElementById('message');
  
    form.addEventListener('submit', function(event) {
      event.preventDefault();
  
      const email = document.getElementById('email').value;
      const newPassword = document.getElementById('new-password').value;
      const confirmPassword = document.getElementById('confirm-password').value;
  
      if (newPassword !== confirmPassword) {
        message.innerHTML = 'As senhas não coincidem.';
        return;
      }
  
      // Aqui você pode adicionar código para enviar o e-mail de recuperação
      // Por exemplo, você pode usar uma API AJAX para enviar os dados para um servidor
  
      // Exemplo simplificado de mensagem de sucesso
      message.innerHTML = 'E-mail de recuperação enviado com sucesso para ' + email;
    });
  });
  