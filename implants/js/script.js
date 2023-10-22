console.info('%cSite designed and developed by Dental Design - https://dental-design.marketing', 'color: black' );

/*-----------------------------------------------------------------------------------*/
/* FORCE PAGE RELOAD TO STOP SAFARI & EDGE PAGE CHACHE */
/*-----------------------------------------------------------------------------------*/

window.onpageshow = function(event) {
  if (event.persisted) {
    window.location.reload()
  }
};


/*-----------------------------------------------------------------------------------*/
/* DIALOG */
/*-----------------------------------------------------------------------------------*/

const dialogs = document.querySelectorAll('[data-dialog]'),
      html = document.querySelector("html");

dialogs.forEach(function(trigger) {

  trigger.addEventListener('click', function(event) {

    event.preventDefault();

    const dialog = document.getElementById(trigger.dataset.dialog);

    dialog.classList.add('open');
    html.classList.add("dialog-active");

    const exits = dialog.querySelectorAll('[data-dialog-close]');

    exits.forEach(function(exit) {

      exit.addEventListener('click', function(event) {

        event.preventDefault();

        dialog.classList.remove('open');
        html.classList.remove("dialog-active");

      });

    });

  });

});


/*-----------------------------------------------------------------------------------*/
/* ACCORDION */
/*-----------------------------------------------------------------------------------*/

var headers = document.querySelectorAll('#dropItem > dt');

for(var i = 0; i < headers.length; i++) {
	headers[i].addEventListener('click', openCurrAccordion);
}

//Use this as the callback if you would like multiple dropdowns to be open
function openAccordion(e) {
	var parent = this.parentElement;
	
	if (!parent.classList.contains('open')) {
		parent.classList.add('open');
	}
	else {
		parent.classList.remove('open');
	}
}

//Use this as the callback if you would like no more than one dropdown to be open
function openCurrAccordion(e) {
	for(var i = 0; i < headers.length; i++) {
		var parent = headers[i].parentElement;

		if (this === headers[i] && !parent.classList.contains('open')) {
			parent.classList.add('open');
		}
		else {
			parent.classList.remove('open');
		}
	}
}


/*-----------------------------------------------------------------------------------*/
/* SELECT */
/*-----------------------------------------------------------------------------------*/

NiceSelect.bind(document.getElementById("select"), {searchable: false});


/*-----------------------------------------------------------------------------------*/
/* READ MORE */
/*-----------------------------------------------------------------------------------*/

const triggers = document.querySelectorAll('[data-toggle="collapse"]');

triggers.forEach(function(trigger) {

  trigger.addEventListener('click', function(ev) {

    const elm = ev.target;
    const selector = elm.getAttribute('data-target');
    collapse(selector, 'toggle');

    if (elm.innerText === 'Read more'){
      elm.innerText = 'Read less';
    } else{
      elm.innerText = 'Read more';
    }

  }, false);

  const fnmap = {
    'toggle': 'toggle',
    'show': 'add',
    'hide': 'remove'
  };

  const collapse = (selector, cmd) => {
    const targets = Array.from(document.querySelectorAll(selector));
    targets.forEach(target => {
      target.classList[fnmap[cmd]]('show');
    });
  }

});
