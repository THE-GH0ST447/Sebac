document.getElementById('login').addEventListener('click', function() {
    document.getElementById('registrar').style.display = 'none';
    document.getElementById('sair').style.display = 'none';
    document.getElementById('login').style.display = 'block';
  });

  document.getElementById('registrar').addEventListener('click', function() {
    document.getElementById('login').style.display = 'none';
    document.getElementById('sair').style.display = 'none';
    document.getElementById('registrar').style.display = 'block';
  });

  document.getElementById('sair').addEventListener('click', function() {
    document.getElementById('registrar').style.display = 'none';
    document.getElementById('login').style.display = 'none';
    document.getElementById('sair').style.display = 'block';
  });
