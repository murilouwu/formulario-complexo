var bt1 = document.querySelector('#b1');
var div1 = document.querySelector('.dp');
var bt2 = document.querySelector('#b2');
var div2 = document.querySelector('.end');
var bt3 = document.querySelector('#b3');
var div3 = document.querySelector('.con');
var bt4 = document.querySelector('#b4');
var div4 = document.querySelector('.form');

bt1.addEventListener('click', function() {
	if(div1.style.display === 'flex'){
		div1.style.display = 'none';
		bt1.textContent = "▲";
	}else{
		div1.style.display = 'flex';
		bt1.textContent = "▼";
		bt2.textContent = "▲";
		bt3.textContent = "▲";
		bt4.textContent = "▲";
		div2.style.display = 'none';
		div3.style.display = 'none';
		div4.style.display = 'none';
	}
});

bt2.addEventListener('click', function() {
	if(div2.style.display === 'flex'){
		div2.style.display = 'none';
		bt2.textContent = "▲";
	}else{
		div2.style.display = 'flex';
		bt2.textContent = "▼";
		bt1.textContent = "▲";
		bt3.textContent = "▲";
		bt4.textContent = "▲";
		div1.style.display = 'none';
		div3.style.display = 'none';
		div4.style.display = 'none';
	}
});

bt3.addEventListener('click', function() {
	if(div3.style.display === 'flex'){
		div3.style.display = 'none';
		bt3.textContent = "▲";
	}else{
		div3.style.display = 'flex';
		bt3.textContent = "▼";
		bt2.textContent = "▲";
		bt1.textContent = "▲";
		bt4.textContent = "▲";
		div2.style.display = 'none';
		div1.style.display = 'none';
		div4.style.display = 'none';
	}
});

bt4.addEventListener('click', function() {
	if(div4.style.display === 'flex'){
		div4.style.display = 'none';
		bt4.textContent = "▲";
	}else{
		div4.style.display = 'flex';
		bt4.textContent = "▼";
		bt2.textContent = "▲";
		bt3.textContent = "▲";
		bt1.textContent = "▲";
		div2.style.display = 'none';
		div3.style.display = 'none';
		div1.style.display = 'none';
	}
});