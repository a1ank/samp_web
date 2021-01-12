$(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() != 0) {
      $('#toTop').fadeIn();
    } else {
      $('#toTop').fadeOut();
    }
  });
  $('#toTop').click(function() {
    $('body,html').animate({scrollTop:0},800);
  });
});

const smoothLinks = document.querySelectorAll('a[href^="#"]');
for (let smoothLink of smoothLinks) {
    smoothLink.addEventListener('click', function (e) {
        e.preventDefault();
        const id = smoothLink.getAttribute('href');

        document.querySelector(id).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
};

// copy to click board
clickboardInput.onclick = () => {
    navigator.clipboard.writeText("185.139.68.64:1991")
    successMessage.classList.add('active')
    setTimeout(() => successMessage.classList.remove('active'), 2000)
}

clickboardCopy.onclick = () => {
    navigator.clipboard.writeText("185.139.68.64:1991")
    successMessage.classList.add('active')
    setTimeout(() => successMessage.classList.remove('active'), 2000)
}

function show(state)
{
document.getElementById('window').style.display = state;
document.getElementById('gray').style.display = state;
}

function shows(state)
{
document.getElementById('window1').style.display = state;
document.getElementById('gray1').style.display = state;
}

function shows1(state)
{
document.getElementById('window2').style.display = state;
document.getElementById('gray2').style.display = state;
}

function shows2()
{
document.getElementById('window1').style.display = 'block';
document.getElementById('gray1').style.display = 'block';
document.getElementById('window2').style.display = 'none';
document.getElementById('gray2').style.display = 'none';
}
