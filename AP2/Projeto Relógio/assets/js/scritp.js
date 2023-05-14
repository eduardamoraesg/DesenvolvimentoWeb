const horas = document.getElementById('horas');
const minutos = document.getElementById('minutos');
const segundos = document.getElementById('segundos');
// pega o elemento pelo 'id'. que no caso é horas

const relogio = setInterval(function time() {
    let dateToday = new Date();
    let hr = dateToday.getHours();
    let min = dateToday.getMinutes();
    let sec = dateToday.getSeconds();
    // "dateToday." atribui o tempo exato às variáveis
    // function time() atualiza o horário
    // let é usado para criar uma variável que pode ter o seu valor alterado ao longo do código

    if (hr < 10) hr = '0' + hr;
    if (min < 10) min = '0' + min;
    if (sec < 10) sec = '0' + sec;
    
    horas.textContent = hr;
    minutos.textContent = min;
    segundos.textContent = sec;
    // text.Content atribui o valor das variáveis aos ids
})
