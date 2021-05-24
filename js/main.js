
/***********DETALJI U TABELI NA INDEX STRANICI************/
$(".accordion__title.active").next().slideDown();
$(".accordion__title").on("click", function () {
  if( $(this).hasClass('active') ) {
		$(this).removeClass("active").next().slideUp();
	} else {
		$(".accordion__title.active").removeClass("active").next(".accordion__body").slideUp();
    $(this).addClass('active').next('.accordion__body').slideDown();
	}
});

/**********NASLOV NA INDEX STRANICI H1*********/
const glowing = {
  wordEl:'h1',
  letterEl:'span',
  output:'',
  splitWord: function() {
    let word = document.querySelector(this.wordEl)
    let wordText = word.innerHTML;
    let letters = wordText.split('');
    letters.forEach( letter => {
      this.output += `<span class="letter">${letter}</span>`;
    })
    word.innerHTML = this.output;

  },
  animatedText: function() {
    var letters = document.querySelectorAll('.letter');
    letters.forEach((letter,i) => {
      letter.style.transform = `scale(${(Math.random() * .5) + 1}`;
      letter.style.top = `${Math.random() * 20}px`;
      document.documentElement.style.setProperty(`--blur-${i}`, `${(Math.random() * 90) + 30}px` );
    })
  }
}

glowing.splitWord();

setInterval(( ) => {
  glowing.animatedText();
}, 1200);




// const deleteBTnIndex=document.querySelectorAll('.deleteBtn')[0]
// deleteBTnIndex.addeventListener('click',confirmationDelete);
