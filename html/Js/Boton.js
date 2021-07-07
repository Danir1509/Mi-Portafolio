
window.onscroll = function(){
	if(document.documentElement.scrollTop > 100){
		document.querySelector('.arribacontenedor').classList.add('show');
		
	}else{
		document.querySelector('.arribacontenedor').classList.remove('show');
	}
}

document.querySelector('.arribacontenedor').addEventListener('click',()=>{
	window.scrollTo({ 
		top: 0,
		tehavior: 'smooth'
	});
});